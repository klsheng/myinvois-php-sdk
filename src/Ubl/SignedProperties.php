<?php

namespace Klsheng\Myinvois\Ubl;

use InvalidArgumentException;
use Sabre\Xml\Writer;

class SignedProperties implements ISerializable, IValidator
{
    private $signedSignatureProperties;

    /**
     * @return SignedSignatureProperties
     */
    public function getSignedSignatureProperties()
    {
        return $this->signedSignatureProperties;
    }

    /**
     * @param SignedSignatureProperties $signedSignatureProperties
     * @return SignedProperties
     */
    public function setSignedSignatureProperties(SignedSignatureProperties $signedSignatureProperties)
    {
        $this->signedSignatureProperties = $signedSignatureProperties;
        return $this;
    }

    /**
     * validate function
     *
     * @throws InvalidArgumentException An error with information about required data that is missing
     */
    public function validate()
    {
        if($this->signedSignatureProperties === null) {
            throw new InvalidArgumentException('Missing SignedProperties signedSignatureProperties');
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

        if ($this->signedSignatureProperties !== null) {
            $writer->write([
                'name' => XmlSchema::XADES . 'SignedSignatureProperties',
                'value' => $this->signedSignatureProperties,
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

        if ($this->signedSignatureProperties !== null) {
            $arrays['SignedSignatureProperties'][] = $this->signedSignatureProperties;
        }

        return $arrays;
    }
}
