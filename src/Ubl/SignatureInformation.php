<?php

namespace Klsheng\Myinvois\Ubl;

use InvalidArgumentException;
use Sabre\Xml\Writer;

class SignatureInformation implements ISerializable, IValidator
{
    private $signature;
    private $signatureAttributes = [];

    /**
     * @return Signature
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * @param Signature $signature
     * @param array $attributes Optional
     * 
     * @return SignatureInformation
     */
    public function setSignature(Signature $signature, $attributes = null)
    {
        $this->signature = $signature;
        if (isset($attributes)) {
            $this->signatureAttributes = $attributes;
        }
        return $this;
    }

    /**
     * validate function
     *
     * @throws InvalidArgumentException An error with information about required data that is missing
     */
    public function validate()
    {
        if($this->signature === null) {
            throw new InvalidArgumentException('Missing SignatureInformation signature');
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

        $writer->namespaceMap = array_merge($writer->namespaceMap, [
            'http://www.w3.org/2000/09/xmldsig#' => 'ds',
        ]);

        $this->signatureAttributes = array_merge([
            'xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
        ], $this->signatureAttributes);

        if ($this->signature !== null) {
            $writer->write([
                'name' => XmlSchema::DS . 'Signature',
                'value' => $this->signature,
                'attributes' => $this->signatureAttributes,
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

        if ($this->signature !== null) {
            $arrays['Signature'][] = $this->signature;
            //$arrays['Signature'][] = $this->signatureAttributes; // From reference, it doesn't seem to have attributes for JSON
        }

        return $arrays;
    }
}
