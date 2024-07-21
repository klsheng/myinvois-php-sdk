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
 * Qualifying properties
 * 
 * @author Sean Kau (kliensheng2020@gmail.com)
 * @since 1.0.0
 */
class QualifyingProperties implements ISerializable, IValidator
{
    private $attributes = [
        'Target' => 'signature',
    ];
    private $signedProperties;

    /**
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param array $attributes
     * 
     * @return QualifyingProperties
     */
    public function setAttributes($attributes)
    {
        if(is_array($attributes)) {
            $this->attributes = array_merge($attributes, $this->attributes);
        }
        return $this;
    }

    /**
     * @return SignedProperties
     */
    public function getSignedProperties()
    {
        return $this->signedProperties;
    }

    /**
     * @param SignedProperties $signedProperties
     * @return QualifyingProperties
     */
    public function setSignedProperties(SignedProperties $signedProperties)
    {
        $this->signedProperties = $signedProperties;
        return $this;
    }

    /**
     * validate function
     *
     * @throws InvalidArgumentException An error with information about required data that is missing
     */
    public function validate()
    {
        if($this->signedProperties === null) {
            throw new InvalidArgumentException('Missing QualifyingProperties signedProperties');
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

        if ($this->signedProperties !== null) {
            $writer->write([
                'name' => XmlSchema::XADES . 'SignedProperties',
                'value' => $this->signedProperties,
                'attributes' => [
                    'Id' => 'id-xades-signed-props',
                ]
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

        if($this->attributes !== null) {
            foreach($this->attributes as $key => $value) {
                $arrays[$key] = $value;
            }
        }

        if ($this->signedProperties !== null) {
            $arrays['SignedProperties'][] = $this->signedProperties;
        }

        return $arrays;
    }
}
