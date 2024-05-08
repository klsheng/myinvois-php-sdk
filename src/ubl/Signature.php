<?php

namespace klsheng\myinvois\ubl;

use InvalidArgumentException;
use Sabre\Xml\Writer;

class Signature implements ISerializable, IValidator
{
    private $signatureValue;

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
     * validate function
     *
     * @throws InvalidArgumentException An error with information about required data that is missing
     */
    public function validate()
    {
        if(empty($this->signatureValue)) {
            throw new InvalidArgumentException('Missing Signature signatureValue');
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

        if ($this->signatureValue !== null) {
            $writer->write([
                'name' => XmlSchema::DS . 'SignatureValue',
                'value' => $this->signatureValue,
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

        if ($this->signatureValue !== null) {
            $arrays['SignatureValue'][] = [
                '_' => $this->signatureValue,
            ];
        }

        return $arrays;
    }
}
