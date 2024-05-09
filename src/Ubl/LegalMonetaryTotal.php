<?php

namespace Klsheng\Myinvois\Ubl;

use InvalidArgumentException;
use Sabre\Xml\Writer;
use Klsheng\Myinvois\Ubl\Constant\CurrencyCodes;
use Klsheng\Myinvois\Ubl\Constant\UblAttributes;

class LegalMonetaryTotal implements ISerializable, IValidator
{
    private $lineExtensionAmount = 0;
    private $lineExtensionAmountAttributes = [
        UblAttributes::CURRENCY_ID => CurrencyCodes::MYR
    ];
    private $taxExclusiveAmount = 0;
    private $taxExclusiveAmountAttributes = [
        UblAttributes::CURRENCY_ID => CurrencyCodes::MYR
    ];
    private $taxInclusiveAmount = 0;
    private $taxInclusiveAmountAttributes = [
        UblAttributes::CURRENCY_ID => CurrencyCodes::MYR
    ];
    private $allowanceTotalAmount = 0;
    private $allowanceTotalAmountAttributes = [
        UblAttributes::CURRENCY_ID => CurrencyCodes::MYR
    ];
    private $prepaidAmount;
    private $prepaidAmountAttributes = [
        UblAttributes::CURRENCY_ID => CurrencyCodes::MYR
    ];
    private $payableAmount = 0;
    private $payableAmountAttributes = [
        UblAttributes::CURRENCY_ID => CurrencyCodes::MYR
    ];
    private $chargeTotalAmount;
    private $chargeTotalAmountAttributes = [
        UblAttributes::CURRENCY_ID => CurrencyCodes::MYR
    ];
    private $payableRoundingAmount;
    private $payableRoundingAmountAttributes = [
        UblAttributes::CURRENCY_ID => CurrencyCodes::MYR
    ];

    /**
     * @return float
     */
    public function getLineExtensionAmount()
    {
        return $this->lineExtensionAmount;
    }

    /**
     * @param float $lineExtensionAmount
     * @param string $currencyCode Optional
     * @param array $attributes Optional
     * @return LegalMonetaryTotal
     */
    public function setLineExtensionAmount($lineExtensionAmount, $currencyCode = null, $attributes = null)
    {
        $this->lineExtensionAmount = $lineExtensionAmount;
        if (isset($currencyCode)) {
            $this->lineExtensionAmountAttributes[UblAttributes::CURRENCY_ID] = $currencyCode;
        }
        if (isset($attributes)) {
            $this->lineExtensionAmountAttributes = array_merge($this->lineExtensionAmountAttributes, $attributes);
        }
        return $this;
    }

    /**
     * @return float
     */
    public function getTaxExclusiveAmount()
    {
        return $this->taxExclusiveAmount;
    }

    /**
     * @param float $taxExclusiveAmount
     * @param string $currencyCode Optional
     * @param array $attributes Optional
     * @return LegalMonetaryTotal
     */
    public function setTaxExclusiveAmount($taxExclusiveAmount, $currencyCode = null, $attributes = null)
    {
        $this->taxExclusiveAmount = $taxExclusiveAmount;
        if (isset($currencyCode)) {
            $this->taxExclusiveAmountAttributes[UblAttributes::CURRENCY_ID] = $currencyCode;
        }
        if (isset($attributes)) {
            $this->taxExclusiveAmountAttributes = array_merge($this->taxExclusiveAmountAttributes, $attributes);
        }
        return $this;
    }

    /**
     * @return float
     */
    public function getTaxInclusiveAmount()
    {
        return $this->taxInclusiveAmount;
    }

    /**
     * @param float $taxInclusiveAmount
     * @param string $currencyCode Optional
     * @param array $attributes Optional
     * @return LegalMonetaryTotal
     */
    public function setTaxInclusiveAmount($taxInclusiveAmount, $currencyCode = null, $attributes = null)
    {
        $this->taxInclusiveAmount = $taxInclusiveAmount;
        if (isset($currencyCode)) {
            $this->taxInclusiveAmountAttributes[UblAttributes::CURRENCY_ID] = $currencyCode;
        }
        if (isset($attributes)) {
            $this->taxInclusiveAmountAttributes = array_merge($this->taxInclusiveAmountAttributes, $attributes);
        }
        return $this;
    }

    /**
     * @return float
     */
    public function getAllowanceTotalAmount()
    {
        return $this->allowanceTotalAmount;
    }

    /**
     * @param float $allowanceTotalAmount
     * @param string $currencyCode Optional
     * @param array $attributes Optional
     * @return LegalMonetaryTotal
     */
    public function setAllowanceTotalAmount($allowanceTotalAmount, $currencyCode = null, $attributes = null)
    {
        $this->allowanceTotalAmount = $allowanceTotalAmount;
        if (isset($currencyCode)) {
            $this->allowanceTotalAmountAttributes[UblAttributes::CURRENCY_ID] = $currencyCode;
        }
        if (isset($attributes)) {
            $this->allowanceTotalAmountAttributes = array_merge($this->allowanceTotalAmountAttributes, $attributes);
        }
        return $this;
    }

    /**
     * @return float
     */
    public function getPrepaidAmount()
    {
        return $this->prepaidAmount;
    }

    /**
     * @param float $prepaidAmount
     * @param string $currencyCode Optional
     * @param array $attributes Optional
     * @return LegalMonetaryTotal
     */
    public function setPrepaidAmount($prepaidAmount, $currencyCode = null, $attributes = null)
    {
        $this->prepaidAmount = $prepaidAmount;
        if (isset($currencyCode)) {
            $this->prepaidAmountAttributes[UblAttributes::CURRENCY_ID] = $currencyCode;
        }
        if (isset($attributes)) {
            $this->prepaidAmountAttributes = array_merge($this->prepaidAmountAttributes, $attributes);
        }
        return $this;
    }

    /**
     * @return float
     */
    public function getPayableAmount()
    {
        return $this->payableAmount;
    }

    /**
     * @param float $payableAmount
     * @param string $currencyCode Optional
     * @param array $attributes Optional
     * @return LegalMonetaryTotal
     */
    public function setPayableAmount($payableAmount, $currencyCode = null, $attributes = null)
    {
        $this->payableAmount = $payableAmount;
        if (isset($currencyCode)) {
            $this->payableAmountAttributes[UblAttributes::CURRENCY_ID] = $currencyCode;
        }
        if (isset($attributes)) {
            $this->payableAmountAttributes = array_merge($this->payableAmountAttributes, $attributes);
        }
        return $this;
    }

    /**
     * @return float
     */
    public function getChargeTotalAmount()
    {
        return $this->chargeTotalAmount;
    }

    /**
     * @param float $chargeTotalAmount
     * @param string $currencyCode Optional
     * @param array $attributes Optional
     * @return LegalMonetaryTotal
     */
    public function setChargeTotalAmount($chargeTotalAmount, $currencyCode = null, $attributes = null)
    {
        $this->chargeTotalAmount = $chargeTotalAmount;
        if (isset($currencyCode)) {
            $this->chargeTotalAmountAttributes[UblAttributes::CURRENCY_ID] = $currencyCode;
        }
        if (isset($attributes)) {
            $this->chargeTotalAmountAttributes = array_merge($this->chargeTotalAmountAttributes, $attributes);
        }
        return $this;
    }

    /**
     * @return float
     */
    public function getPayableRoundingAmount()
    {
        return $this->payableRoundingAmount;
    }

    /**
     * @param float $payableRoundingAmount
     * @param string $currencyCode Optional
     * @param array $attributes Optional
     * @return LegalMonetaryTotal
     */
    public function setPayableRoundingAmount($payableRoundingAmount, $currencyCode = null, $attributes = null)
    {
        $this->payableRoundingAmount = $payableRoundingAmount;
        if (isset($currencyCode)) {
            $this->payableRoundingAmountAttributes[UblAttributes::CURRENCY_ID] = $currencyCode;
        }
        if (isset($attributes)) {
            $this->payableRoundingAmountAttributes = array_merge($this->payableRoundingAmountAttributes, $attributes);
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
        if ($this->taxExclusiveAmount === null) {
            throw new InvalidArgumentException('Missing LegalMonetaryTotal taxExclusiveAmount');
        }

        if ($this->taxInclusiveAmount === null) {
            throw new InvalidArgumentException('Missing LegalMonetaryTotal taxInclusiveAmount');
        }

        if ($this->payableAmount === null) {
            throw new InvalidArgumentException('Missing LegalMonetaryTotal payableAmount');
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
        
        $this->writeXmlAmount($writer, 'LineExtensionAmount', $this->lineExtensionAmount, $this->lineExtensionAmountAttributes);
        $this->writeXmlAmount($writer, 'TaxExclusiveAmount', $this->taxExclusiveAmount, $this->taxExclusiveAmountAttributes);
        $this->writeXmlAmount($writer, 'TaxInclusiveAmount', $this->taxInclusiveAmount, $this->taxInclusiveAmountAttributes);
        $this->writeXmlAmount($writer, 'AllowanceTotalAmount', $this->allowanceTotalAmount, $this->allowanceTotalAmountAttributes);

        if ($this->prepaidAmount !== null) {
            $this->writeXmlAmount($writer, 'PrepaidAmount', $this->prepaidAmount, $this->prepaidAmountAttributes);
        }

        if ($this->chargeTotalAmount !== null) {
            $this->writeXmlAmount($writer, 'ChargeTotalAmount', $this->chargeTotalAmount, $this->chargeTotalAmountAttributes);
        }

        if ($this->payableRoundingAmount !== null) {
            $this->writeXmlAmount($writer, 'PayableRoundingAmount', $this->payableRoundingAmount, $this->payableRoundingAmountAttributes);
        }

        $this->writeXmlAmount($writer, 'PayableAmount', $this->payableAmount, $this->payableAmountAttributes);
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

        $arrays = $this->getAmountArray($arrays, 'LineExtensionAmount', $this->lineExtensionAmount, $this->lineExtensionAmountAttributes);
        $arrays = $this->getAmountArray($arrays, 'TaxExclusiveAmount', $this->taxExclusiveAmount, $this->taxExclusiveAmountAttributes);
        $arrays = $this->getAmountArray($arrays, 'TaxInclusiveAmount', $this->taxInclusiveAmount, $this->taxInclusiveAmountAttributes);
        $arrays = $this->getAmountArray($arrays, 'AllowanceTotalAmount', $this->allowanceTotalAmount, $this->allowanceTotalAmountAttributes);

        if ($this->prepaidAmount !== null) {
            $arrays = $this->getAmountArray($arrays, 'PrepaidAmount', $this->prepaidAmount, $this->prepaidAmountAttributes);
        }

        if ($this->chargeTotalAmount !== null) {
            $arrays = $this->getAmountArray($arrays, 'ChargeTotalAmount', $this->chargeTotalAmount, $this->chargeTotalAmountAttributes);
        }

        if ($this->payableRoundingAmount !== null) {
            $arrays = $this->getAmountArray($arrays, 'PayableRoundingAmount', $this->payableRoundingAmount, $this->payableRoundingAmountAttributes);
        }

        $arrays = $this->getAmountArray($arrays, 'PayableAmount', $this->payableAmount, $this->payableAmountAttributes);

        return $arrays;
    }

    private function writeXmlAmount($writer, $key, $amount, $attributes)
    {
        $writer->write([
            [
                'name' => XmlSchema::CBC . $key,
                'value' => number_format($amount, 2, '.', ''),
                'attributes' => $attributes,
            ],
        ]);
    }

    private function getAmountArray($arrays, $key, $amount, $attributes)
    {
        $items = [
            '_' => (float)number_format($amount, 2, '.', ''),
        ];

        $items = array_merge($items, $attributes);
        $arrays[$key][] = $items;

        return $arrays;
    }
}
