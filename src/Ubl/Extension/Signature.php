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

class Signature implements ISerializable, IValidator
{
    private $attributes = [];
    private $signatureValue;
    private $signInfo;
    private $keyInfo;
    private $object;

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
     * @return Signature
     */
    public function setAttributes($attributes)
    {
        if(is_array($attributes)) {
            $this->attributes = array_merge($attributes, $this->attributes);
        }
        return $this;
    }

    /**
     * @return string
     */
    public function getSignatureValue()
    {
        return $this->signatureValue;
    }

    /**
     * @param string $signatureValue
     * @return Signature
     */
    public function setSignatureValue($signatureValue)
    {
        $this->signatureValue = $signatureValue;
        return $this;
    }

    /**
     * @return SignInfo
     */
    public function getSignInfo()
    {
        return $this->signInfo;
    }

    /**
     * @param SignInfo $signInfo
     * @return Signature
     */
    public function setSignInfo(SignInfo $signInfo)
    {
        $this->signInfo = $signInfo;
        return $this;
    }

    /**
     * @return SignInfo
     */
    public function getKeyInfo()
    {
        return $this->keyInfo;
    }

    /**
     * @param KeyInfo $keyInfo
     * @return Signature
     */
    public function setKeyInfo(KeyInfo $keyInfo)
    {
        $this->keyInfo = $keyInfo;
        return $this;
    }

    /**
     * @return SignatureObject
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param SignatureObject $object
     * @return Signature
     */
    public function setObject(SignatureObject $object)
    {
        $this->object = $object;
        return $this;
    }

    /**
     * validate function
     *
     * @throws InvalidArgumentException An error with information about required data that is missing
     */
    public function validate()
    {
        if(empty($this->signatureValue)) {
            throw new InvalidArgumentException('Missing Signature signatureValue');
        }

        if($this->signInfo === null) {
            throw new InvalidArgumentException('Missing Signature signInfo');
        }

        if($this->keyInfo === null) {
            throw new InvalidArgumentException('Missing Signature keyInfo');
        }

        if($this->object === null) {
            throw new InvalidArgumentException('Missing Signature object');
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

        if ($this->signInfo !== null) {
            $writer->write([
                'name' => XmlSchema::DS . 'SignedInfo',
                'value' => $this->signInfo,
            ]);
        }

        if ($this->signatureValue !== null) {
            $writer->write([
                'name' => XmlSchema::DS . 'SignatureValue',
                'value' => $this->signatureValue,
            ]);
        }

        if ($this->keyInfo !== null) {
            $writer->write([
                'name' => XmlSchema::DS . 'KeyInfo',
                'value' => $this->keyInfo,
            ]);
        }

        if ($this->object !== null) {
            $writer->write([
                'name' => XmlSchema::DS . 'Object',
                'value' => $this->object,
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

        if ($this->signInfo !== null) {
            $arrays['SignedInfo'][] = $this->signInfo;
        }

        if ($this->signatureValue !== null) {
            $arrays['SignatureValue'][] = [
                '_' => $this->signatureValue,
            ];
        }

        if ($this->keyInfo !== null) {
            $arrays['KeyInfo'][] = $this->keyInfo;
        }

        if ($this->object !== null) {
            $arrays['Object'][] = $this->object;
        }

        return $arrays;
    }
}
