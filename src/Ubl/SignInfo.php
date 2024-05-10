<?php

namespace Klsheng\Myinvois\Ubl;

use InvalidArgumentException;
use Sabre\Xml\Writer;

class SignInfo implements ISerializable, IValidator
{
    private $references = [];

    /**
     * @return SignInfoReference[]
     */
    public function getReferences()
    {
        return $this->references;
    }

    /**
     * @param SignInfoReference $reference
     * @return SignInfo
     */
    public function setReference(SignInfoReference $reference)
    {
        $this->references = [$reference];
        return $this;
    }

    /**
     * @param SignInfoReference[] $references
     * @return SignInfo
     */
    public function setReferences($references)
    {
        $this->references = $references;
        return $this;
    }

    /**
     * @param SignInfoReference $reference
     * @return SignInfo
     */
    public function addReference(SignInfoReference $reference)
    {
        $this->references[] = $reference;
        return $this;
    }

    /**
     * validate function
     *
     * @throws InvalidArgumentException An error with information about required data that is missing
     */
    public function validate()
    {
        if (empty($this->references)) {
            throw new InvalidArgumentException('Missing SignInfo references');
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

        $writer->write([
            'name' => XmlSchema::DS . 'CanonicalizationMethod',
            'attributes' => [
                'Algorithm' => 'http://www.w3.org/2006/12/xml-c14n11',
            ]
        ]);

        $writer->write([
            'name' => XmlSchema::DS . 'SignatureMethod',
            'attributes' => [
                'Algorithm' => 'http://www.w3.org/2001/04/xmldsig-more#ecdsa-sha256',
            ]
        ]);

        if (!empty($this->references)) {
            foreach ($this->references as $reference) {
                $writer->write([
                    'name' => XmlSchema::DS . 'Reference',
                    'value' => $reference,
                    'attributes' => $reference->getAttributes(),
                ]);
            }
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

        $arrays['CanonicalizationMethod'][] = [
            '_' => '',
        ];

        $arrays['SignatureMethod'][] = [
            '_' => '',
        ];

        if (!empty($this->references)) {
            foreach ($this->references as $reference) {
                $arrays['Reference'][] = $reference;
            }
        }

        return $arrays;
    }
}
