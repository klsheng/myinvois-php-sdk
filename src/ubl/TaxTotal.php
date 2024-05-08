<?php

namespace klsheng\myinvois\ubl;

use InvalidArgumentException;
use Sabre\Xml\Writer;
use klsheng\myinvois\ubl\constant\CurrencyCodes;
use klsheng\myinvois\ubl\constant\UblAttributes;

class TaxTotal implements ISerializable, IValidator
{
    private $taxAmount;
    private $taxAmountAttributes = [
        UblAttributes::CURRENCY_ID => CurrencyCodes::MYR
    ];
    private $taxSubTotals = [];

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
     * @return TaxTotal
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
     * @return array
     */
    public function getTaxSubTotals()
    {
        return $this->taxSubTotals;
    }

    /**
     * @param TaxSubTotal $taxSubTotal
     * @return TaxTotal
     */
    public function addTaxSubTotal(TaxSubTotal $taxSubTotal)
    {
        $this->taxSubTotals[] = $taxSubTotal;
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
            throw new InvalidArgumentException('Missing TaxTotal taxAmount');
        }

        if (empty($this->taxSubTotals)) {
            throw new InvalidArgumentException('Missing TaxTotal taxSubTotals');
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
                'name' => XmlSchema::CBC . 'TaxAmount',
                'value' => number_format($this->taxAmount, 2, '.', ''),
                'attributes' => $this->taxAmountAttributes,
            ],
        ]);

        foreach ($this->taxSubTotals as $taxSubTotal) {
            $writer->write([XmlSchema::CAC . 'TaxSubtotal' => $taxSubTotal]);
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
            '_' => (float)number_format($this->taxAmount, 2, '.', ''),
        ];

        $items = array_merge($items, $this->taxAmountAttributes);
        $arrays['TaxAmount'][] = $items;

        foreach ($this->taxSubTotals as $taxSubTotal) {
            $arrays['TaxSubtotal'][] = $taxSubTotal;
        }

        return $arrays;
    }
}
