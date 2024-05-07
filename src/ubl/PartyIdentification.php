<?php

namespace klsheng\myinvois\ubl;

use Sabre\Xml\Writer;
use klsheng\myinvois\ubl\constant\UblAttributes;

class PartyIdentification implements ISerializable, IValidator
{
    private $id;
    private $idAttributes = [];

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @param string $schemeID Optional
     * @param string $schemeName Optional
     * @param array $attributes Optional
     * @return PartyIdentification
     */
    public function setId($id, $schemeID = null, $schemeName = null, $attributes = null)
    {
        $this->id = $id;
        if (isset($schemeID)) {
            $this->idAttributes[UblAttributes::SCHEME_ID] = $schemeID;
        }
        if (isset($schemeName)) {
            $this->idAttributes[UblAttributes::SCHEME_NAME] = $schemeName;
        }
        if (isset($attributes)) {
            $this->idAttributes = array_merge($this->idAttributes, $attributes);
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
            [
                'name' => XmlSchema::CBC . 'ID',
                'value' => $this->id,
                'attributes' => $this->idAttributes,
            ]
        ]);
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

        $items = [
            '_' => $this->id,
        ];

        $items = array_merge($items, $this->idAttributes);
        $arrays['ID'][] = $items;

        return $arrays;
    }
}
