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

/**
 * X509 data
 * 
 * @author Sean Kau (kliensheng2020@gmail.com)
 * @since 1.0.0
 */
class KeyInfoX509Data implements ISerializable, IValidator
{
    private $x509Certificate;
    private $issuerSerial;

    /**
     * @return string
     */
    public function getX509Certificate()
    {
        return $this->x509Certificate;
    }

    /**
     * @param string $x509Certificate
     * @return KeyInfoX509Data
     */
    public function setX509Certificate($x509Certificate)
    {
        $this->x509Certificate = $x509Certificate;
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
     * @return KeyInfoX509Data
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
        if (empty($this->x509Certificate)) {
            throw new InvalidArgumentException('Missing KeyInfoX509Data x509Certificate');
        }

        if($this->issuerSerial === null) {
            throw new InvalidArgumentException('Missing KeyInfoX509Data issuerSerial');
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

        if ($this->x509Certificate !== null) {
            $writer->write([
                'name' => XmlSchema::DS . 'X509Certificate',
                'value' => $this->x509Certificate,
            ]);
        }

        // https://sdk.myinvois.hasil.gov.my/files/one-doc-signed.xml
        // XML format doesn't have while JSON format have
        /*
        if($this->issuerSerial !== null) {
            $writer->write([
                'name' => XmlSchema::DS . 'X509SubjectName',
                'value' => $this->issuerSerial->getIssuerName(),
            ]);

            $writer->write([
                'name' => XmlSchema::DS . 'X509IssuerSerial',
                'value' => $this->issuerSerial,
            ]);
        }
        */
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

        if ($this->x509Certificate !== null) {
            $arrays['X509Certificate'][] = [
                '_' => $this->x509Certificate,
            ];
        }

        if($this->issuerSerial !== null) {
            $arrays['X509SubjectName'][] = [
                '_' => $this->issuerSerial->getIssuerName(),
            ];

            $arrays['X509IssuerSerial'][] = $this->issuerSerial;
        }

        return $arrays;
    }
}
