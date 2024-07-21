<?php

/**
 * @copyright Copyright (c) 2024 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

namespace Klsheng\Myinvois\Ubl\Extension;

use InvalidArgumentException;
use Sabre\Xml\Writer;
use Klsheng\Myinvois\Ubl\ISerializable;
use Klsheng\Myinvois\Ubl\IValidator;
use Klsheng\Myinvois\Ubl\XmlSchema;

class SigningCertificate implements ISerializable, IValidator
{
    private $certDigest;
    private $issuerSerial;

    /**
     * @return string
     */
    public function getCertDigest()
    {
        return $this->certDigest;
    }

    /**
     * @param CertDigest $certDigest
     * @return SigningCertificate
     */
    public function setCertDigest(CertDigest $certDigest)
    {
        $this->certDigest = $certDigest;
        return $this;
    }

    /**
     * @return IssuerSerial
     */
    public function getIssuerSerial()
    {
        return $this->issuerSerial;
    }

    /**
     * @param IssuerSerial $issuerSerial
     * @return SigningCertificate
     */
    public function setIssuerSerial(IssuerSerial $issuerSerial)
    {
        $this->issuerSerial = $issuerSerial;
        return $this;
    }

    /**
     * validate function
     *
     * @throws InvalidArgumentException An error with information about required data that is missing
     */
    public function validate()
    {
        if($this->certDigest === null) {
            throw new InvalidArgumentException('Missing SigningCertificate certDigest');
        }

        if($this->issuerSerial === null) {
            throw new InvalidArgumentException('Missing SigningCertificate issuerSerial');
        }
    }

    /**
     * The xmlSerialize method is called during xml writing.
     *
     * @param Writer $writer
     * @return void
     */
    public function xmlSerialize(Writer $writer): void
    {
        $this->validate();

        $writer->write([
            'name' => XmlSchema::XADES . 'Cert',
            'value' => [
                XmlSchema::XADES . 'CertDigest' => $this->certDigest,
                XmlSchema::XADES . 'IssuerSerial' => $this->issuerSerial,
            ],
        ]);
    }

    /**
     * The jsonSerialize method is called during json writing.
     *
     * @return array
     */
    public function jsonSerialize()
    {
        $this->validate();

        $arrays = [];

        $arrays['Cert'][] = [
            'CertDigest' => [
                $this->certDigest
            ],
            'IssuerSerial' => [
                $this->issuerSerial
            ],
        ];

        return $arrays;
    }
}
