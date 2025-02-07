<?php

/**
 * @copyright Copyright (c) 2024 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

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

/**
 * Abstract document builder
 * 
 * @author Sean Kau (kliensheng2020@gmail.com)
 * @since 1.0.0
 */
abstract class AbstractDocumentBuilder implements IDocumentBuilder
{
    private $document = null;
    protected $isSigned = false;
    protected $issuerKeys = null;

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
    public function setIssuerKeys($issuerKeys)
    {
        $this->issuerKeys = $issuerKeys;
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

        // From LHDN sample, It must be below sequence, bad design
        $issuerKeys = ['CN', 'E', 'OU', 'O', 'C'];
        if(!empty($this->issuerKeys) && is_array($this->issuerKeys)) {
            $issuerKeys = $this->issuerKeys;
        }
        foreach($issuerKeys as $issuerKey) {
            if(array_key_exists($issuerKey, $issuerArray)) {
                $issuerValue = $issuerArray[$issuerKey];
                unset($issuerArray[$issuerKey]);
                $issuerArray = array_merge($issuerArray, [
                    $issuerKey => $issuerValue,
                ]);
            }
        }

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

        $signature = $this->setSignatureValue($signature, $certPrivateKeyContent, $documentString);
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

    /**
     * Set SignInfo into Signature object
     * 
     * @param Signature $signature Signature object
     * @param string $documentHash Document hash
     * @return Signature
     */
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
            'Type' => 'http://uri.etsi.org/01903/v1.3.2#SignedProperties',
            'URI' => '#id-xades-signed-props',
        ]);
        $reference->setDigestValue(base64_encode($propsDigestHash));

        $signedInfo->addReference($reference);

        $signature->setSignInfo($signedInfo);

        return $signature;
    }

    /**
     * Set KeyInfo into Signature object
     * 
     * @param Signature $signature Signature object
     * @param string $certContent Cert content
     * @param IssuerSerial $issuerSerial IssuerSerial object
     * @return Signature
     */
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

    /**
     * Set SignatureObject into Signature object
     * 
     * @param Signature $signature Signature object
     * @param string $certContent Cert content
     * @param IssuerSerial $issuerSerial IssuerSerial object
     * @return Signature
     */
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

    /**
     * Set SignatureValue into Signature object
     * 
     * @param Signature $signature Signature object
     * @param string $certPrivateKeyContent Cert's private key content
     * @param string $documentString Document JSON string
     * @return Signature
     */
    private function setSignatureValue(Signature $signature, $certPrivateKeyContent, $documentString)
    {
        // https://sdk.myinvois.hasil.gov.my/signature-creation/
        // Step 4
        openssl_sign($documentString, $signatureValue, $certPrivateKeyContent, OPENSSL_ALGO_SHA256);

        $signature->setSignatureValue(base64_encode($signatureValue));

        return $signature;
    }

    /**
     * Get certificate related content
     * 
     * @param string $content Content
     * @return string
     */
    private function getRawContent($content)
    {
        $content = str_replace(array("\r"), '', $content);
        $keyArray = explode("\n", $content);

        // Remove -----BEGIN XXXX PRIVATE KEY-----
        unset($keyArray[0]);

        $lastKey = key(array_slice($keyArray, -1, 1, true));

        // Remove last empty space line
        while(empty($keyArray[$lastKey])) {
            unset($keyArray[$lastKey]);
            $lastKey = key(array_slice($keyArray, -1, 1, true));
        }
        
        // Remove -----END RSA PRIVATE KEY-----
        unset($keyArray[$lastKey]);

        return implode('', $keyArray);
    }
}
