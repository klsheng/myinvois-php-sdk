<?php

namespace Klsheng\Myinvois\Ubl;

use InvalidArgumentException;
use Sabre\Xml\Writer;
use Klsheng\Myinvois\Ubl\Constant\UblAttributes;

class TaxScheme implements ISerializable, IValidator
{
    private $id;
    private $idAttributes = [];
    private $name;
    private $taxTypeCode;
    private $currencyCode;

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
     * @param string $schemeAgencyID Optional
     * @param array $attributes Optional
     * @return TaxScheme
     */
    public function setId($id, $schemeID = null, $schemeAgencyID = null, $attributes = null)
    {
        $this->id = $id;
        if (isset($schemeID)) {
            $this->idAttributes[UblAttributes::SCHEME_ID] = $schemeID;
        }
        if (isset($schemeAgencyID)) {
            $this->idAttributes[UblAttributes::SCHEME_AGENCY_ID] = $schemeAgencyID;
        }
        if (isset($attributes)) {
            $this->idAttributes = array_merge($this->idAttributes, $attributes);
        }
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return TaxScheme
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxTypeCode()
    {
        return $this->taxTypeCode;
    }

    /**
     * @param string $taxTypeCode
     * @return TaxScheme
     */
    public function setTaxTypeCode($taxTypeCode)
    {
        $this->taxTypeCode = $taxTypeCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * @param string $currencyCode
     * @return TaxScheme
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * validate function
     *
     * @throws InvalidArgumentException An error with information about required data that is missing
     */
    public function validate()
    {
        if (empty($this->id)) {
            throw new InvalidArgumentException('Missing TaxScheme id');
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
            [
                'name' => XmlSchema::CBC . 'ID',
                'value' => $this->getId(),
                'attributes' => $this->idAttributes,
            ],
        ]);
        if ($this->name !== null) {
            $writer->write([
                XmlSchema::CBC . 'Name' => $this->name
            ]);
        }
        if ($this->taxTypeCode !== null) {
            $writer->write([
                XmlSchema::CBC . 'TaxTypeCode' => $this->taxTypeCode
            ]);
        }
        if ($this->currencyCode !== null) {
            $writer->write([
                XmlSchema::CBC . 'CurrencyCode' => $this->currencyCode
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

        $items = [
            '_' => $this->id,
        ];

        $items = array_merge($items, $this->idAttributes);
        $arrays['ID'][] = $items;

        if ($this->name !== null) {
            $arrays['Name'][] = [
                '_' => $this->name,
            ];
        }
        if ($this->taxTypeCode !== null) {
            $arrays['TaxTypeCode'][] = [
                '_' => $this->taxTypeCode,
            ];
        }
        if ($this->currencyCode !== null) {
            $arrays['CurrencyCode'][] = [
                '_' => $this->currencyCode,
            ];
        }

        return $arrays;
    }
}
