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
 * Issuer serial
 * 
 * @author Sean Kau (kliensheng2020@gmail.com)
 * @since 1.0.0
 */
class IssuerSerial implements ISerializable, IValidator
{
    private $issuerName;
    private $serialNumber;

    /**
     * @return string
     */
    public function getIssuerName()
    {
        return $this->issuerName;
    }

    /**
     * @param string $issuerName
     * @return IssuerSerial
     */
    public function setIssuerName($issuerName)
    {
        $this->issuerName = $issuerName;
        return $this;
    }

    /**
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    /**
     * @param string $serialNumber
     * @return IssuerSerial
     */
    public function setSerialNumber($serialNumber)
    {
        $this->serialNumber = $serialNumber;
        return $this;
    }

    /**
     * validate function
     *
     * @throws InvalidArgumentException An error with information about required data that is missing
     */
    public function validate()
    {
        if(empty($this->issuerName)) {
            throw new InvalidArgumentException('Missing IssuerSerial issuerName');
        }

        if(empty($this->serialNumber)) {
            throw new InvalidArgumentException('Missing IssuerSerial serialNumber');
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

        if (!empty($this->issuerName)) {
            $writer->write([
                'name' => XmlSchema::DS . 'X509IssuerName',
                'value' => $this->issuerName,
            ]);
        }

        if (!empty($this->serialNumber)) {
            $writer->write([
                'name' => XmlSchema::DS . 'X509SerialNumber',
                'value' => $this->serialNumber,
            ]);
        }
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

        if (!empty($this->issuerName)) {
            $arrays['X509IssuerName'][] = [
                '_' => $this->issuerName,
            ];
        }

        if (!empty($this->serialNumber)) {
            $arrays['X509SerialNumber'][] = [
                '_' => $this->serialNumber,
            ];
        }


        return $arrays;
    }
}
