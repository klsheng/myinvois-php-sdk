<?php

/**
 * @copyright Copyright (c) 2024 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

namespace Klsheng\Myinvois\Ubl;

use Sabre\Xml\Writer;
use Klsheng\Myinvois\Ubl\Constant\CurrencyCodes;
use Klsheng\Myinvois\Ubl\Constant\UblAttributes;

class PaymentTerms implements ISerializable, IValidator
{
    private $note;
    private $settlementDiscountPercent;
    private $amount;
    private $amountAttributes = [
        UblAttributes::CURRENCY_ID => CurrencyCodes::MYR
    ];
    private $settlementPeriod;

    /**
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param string $note
     * @return PaymentTerms
     */
    public function setNote($note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * @return float
     */
    public function getSettlementDiscountPercent()
    {
        return $this->settlementDiscountPercent;
    }

    /**
     * @param float $settlementDiscountPercent
     * @return PaymentTerms
     */
    public function setSettlementDiscountPercent($settlementDiscountPercent)
    {
        $this->settlementDiscountPercent = $settlementDiscountPercent;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @param string $currencyCode Optional
     * @param array $attributes Optional
     * @return PaymentTerms
     */
    public function setAmount($amount, $currencyCode = null, $attributes = null)
    {
        $this->amount = $amount;
        if (isset($currencyCode)) {
            $this->amountAttributes[UblAttributes::CURRENCY_ID] = $currencyCode;
        }
        if (isset($attributes)) {
            $this->amountAttributes = array_merge($this->amountAttributes, $attributes);
        }
        return $this;
    }

    /**
     * @return SettlementPeriod
     */
    public function getSettlementPeriod()
    {
        return $this->settlementPeriod;
    }

    /**
     * @param SettlementPeriod $settlementPeriod
     * @return PaymentTerms
     */
    public function setSettlementPeriod(SettlementPeriod $settlementPeriod)
    {
        $this->settlementPeriod = $settlementPeriod;
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
        
        if ($this->note !== null) {
            $writer->write([ XmlSchema::CBC . 'Note' => $this->note ]);
        }

        if ($this->settlementDiscountPercent !== null) {
            $writer->write([ XmlSchema::CBC . 'SettlementDiscountPercent' => $this->settlementDiscountPercent ]);
        }

        if ($this->amount !== null) {
            $writer->write([
                [
                    'name' => XmlSchema::CBC . 'Amount',
                    'value' => number_format($this->amount, 2, '.', ''),
                    'attributes' => $this->amountAttributes,
                ]
            ]);
        }

        if ($this->settlementPeriod !== null) {
            $writer->write([ XmlSchema::CAC . 'SettlementPeriod' => $this->settlementPeriod ]);
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

        if ($this->note !== null) {
            $arrays['Note'][] = [
                '_' => $this->note,
            ];
        }

        if ($this->settlementDiscountPercent !== null) {
            $arrays['SettlementDiscountPercent'][] = [
                '_' => $this->settlementDiscountPercent,
            ];
        }

        if ($this->amount !== null) {
            $items = [
                '_' => (float)number_format($this->amount, 2, '.', ''),
            ];

            $items = array_merge($items, $this->amountAttributes);
            $arrays['Amount'][] = $items;
        }

        if ($this->settlementPeriod !== null) {
            $arrays['SettlementPeriod'][] = $this->settlementPeriod;
        }

        return $arrays;
    }
}
