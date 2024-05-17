<?php

namespace Klsheng\Myinvois\Ubl;

use InvalidArgumentException;
use Sabre\Xml\Writer;
use Klsheng\Myinvois\Ubl\Constant\UblAttributes;

class Country implements ISerializable, IValidator
{
    private $identificationCode;
    private $identificationCodeAttributes = [
        UblAttributes::LIST_ID => '’ISO3166-1',
        UblAttributes::LIST_AGENCY_ID => '6',
    ];

    /**
     * @return string
     */
    public function getIdentificationCode()
    {
        return $this->identificationCode;
    }

    /**
     * @param string $identificationCode
     * @param string $listID Optional
     * @param string $listAgencyID Optional
     * @param array $attributes Optional
     * @return Country
     */
    public function setIdentificationCode($identificationCode, $listID = null, $listAgencyID = null, $attributes = null)
    {
        $this->identificationCode = $identificationCode;
        if (isset($listID)) {
            $this->identificationCodeAttributes[UblAttributes::LIST_ID] = $listID;
        }
        if (isset($listAgencyID)) {
            $this->identificationCodeAttributes[UblAttributes::LIST_AGENCY_ID] = $listAgencyID;
        }
        if (isset($attributes)) {
            $this->identificationCodeAttributes = array_merge($this->identificationCodeAttributes, $attributes);
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
        if (empty($this->identificationCode)) {
            throw new InvalidArgumentException('Missing Country identificationCode');
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
            'name' => XmlSchema::CBC . 'IdentificationCode',
            'value' => $this->identificationCode,
            'attributes' => $this->identificationCodeAttributes
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
            '_' => $this->identificationCode,
        ];

        $items = array_merge($items, $this->identificationCodeAttributes);
        $arrays['IdentificationCode'][] = $items;

        return $arrays;
    }
}
