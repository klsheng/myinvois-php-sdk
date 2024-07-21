<?php

/**
 * @copyright Copyright (c) 2024 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

namespace Klsheng\Myinvois\Ubl;

use DateTime;
use InvalidArgumentException;
use Sabre\Xml\Writer;
use Klsheng\Myinvois\Ubl\Constant\CurrencyCodes;
use Klsheng\Myinvois\Ubl\Constant\UblAttributes;

class PrepaidPayment implements ISerializable, IValidator
{
    private $id;
    private $paidAmount;
    private $paidAmountAttributes = [
        UblAttributes::CURRENCY_ID => CurrencyCodes::MYR
    ];
    private $paidDateTime;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return PrepaidPayment
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return float
     */
    public function getPaidAmount()
    {
        return $this->paidAmount;
    }

    /**
     * @param float $paidAmount
     * @param string $currencyCode Optional
     * @param array $attributes Optional
     * @return PrepaidPayment
     */
    public function setPaidAmount($paidAmount, $currencyCode = null, $attributes = null)
    {
        $this->paidAmount = $paidAmount;
        if (isset($currencyCode)) {
            $this->paidAmountAttributes[UblAttributes::CURRENCY_ID] = $currencyCode;
        }
        if (isset($attributes)) {
            $this->paidAmountAttributes = array_merge($this->paidAmountAttributes, $attributes);
        }
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getPaidDateTime()
    {
        return $this->paidDateTime;
    }

    /**
     * @param DateTime $paidDateTime
     * @return PrepaidPayment
     */
    public function setPaidDateTime($paidDateTime)
    {
        $this->paidDateTime = $paidDateTime;
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

        if ($this->id !== null) {
            $writer->write([XmlSchema::CBC . 'ID' => $this->id]);
        }

        if ($this->paidAmount !== null) {
            $writer->write([
                [
                    'name' => XmlSchema::CBC . 'PaidAmount',
                    'value' => number_format($this->paidAmount, 2, '.', ''),
                    'attributes' => $this->paidAmountAttributes,
                ],
            ]);
        }

        if ($this->paidDateTime !== null) {
            $writer->write([
                XmlSchema::CBC . 'PaidDate' => $this->paidDateTime->format('Y-m-d'),
            ]);

            $writer->write([
                XmlSchema::CBC . 'PaidTime' => $this->paidDateTime->format('H:i:s\Z'),
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

        if ($this->id !== null) {
            $arrays['ID'][] = [
                '_' => $this->id,
            ];
        }

        if ($this->paidAmount !== null) {
            $items = [
                '_' => (float)number_format($this->paidAmount, 2, '.', ''),
            ];
    
            $items = array_merge($items, $this->paidAmountAttributes);
            $arrays['PaidAmount'][] = $items;
        }

        if ($this->paidDateTime !== null) {
            $arrays['PaidDate'][] = [
                '_' => $this->paidDateTime->format('Y-m-d'),
            ];
            $arrays['PaidTime'][] = [
                '_' => $this->paidDateTime->format('H:i:s\Z'),
            ];
        }

        return $arrays;
    }
}
