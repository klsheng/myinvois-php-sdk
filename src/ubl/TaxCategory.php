<?php

namespace klsheng\myinvois\ubl;

use InvalidArgumentException;
use Sabre\Xml\Writer;
use klsheng\myinvois\ubl\constant\UblAttributes;

class TaxCategory implements ISerializable, IValidator
{
    private $id;
    private $idAttributes = [];
    private $name;
    private $percent;
    private $taxScheme;
    private $taxExemptionReason;
    private $taxExemptionReasonCode;

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
     * @return TaxCategory
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
     * @return TaxCategory
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * @param string $percent
     * @return TaxCategory
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxScheme()
    {
        return $this->taxScheme;
    }

    /**
     * @param TaxScheme $taxScheme
     * @return TaxCategory
     */
    public function setTaxScheme(TaxScheme $taxScheme)
    {
        $this->taxScheme = $taxScheme;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxExemptionReason()
    {
        return $this->taxExemptionReason;
    }

    /**
     * @param string $taxExemptionReason
     * @return TaxCategory
     */
    public function setTaxExemptionReason($taxExemptionReason)
    {
        $this->taxExemptionReason = $taxExemptionReason;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxExemptionReasonCode()
    {
        return $this->taxExemptionReasonCode;
    }

    /**
     * @param string $taxExemptionReason
     * @return TaxCategory
     */
    public function setTaxExemptionReasonCode($taxExemptionReasonCode)
    {
        $this->taxExemptionReasonCode = $taxExemptionReasonCode;
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
            throw new InvalidArgumentException('Missing TaxCategory id');
        }

        if ($this->taxScheme === null) {
            throw new InvalidArgumentException('Missing TaxCategory taxScheme');
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
                XmlSchema::CBC . 'Name' => $this->name,
            ]);
        }

        if ($this->percent !== null) {
            $writer->write([
                XmlSchema::CBC . 'Percent' => number_format($this->percent, 2, '.', ''),
            ]);
        }

        if ($this->taxExemptionReasonCode !== null) {
            $writer->write([
                XmlSchema::CBC . 'TaxExemptionReasonCode' => $this->taxExemptionReasonCode,
            ]);
        }

        if ($this->taxExemptionReason !== null) {
            $writer->write([
                XmlSchema::CBC . 'TaxExemptionReason' => $this->taxExemptionReason,
            ]);
        }

        if ($this->taxScheme !== null) {
            $writer->write([
                XmlSchema::CAC . 'TaxScheme' => $this->taxScheme
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
        
        if ($this->percent !== null) {
            $arrays['Percent'][] = [
                '_' => (float)number_format($this->percent, 2, '.', ''),
            ];
        }

        if ($this->taxExemptionReasonCode !== null) {
            $arrays['TaxExemptionReasonCode'][] = [
                '_' => $this->taxExemptionReasonCode,
            ];
        }

        if ($this->taxExemptionReason !== null) {
            $arrays['TaxExemptionReason'][] = [
                '_' => $this->taxExemptionReason,
            ];
        }

        if ($this->taxScheme !== null) {
            $arrays['TaxScheme'][] = $this->taxScheme;
        }

        return $arrays;
    }
}
