<?php

/**
 * @copyright Copyright (c) 2024 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

namespace Klsheng\Myinvois\Ubl;

use InvalidArgumentException;
use Sabre\Xml\Writer;
use Klsheng\Myinvois\Ubl\Constant\CurrencyCodes;
use Klsheng\Myinvois\Ubl\Constant\UnitCodes;
use Klsheng\Myinvois\Ubl\Constant\UblAttributes;

/**
 * Price
 * 
 * @author Sean Kau (kliensheng2020@gmail.com)
 * @since 1.0.0
 */
class Price implements ISerializable, IValidator
{
    private $priceAmount;
    private $priceAmountAttributes = [
        UblAttributes::CURRENCY_ID => CurrencyCodes::MYR
    ];
    private $baseQuantity;
    private $baseQuantityAttributes = [
        UblAttributes::UNIT_CODE => UnitCodes::UNIT,
    ];
    private $allowanceCharge;

    /**
     * @return float
     */
    public function getPriceAmount()
    {
        return $this->priceAmount;
    }

    /**
     * @param float $priceAmount
     * @param string $currencyCode Optional
     * @param array $attributes Optional
     * @return Price
     */
    public function setPriceAmount($priceAmount, $currencyCode = null, $attributes = null)
    {
        $this->priceAmount = $priceAmount;
        if (isset($currencyCode)) {
            $this->priceAmountAttributes[UblAttributes::CURRENCY_ID] = $currencyCode;
        }
        if (isset($attributes)) {
            $this->priceAmountAttributes = array_merge($this->priceAmountAttributes, $attributes);
        }
        return $this;
    }

    /**
     * @return float
     */
    public function getBaseQuantity()
    {
        return $this->baseQuantity;
    }

    /**
     * @param float $baseQuantity
     * @return Price
     */
    public function setBaseQuantity($baseQuantity, $unitCode = null, $attributes = null)
    {
        $this->baseQuantity = $baseQuantity;
        if (isset($unitCode)) {
            $this->baseQuantityAttributes[UblAttributes::UNIT_CODE] = $unitCode;
        }
        if (isset($attributes)) {
            $this->baseQuantityAttributes = array_merge($this->baseQuantityAttributes, $attributes);
        }
        return $this;
    }

    /**
     * @return AllowanceCharge
     */
    public function getAllowanceCharge()
    {
        return $this->allowanceCharge;
    }

    /**
     * @param AllowanceCharge $allowanceCharge
     * @return Price
     */
    public function setAllowanceCharge(AllowanceCharge $allowanceCharge)
    {
        $this->allowanceCharge = $allowanceCharge;
        return $this;
    }

    /**
     * validate function
     *
     * @throws InvalidArgumentException An error with information about required data that is missing
     */
    public function validate()
    {
        if ($this->priceAmount === null) {
            throw new InvalidArgumentException('Missing Price priceAmount');
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
                'name' => XmlSchema::CBC . 'PriceAmount',
                'value' => number_format($this->priceAmount, 2, '.', ''),
                'attributes' => $this->priceAmountAttributes,
            ]
        ]);

        if ($this->baseQuantity !== null) {
            $writer->write([
                [
                    'name' => XmlSchema::CBC . 'BaseQuantity',
                    'value' => $this->baseQuantity,
                    'attributes' => $this->baseQuantityAttributes,
                ]
            ]);
        }

        if ($this->allowanceCharge !== null) {
            $writer->write([
                XmlSchema::CAC . 'AllowanceCharge' => $this->allowanceCharge,
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
            '_' => (float)number_format($this->priceAmount, 2, '.', ''),
        ];

        $items = array_merge($items, $this->priceAmountAttributes);
        $arrays['PriceAmount'][] = $items;

        if ($this->baseQuantity !== null) {
            $items = [
                '_' => $this->baseQuantity,
            ];
    
            $items = array_merge($items, $this->baseQuantityAttributes);
            $arrays['BaseQuantity'][] = $items;
        }

        if ($this->allowanceCharge !== null) {
            $arrays['AllowanceCharge'][] = $this->allowanceCharge;
        }

        return $arrays;
    }
}
