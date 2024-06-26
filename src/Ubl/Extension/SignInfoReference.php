<?php

namespace Klsheng\Myinvois\Ubl\Extension;

use InvalidArgumentException;
use Sabre\Xml\Writer;
use Klsheng\Myinvois\Ubl\ISerializable;
use Klsheng\Myinvois\Ubl\IValidator;
use Klsheng\Myinvois\Ubl\XmlSchema;

class SignInfoReference implements ISerializable, IValidator
{
    private $attributes = [];
    private $transforms = [];
    private $digestValue;

    /**
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param array $attributes
     * @return SignInfoReference
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
        return $this;
    }

    /**
     * @return SignInfoTransform[]
     */
    public function getTransforms()
    {
        return $this->transforms;
    }

    /**
     * @param SignInfoTransform $transform
     * @return SignInfoReference
     */
    public function setTransform(SignInfoTransform $transform)
    {
        $this->transforms = [$transform];
        return $this;
    }

    /**
     * @param SignInfoTransform[] $transforms
     * @return SignInfoReference
     */
    public function setTransforms($transforms)
    {
        $this->transforms = $transforms;
        return $this;
    }

    /**
     * @param SignInfoTransform $reference
     * @return SignInfoReference
     */
    public function addTransform(SignInfoTransform $transform)
    {
        $this->transforms[] = $transform;
        return $this;
    }

    /**
     * @return string
     */
    public function getDigestValue()
    {
        return $this->digestValue;
    }

    /**
     * @param string $digestValue
     * @return SignInfoReference
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
        if (empty($this->digestValue)) {
            throw new InvalidArgumentException('Missing SignInfoReference digestValue');
        }

        // if (empty($this->transforms)) {
        //     throw new InvalidArgumentException('Missing SignInfoReference transforms');
        // }
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

        if (!empty($this->transforms)) {
            $childs = [];
            foreach ($this->transforms as $transform) {
                $childs[] = [
                    'name' => XmlSchema::DS . 'Transform',
                    'value' => $transform,
                    'attributes' => $transform->getAttributes(),
                ];
            }

            $writer->write([
                'name' => XmlSchema::DS . 'Transforms',
                'value' => $childs,
            ]);
        }

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

        // https://sdk.myinvois.hasil.gov.my/files/sample-ul-invoice-2.1-signed.min.json
        // JSON doesn't have this
        /*
        if (!empty($this->transforms)) {
            foreach ($this->transforms as $transform) {
                $arrays['Transform'][] = $transform;
            }
        }
        */

        if($this->attributes !== null) {
            foreach($this->attributes as $key => $value) {
                $arrays[$key] = $value;
            }
        }

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
