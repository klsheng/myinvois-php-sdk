<?php

namespace klsheng\myinvois\ubl;

use InvalidArgumentException;
use Sabre\Xml\Writer;
use klsheng\myinvois\ubl\constant\CurrencyCodes;
use klsheng\myinvois\ubl\constant\UblAttributes;

class TaxSubTotal implements ISerializable, IValidator
{
    private $taxableAmount;
    private $taxableAmountAttributes = [
        UblAttributes::CURRENCY_ID => CurrencyCodes::MYR
    ];
    private $taxAmount;
    private $taxAmountAttributes = [
        UblAttributes::CURRENCY_ID => CurrencyCodes::MYR
    ];
    private $taxCategory;
    private $percent;

    /**
     * @return mixed
     */
    public function getTaxableAmount()
    {
        return $this->taxableAmount;
    }

    /**
     * @param mixed $taxableAmount
     * @param string $currencyCode Optional
     * @param array $attributes Optional
     * @return TaxSubTotal
     */
    public function setTaxableAmount($taxableAmount, $currencyCode = null, $attributes = null)
    {
        $this->taxableAmount = $taxableAmount;
        if (isset($currencyCode)) {
            $this->taxableAmountAttributes[UblAttributes::CURRENCY_ID] = $currencyCode;
        }
        if (isset($attributes)) {
            $this->taxableAmountAttributes = array_merge($this->taxableAmountAttributes, $attributes);
        }
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTaxAmount()
    {
        return $this->taxAmount;
    }

    /**
     * @param mixed $taxAmount
     * @param string $currencyCode Optional
     * @param array $attributes Optional
     * @return TaxSubTotal
     */
    public function setTaxAmount($taxAmount, $currencyCode = null, $attributes = null)
    {
        $this->taxAmount = $taxAmount;
        if (isset($currencyCode)) {
            $this->taxAmountAttributes[UblAttributes::CURRENCY_ID] = $currencyCode;
        }
        if (isset($attributes)) {
            $this->taxAmountAttributes = array_merge($this->taxAmountAttributes, $attributes);
        }
        return $this;
    }

    /**
     * @return TaxCategory
     */
    public function getTaxCategory()
    {
        return $this->taxCategory;
    }

    /**
     * @param TaxCategory $taxCategory
     * @return TaxSubTotal
     */
    public function setTaxCategory(TaxCategory $taxCategory)
    {
        $this->taxCategory = $taxCategory;
        return $this;
    }

    /**
     * @return float
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * @param float $percent
     * @return TaxSubTotal
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;
        return $this;
    }

    /**
     * validate function
     *
     * @throws InvalidArgumentException An error with information about required data that is missing
     */
    public function validate()
    {
        if ($this->taxAmount === null) {
            throw new InvalidArgumentException('Missing TaxSubTotal taxamount');
        }

        if ($this->taxCategory === null) {
            throw new InvalidArgumentException('Missing TaxSubTotal taxcategory');
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
                'name' => XmlSchema::CBC . 'TaxableAmount',
                'value' => number_format($this->taxableAmount, 2, '.', ''),
                'attributes' => $this->taxableAmountAttributes,
            ],
            [
                'name' => XmlSchema::CBC . 'TaxAmount',
                'value' => number_format($this->taxAmount, 2, '.', ''),
                'attributes' => $this->taxAmountAttributes,
            ]
        ]);

        if ($this->percent !== null) {
            $writer->write([
                XmlSchema::CBC . 'Percent' => number_format($this->percent, 2, '.', ''),
            ]);
        }

        $writer->write([
            XmlSchema::CAC . 'TaxCategory' => $this->taxCategory
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
            '_' => (float)number_format($this->taxableAmount, 2, '.', ''),
        ];

        $items = array_merge($items, $this->taxableAmountAttributes);
        $arrays['TaxableAmount'][] = $items;

        $items = [
            '_' => (float)number_format($this->taxAmount, 2, '.', ''),
        ];

        $items = array_merge($items, $this->taxAmountAttributes);
        $arrays['TaxAmount'][] = $items;


        if ($this->percent !== null) {
            $arrays['Percent'][] = [
                '_' => (float)number_format($this->percent, 2, '.', ''),
            ];
        }

        $arrays['TaxCategory'][] = $this->taxCategory;

        return $arrays;
    }
}
