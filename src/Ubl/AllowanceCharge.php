<?php

/**
 * @copyright Copyright (c) 2024 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

namespace Klsheng\Myinvois\Ubl;

use InvalidArgumentException;
use Sabre\Xml\Writer;
use Klsheng\Myinvois\Ubl\Constant\CurrencyCodes;
use Klsheng\Myinvois\Ubl\Constant\UblAttributes;

/**
 * Allowance charge
 * 
 * @author Sean Kau (kliensheng2020@gmail.com)
 * @since 1.0.0
 */
class AllowanceCharge implements ISerializable, IValidator
{
    private $chargeIndicator;
    private $allowanceChargeReason;
    private $multiplierFactorNumeric;
    private $amount;
    private $amountAttributes = [
        UblAttributes::CURRENCY_ID => CurrencyCodes::MYR
    ];

    /**
     * @return bool
     */
    public function isChargeIndicator()
    {
        return $this->chargeIndicator;
    }

    /**
     * @param bool $chargeIndicator
     * @return AllowanceCharge
     */
    public function setChargeIndicator($chargeIndicator)
    {
        $this->chargeIndicator = $chargeIndicator;
        return $this;
    }

    /**
     * @return string
     */
    public function getAllowanceChargeReason()
    {
        return $this->allowanceChargeReason;
    }

    /**
     * @param string $allowanceChargeReason
     * @return AllowanceCharge
     */
    public function setAllowanceChargeReason($allowanceChargeReason)
    {
        $this->allowanceChargeReason = $allowanceChargeReason;
        return $this;
    }

    /**
     * @return float
     */
    public function getMultiplierFactorNumeric()
    {
        return $this->multiplierFactorNumeric;
    }

    /**
     * @param float $multiplierFactorNumeric
     * @return AllowanceCharge
     */
    public function setMultiplierFactorNumeric($multiplierFactorNumeric)
    {
        $this->multiplierFactorNumeric = $multiplierFactorNumeric;
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
     * @return AllowanceCharge
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
     * validate function
     *
     * @throws InvalidArgumentException An error with information about required data that is missing
     */
    public function validate()
    {
        if ($this->chargeIndicator === null) {
            throw new InvalidArgumentException('Missing AllowanceCharge chargeIndicator');
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
            XmlSchema::CBC . 'ChargeIndicator' => $this->chargeIndicator ? 'true' : 'false',
        ]);

        if ($this->allowanceChargeReason !== null) {
            $writer->write([
                XmlSchema::CBC . 'AllowanceChargeReason' => $this->allowanceChargeReason
            ]);
        }

        if ($this->multiplierFactorNumeric !== null) {
            $writer->write([
                XmlSchema::CBC . 'MultiplierFactorNumeric' => number_format($this->multiplierFactorNumeric, 2, '.', '')
            ]);
        }

        if($this->amount !== null) {
            $writer->write([
                [
                    'name' => XmlSchema::CBC . 'Amount',
                    'value' => number_format($this->amount, 2, '.', ''),
                    'attributes' => $this->amountAttributes,
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

        $arrays['ChargeIndicator'][] = [
            '_' => $this->chargeIndicator ? true : false,
        ];

        if ($this->allowanceChargeReason !== null) {
            $arrays['AllowanceChargeReason'][] = [
                '_' => $this->allowanceChargeReason,
            ];
        }

        if ($this->multiplierFactorNumeric !== null) {
            $arrays['MultiplierFactorNumeric'][] = [
                '_' => (float)number_format($this->multiplierFactorNumeric, 2, '.', ''),
            ];
        }

        if($this->amount !== null) {
            $items = [
                '_' => (float)number_format($this->amount, 2, '.', ''),
            ];

            $items = array_merge($items, $this->amountAttributes);
            $arrays['Amount'][] = $items;
        }

        return $arrays;
    }
}
