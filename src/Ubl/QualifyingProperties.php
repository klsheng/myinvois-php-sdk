<?php

namespace Klsheng\Myinvois\Ubl;

use InvalidArgumentException;
use Sabre\Xml\Writer;

class QualifyingProperties implements ISerializable, IValidator
{
    private $signedProperties;

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

        if ($this->signedProperties !== null) {
            $arrays['SignedProperties'][] = $this->signedProperties;
        }

        return $arrays;
    }
}
