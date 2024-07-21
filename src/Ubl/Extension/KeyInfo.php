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
 * Key info
 * 
 * @author Sean Kau (kliensheng2020@gmail.com)
 * @since 1.0.0
 */
class KeyInfo implements ISerializable, IValidator
{
    private $x509Data;

    /**
     * @return KeyInfoX509Data
     */
    public function getX509Data()
    {
        return $this->x509Data;
    }

    /**
     * @param KeyInfoX509Data $x509Data
     * @return KeyInfo
     */
    public function setX509Data(KeyInfoX509Data $x509Data)
    {
        $this->x509Data = $x509Data;
        return $this;
    }

    /**
     * validate function
     *
     * @throws InvalidArgumentException An error with information about required data that is missing
     */
    public function validate()
    {
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

        if ($this->x509Data !== null) {
            $writer->write([
                'name' => XmlSchema::DS . 'X509Data',
                'value' => $this->x509Data,
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

        if ($this->x509Data !== null) {
            $arrays['X509Data'][] = $this->x509Data;
        }

        return $arrays;
    }
}
