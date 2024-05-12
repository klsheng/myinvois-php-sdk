<?php

namespace Klsheng\Myinvois\Ubl\Extension;

use InvalidArgumentException;
use Sabre\Xml\Writer;
use Klsheng\Myinvois\Ubl\ISerializable;
use Klsheng\Myinvois\Ubl\IValidator;
use Klsheng\Myinvois\Ubl\XmlSchema;

class SignatureObject implements ISerializable, IValidator
{
    private $qualifyingProperties;

    /**
     * @return QualifyingProperties
     */
    public function getQualifyingProperties()
    {
        return $this->qualifyingProperties;
    }

    /**
     * @param QualifyingProperties $qualifyingProperties
     * @return SignatureObject
     */
    public function setQualifyingProperties(QualifyingProperties $qualifyingProperties)
    {
        $this->qualifyingProperties = $qualifyingProperties;
        return $this;
    }

    /**
     * validate function
     *
     * @throws InvalidArgumentException An error with information about required data that is missing
     */
    public function validate()
    {
        if($this->qualifyingProperties === null) {
            throw new InvalidArgumentException('Missing SignatureObject qualifyingProperties');
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
            'http://uri.etsi.org/01903/v1.3.2#' => 'xades',
        ]);

        if ($this->qualifyingProperties !== null) {
            $writer->write([
                'name' => XmlSchema::XADES . 'QualifyingProperties',
                'value' => $this->qualifyingProperties,
                'attributes' => [
                    'xmlns:xades' => 'http://uri.etsi.org/01903/v1.3.2#',
                    'Target' => 'signature',
                ],
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

        if ($this->qualifyingProperties !== null) {
            $arrays['QualifyingProperties'][] = $this->qualifyingProperties;
        }

        return $arrays;
    }
}
