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
 * Cert digest
 * 
 * @author Sean Kau (kliensheng2020@gmail.com)
 * @since 1.0.0
 */
class CertDigest implements ISerializable, IValidator
{
    private $digestValue;

    /**
     * @return string
     */
    public function getDigestValue()
    {
        return $this->digestValue;
    }

    /**
     * @param string $digestValue
     * @return CertDigest
     */
    public function setDigestValue($digestValue)
    {
        $this->digestValue = $digestValue;
        return $this;
    }

    /**
     * validate function
     *
     * @throws InvalidArgumentException An error with information about required data that is missing
     */
    public function validate()
    {
        if(empty($this->digestValue)) {
            throw new InvalidArgumentException('Missing CertDigest digestValue');
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
            'name' => XmlSchema::DS . 'DigestMethod',
            'attributes' => [
                'Algorithm' => 'http://www.w3.org/2001/04/xmlenc#sha256',
            ]
        ]);

        if (!empty($this->digestValue)) {
            $writer->write([
                'name' => XmlSchema::DS . 'DigestValue',
                'value' => $this->digestValue,
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

        $arrays['DigestMethod'][] = [
            '_' => '',
            'Algorithm' => 'http://www.w3.org/2001/04/xmlenc#sha256',
        ];

        if (!empty($this->digestValue)) {
            $arrays['DigestValue'][] = [
                '_' => $this->digestValue,
            ];
        }

        return $arrays;
    }
}
