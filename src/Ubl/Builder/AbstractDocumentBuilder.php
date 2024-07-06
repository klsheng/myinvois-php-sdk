<?php

namespace Klsheng\Myinvois\Ubl\Builder;

use DateTime;
use DateTimeZone;
use InvalidArgumentException;
use Klsheng\Myinvois\Ubl\Constant\UblAttributes;
use Klsheng\Myinvois\Helper\MyInvoisHelper;
use Klsheng\Myinvois\Ubl\Invoice;
use Klsheng\Myinvois\Ubl\Extension\UBLExtensions;
use Klsheng\Myinvois\Ubl\Extension\UBLExtensionItem;
use Klsheng\Myinvois\Ubl\Extension\UBLDocumentSignatures;
use Klsheng\Myinvois\Ubl\Extension\SignatureInformation;
use Klsheng\Myinvois\Ubl\Extension\Signature;
use Klsheng\Myinvois\Ubl\Extension\SignInfo;
use Klsheng\Myinvois\Ubl\Extension\SignInfoReference;
use Klsheng\Myinvois\Ubl\Extension\SignInfoTransform;
use Klsheng\Myinvois\Ubl\Extension\KeyInfo;
use Klsheng\Myinvois\Ubl\Extension\KeyInfoX509Data;
use Klsheng\Myinvois\Ubl\Extension\SignatureObject;
use Klsheng\Myinvois\Ubl\Extension\QualifyingProperties;
use Klsheng\Myinvois\Ubl\Extension\SignedProperties;
use Klsheng\Myinvois\Ubl\Extension\SignedSignatureProperties;
use Klsheng\Myinvois\Ubl\Extension\SigningCertificate;
use Klsheng\Myinvois\Ubl\Extension\CertDigest;
use Klsheng\Myinvois\Ubl\Extension\IssuerSerial;

abstract class AbstractDocumentBuilder implements IDocumentBuilder
{
    private $document = null;
    protected $isSigned = false;

    /**
     * {@inheritdoc}
     */
    public function setDocument(Invoice $invoice)
    {
        $this->document = $invoice;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function createSignature($certFilePath, $certPrivateKeyFilePath, $passphrase = null)
    {
        if(empty($certFilePath)) {
            throw new InvalidArgumentException('certFilePath is empty');
        }

        if(empty($certPrivateKeyFilePath) && empty($passphrase)) {
            throw new InvalidArgumentException('certPrivateKeyFilePath and passphrase is empty');
        }

        $certContent = file_get_contents($certFilePath);

        $ext = pathinfo($certFilePath, PATHINFO_EXTENSION);
        if($ext ==='p12' || $ext === 'pfx') {
            if(!openssl_pkcs12_read($certContent, $certs, $passphrase)) {
                throw new InvalidArgumentException('certFilePath is invalid');
            }

            $certContent = $certs['cert'];
            $certPrivateKeyContent = $certs['pkey'];
        } else {
            $certPrivateKeyContent = file_get_contents($certPrivateKeyFilePath);
        }

        $data = openssl_x509_parse($certContent);
        $issuerArray = $data['issuer'];
        $issuerName = urldecode(http_build_query($issuerArray, '', ', '));
        $serialNumber = $data['serialNumber'];

        $issuerSerial = new IssuerSerial();
        $issuerSerial->setIssuerName($issuerName);
        $issuerSerial->setSerialNumber($serialNumber);

        $signature = new Signature();
        $signature->setAttributes(['Id' => 'signature']);

        // Get original document and hash first before insert signature component
        $documentString = $this->build();
        // hash in bytes
        $documentHash = MyInvoisHelper::getHash($documentString, true);

        $signature = $this->setSignatureValue($signature, $certPrivateKeyContent, $documentHash);
        $signature = $this->setSignatureObject($signature, $certContent, $issuerSerial);
        $signature = $this->setKeyInfo($signature, $certContent, $issuerSerial);
        $signature = $this->setSignInfo($signature, $documentHash);

        $information = new SignatureInformation();
        $information->setSignature($signature);

        $sign = new UBLDocumentSignatures();
        $sign->setSignatureInformation($information);

        $ublExtensionItem = new UBLExtensionItem();
        $ublExtensionItem->setContent($sign);

        $ublExtensions = new UBLExtensions();
        $ublExtensions->addUBLExtensionItem($ublExtensionItem);
        
        $this->document->setUBLExtensions($ublExtensions);

        $this->isSigned = true;

        return $this;
    }

    /**
     * @return Invoice
     */
    protected function getDocument()
    {
        if($this->document === null) {
            throw new InvalidArgumentException('Document is null');
        }

        return $this->document;
    }

    private function setSignInfo(Signature $signature, $documentHash)
    {
        $signedInfo = new SignInfo();

        // Reference 1
        // https://sdk.myinvois.hasil.gov.my/signature-creation/
        // Step 3
        $reference = new SignInfoReference();
        $reference->setAttributes([
            'Id' => 'id-doc-signed-data',
            'URI' => '',
        ]);
        $reference->setDigestValue(base64_encode($documentHash));

        $transform = new SignInfoTransform();
        $transform->setXPath('not(//ancestor-or-self::ext:UBLExtensions)');
        $reference->addTransform($transform);

        $transform = new SignInfoTransform();
        $transform->setXPath('not(//ancestor-or-self::cac:Signature)');
        $reference->addTransform($transform);

        $transform = new SignInfoTransform();
        $transform->setAttributes([
            UblAttributes::ALGORITHM => 'http://www.w3.org/2006/12/xml-c14n11',
        ]);
        $reference->addTransform($transform);

        $signedInfo->addReference($reference);

        // Reference 2
        // https://sdk.myinvois.hasil.gov.my/signature-creation/
        // Step 7

        $propsDigestHash = $this->getPropsDigestHash($signature);

        $reference = new SignInfoReference();
        $reference->setAttributes([
            'Type' => 'http://www.w3.org/2000/09/xmldsig#SignatureProperties',
            'URI' => '#id-xades-signed-props',
        ]);
        $reference->setDigestValue(base64_encode($propsDigestHash));

        $signedInfo->addReference($reference);

        $signature->setSignInfo($signedInfo);

        return $signature;
    }

    private function setKeyInfo(Signature $signature, $certContent, IssuerSerial $issuerSerial)
    {
        $cert = $this->getRawContent($certContent);

        $x509Data = new KeyInfoX509Data();
        $x509Data->setX509Certificate($cert);
        $x509Data->setIssuerSerial($issuerSerial);

        $keyInfo = new KeyInfo();
        $keyInfo->setX509Data($x509Data);

        $signature->setKeyInfo($keyInfo);

        return $signature;
    }

    private function setSignatureObject(Signature $signature, $certContent, IssuerSerial $issuerSerial)
    {
        $signingTime = new DateTime('now', new DateTimeZone('UTC'));

        // https://sdk.myinvois.hasil.gov.my/signature-creation/
        // Step 5 & 6
        $cert = $this->getRawContent($certContent);
        $decodedCertBytes = base64_decode($cert);
        $certHash = MyInvoisHelper::getHash($decodedCertBytes, true);

        $certDigest = new CertDigest();
        $certDigest->setDigestValue(base64_encode($certHash));

        $signingCertificate = new SigningCertificate();
        $signingCertificate->setCertDigest($certDigest);
        $signingCertificate->setIssuerSerial($issuerSerial);

        $signedSignatureProperties = new SignedSignatureProperties();
        $signedSignatureProperties->setSigningTime($signingTime);
        $signedSignatureProperties->setSigningCertificate($signingCertificate);

        $signedProperties = new SignedProperties();
        $signedProperties->setSignedSignatureProperties($signedSignatureProperties);

        $qualifyingProperties = new QualifyingProperties();
        $qualifyingProperties->setSignedProperties($signedProperties);

        $signatureObject = new SignatureObject();
        $signatureObject->setQualifyingProperties($qualifyingProperties);

        $signature->setObject($signatureObject);

        return $signature;
    }

    private function setSignatureValue(Signature $signature, $certPrivateKeyContent, $documentHash)
    {
        // https://sdk.myinvois.hasil.gov.my/signature-creation/
        // Step 4
        openssl_sign($documentHash, $signatureValue, $certPrivateKeyContent, OPENSSL_ALGO_SHA256);

        $signature->setSignatureValue(base64_encode($signatureValue));

        return $signature;
    }

    private function getRawContent($content)
    {
        $content = str_replace(array("\r"), '', $content);
        $keyArray = explode("\n", $content);

        // Remove -----BEGIN XXXX PRIVATE KEY-----
        unset($keyArray[0]);

        $lastKey = key(array_slice($keyArray, -1, 1, true));

        // Remove last empty space line
        unset($keyArray[$lastKey]);
        // Remove -----END RSA PRIVATE KEY-----
        unset($keyArray[$lastKey - 1]);

        return implode('', $keyArray);
    }
}