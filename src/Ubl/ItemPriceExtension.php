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
 * Item price extension
 * 
 * @author Sean Kau (kliensheng2020@gmail.com)
 * @since 1.0.0
 */
class ItemPriceExtension implements ISerializable, IValidator
{
    private $amount;
    private $amountAttributes = [
        UblAttributes::CURRENCY_ID => CurrencyCodes::MYR
    ];

    /**
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @param string $currencyCode Optional
     * @param array $attributes Optional
     * @return ItemPriceExtension
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
        if ($this->amount === null) {
            throw new InvalidArgumentException('Missing ItemPriceExtension amount');
        }

        if (empty($this->amountAttributes)) {
            throw new InvalidArgumentException('Missing ItemPriceExtension amount attributes');
        }

        if (!array_key_exists(UblAttributes::CURRENCY_ID, $this->amountAttributes)) {
            throw new InvalidArgumentException('Missing ' . UblAttributes::CURRENCY_ID . ' attribute in ItemPriceExtension amount');
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
                'name' => XmlSchema::CBC . 'Amount',
                'value' => NumberFormatter::format($this->amount),
                'attributes' => $this->amountAttributes,
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
            '_' => NumberFormatter::formatAsFloat($this->amount),
        ];

        $items = array_merge($items, $this->amountAttributes);
        $arrays['Amount'][] = $items;

        return $arrays;
    }
}
