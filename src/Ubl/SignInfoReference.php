<?php

namespace Klsheng\Myinvois\Ubl;

use InvalidArgumentException;
use Sabre\Xml\Writer;

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
            foreach ($this->transforms as $transform) {
                $writer->write([
                    'name' => XmlSchema::DS . 'Transform',
                    'value' => $transform,
                    'attributes' => [
                        'Algorithm' => 'http://www.w3.org/TR/1999/REC-xpath-19991116',
                    ],
                ]);
            }
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

        if (!empty($this->transforms)) {
            foreach ($this->transforms as $transform) {
                $arrays['Transform'][] = $transform;
            }
        }

        $arrays['DigestMethod'][] = [
            '_' => '',
        ];

        if (!empty($this->digestValue)) {
            $arrays['DigestValue'][] = [
                '_' => $this->digestValue,
            ];
        }

        return $arrays;
    }
}
