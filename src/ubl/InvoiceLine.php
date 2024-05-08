<?php

namespace klsheng\myinvois\ubl;

use InvalidArgumentException;
use Sabre\Xml\Writer;
use klsheng\myinvois\ubl\constant\CurrencyCodes;
use klsheng\myinvois\ubl\constant\UnitCodes;
use klsheng\myinvois\ubl\constant\UblAttributes;

class InvoiceLine implements ISerializable, IValidator
{
    public $xmlTagName = 'InvoiceLine';
    private $id;
    protected $invoicedQuantity;
    protected $invoicedQuantityAttributes = [
        UblAttributes::UNIT_CODE => UnitCodes::UNIT,
    ];
    private $lineExtensionAmount;
    private $lineExtensionAmountAttributes = [
        UblAttributes::CURRENCY_ID => CurrencyCodes::MYR,
    ];
    private $taxTotal;
    private $invoicePeriod;
    private $note;
    private $item;
    private $price;
    private $accountingCostCode;
    private $accountingCost;
    private $allowanceCharges = [];
    private $itemPriceExtension;
    protected $quantityLabel = 'InvoicedQuantity';

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return InvoiceLine
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return float
     */
    public function getInvoicedQuantity()
    {
        return $this->invoicedQuantity;
    }

    /**
     * @param float $invoicedQuantity
     * @param string $unitCode Optional
     * @param array $attributes Optional
     * @return InvoiceLine
     */
    public function setInvoicedQuantity($invoicedQuantity, $unitCode = null, $attributes = null)
    {
        $this->invoicedQuantity = $invoicedQuantity;
        if (isset($unitCode)) {
            $this->invoicedQuantityAttributes[UblAttributes::UNIT_CODE] = $unitCode;
        }
        if (isset($attributes)) {
            $this->invoicedQuantityAttributes = array_merge($this->invoicedQuantityAttributes, $attributes);
        }
        return $this;
    }

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
     * @return InvoiceLine
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
     * @return TaxTotal
     */
    public function getTaxTotal()
    {
        return $this->taxTotal;
    }

    /**
     * @param TaxTotal $taxTotal
     * @return InvoiceLine
     */
    public function setTaxTotal(TaxTotal $taxTotal)
    {
        $this->taxTotal = $taxTotal;
        return $this;
    }

    /**
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param string $note
     * @return InvoiceLine
     */
    public function setNote($note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * @return InvoicePeriod
     */
    public function getInvoicePeriod()
    {
        return $this->invoicePeriod;
    }

    /**
     * @param InvoicePeriod $invoicePeriod
     * @return InvoiceLine
     */
    public function setInvoicePeriod(InvoicePeriod $invoicePeriod)
    {
        $this->invoicePeriod = $invoicePeriod;
        return $this;
    }

    /**
     * @return Item
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param Item $item
     * @return InvoiceLine
     */
    public function setItem(Item $item)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * @return Price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param Price $price
     * @return InvoiceLine
     */
    public function setPrice(Price $price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountingCostCode()
    {
        return $this->accountingCostCode;
    }

    /**
     * @param string $accountingCostCode
     * @return InvoiceLine
     */
    public function setAccountingCostCode($accountingCostCode)
    {
        $this->accountingCostCode = $accountingCostCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountingCost()
    {
        return $this->accountingCost;
    }

    /**
     * @param string $accountingCost
     * @return InvoiceLine
     */
    public function setAccountingCost($accountingCost)
    {
        $this->accountingCost = $accountingCost;
        return $this;
    }

    /**
     * @return AllowanceCharge[]
     */
    public function getAllowanceCharges()
    {
        return $this->allowanceCharges;
    }

    /**
     * @param AllowanceCharge $allowanceCharge
     * @return InvoiceLine
     */
    public function setAllowanceCharge(AllowanceCharge $allowanceCharge)
    {
        $this->allowanceCharges = [$allowanceCharge];
        return $this;
    }

    /**
     * @param AllowanceCharge[] $allowanceCharges
     * @return InvoiceLine
     */
    public function setAllowanceCharges($allowanceCharges)
    {
        $this->allowanceCharges = $allowanceCharges;
        return $this;
    }

    /**
     * @param AllowanceCharge $allowanceCharge
     * @return InvoiceLine
     */
    public function addAllowanceCharge(AllowanceCharge $allowanceCharge)
    {
        $this->allowanceCharges[] = $allowanceCharge;
        return $this;
    }

    /**
     * @return ItemPriceExtension
     */
    public function getItemPriceExtension()
    {
        return $this->price;
    }

    /**
     * @param ItemPriceExtension $itemPriceExtension
     * @return InvoiceLine
     */
    public function setItemPriceExtension(ItemPriceExtension $itemPriceExtension)
    {
        $this->itemPriceExtension = $itemPriceExtension;
        return $this;
    }

    /**
     * validate function
     *
     * @throws InvalidArgumentException An error with information about required data that is missing
     */
    public function validate()
    {
        if ($this->item === null) {
            throw new InvalidArgumentException('Missing InvoiceLine item');
        }

        if ($this->price === null) {
            throw new InvalidArgumentException('Missing InvoiceLine price');
        }

        if ($this->taxTotal === null) {
            throw new InvalidArgumentException('Missing InvoiceLine taxTotal');
        }

        if ($this->itemPriceExtension === null) {
            throw new InvalidArgumentException('Missing InvoiceLine itemPriceExtension');
        }

        if ($this->lineExtensionAmount === null) {
            throw new InvalidArgumentException('Missing InvoiceLine lineExtensionAmount');
        }

        if (empty($this->lineExtensionAmountAttributes)) {
            throw new InvalidArgumentException('Missing InvoiceLine lineExtensionAmount attributes');
        }

        if (!array_key_exists(UblAttributes::CURRENCY_ID, $this->lineExtensionAmountAttributes)) {
            throw new InvalidArgumentException('Missing ' . UblAttributes::CURRENCY_ID . ' attribute in InvoiceLine lineExtensionAmount');
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
            XmlSchema::CBC . 'ID' => $this->id
        ]);

        if (!empty($this->note)) {
            $writer->write([
                XmlSchema::CBC . 'Note' => $this->note
            ]);
        }

        $writer->write([
            [
                'name' => XmlSchema::CBC . $this->quantityLabel,
                'value' => number_format($this->invoicedQuantity, 2, '.', ''),
                'attributes' => $this->invoicedQuantityAttributes,
            ],
            [
                'name' => XmlSchema::CBC . 'LineExtensionAmount',
                'value' => number_format($this->lineExtensionAmount, 2, '.', ''),
                'attributes' => $this->lineExtensionAmountAttributes,
            ]
        ]);

        if (!empty($this->allowanceCharges)) {
            foreach ($this->allowanceCharges as $allowanceCharge) {
                $writer->write([
                    XmlSchema::CAC . 'AllowanceCharge' => $allowanceCharge
                ]);
            }
        }

        if ($this->accountingCostCode !== null) {
            $writer->write([
                XmlSchema::CBC . 'AccountingCostCode' => $this->accountingCostCode
            ]);
        }

        if ($this->accountingCost !== null) {
            $writer->write([
                XmlSchema::CBC . 'AccountingCost' => $this->accountingCost
            ]);
        }

        if ($this->invoicePeriod !== null) {
            $writer->write([
                XmlSchema::CAC . 'InvoicePeriod' => $this->invoicePeriod
            ]);
        }
        
        if ($this->taxTotal !== null) {
            $writer->write([
                XmlSchema::CAC . 'TaxTotal' => $this->taxTotal
            ]);
        }

        if ($this->item !== null) {
            $writer->write([
                XmlSchema::CAC . 'Item' => $this->item,
            ]);
        }

        if ($this->price !== null) {
            $writer->write([
                XmlSchema::CAC . 'Price' => $this->price
            ]);
        }

        if ($this->itemPriceExtension !== null) {
            $writer->write([
                XmlSchema::CAC . 'ItemPriceExtension' => $this->itemPriceExtension
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

        $arrays['ID'][] = [
            '_' => $this->id,
        ];

        if (!empty($this->note)) {
            $arrays['Note'][] = [
                '_' => $this->note,
            ];
        }

        $items = [
            '_' => (float)number_format($this->invoicedQuantity, 2, '.', ''),
        ];

        $items = array_merge($items, $this->invoicedQuantityAttributes);
        $arrays[$this->quantityLabel][] = $items;

        $items = [
            '_' => (float)number_format($this->lineExtensionAmount, 2, '.', ''),
        ];

        $items = array_merge($items, $this->lineExtensionAmountAttributes);
        $arrays['LineExtensionAmount'][] = $items;

        if (!empty($this->allowanceCharges)) {
            foreach ($this->allowanceCharges as $allowanceCharge) {
                $arrays['AllowanceCharge'][] = $allowanceCharge;
            }
        }

        if ($this->accountingCostCode !== null) {
            $arrays['AccountingCostCode'][] = [
                '_' => $this->accountingCostCode,
            ];
        }

        if ($this->accountingCost !== null) {
            $arrays['AccountingCost'][] = [
                '_' => $this->accountingCost,
            ];
        }

        if ($this->invoicePeriod !== null) {
            $arrays['InvoicePeriod'][] = $this->invoicePeriod;
        }
        
        if ($this->taxTotal !== null) {
            $arrays['TaxTotal'][] = $this->taxTotal;
        }

        if ($this->item !== null) {
            $arrays['Item'][] = $this->item;
        }

        if ($this->price !== null) {
            $arrays['Price'][] = $this->price;
        }

        if ($this->itemPriceExtension !== null) {
            $arrays['ItemPriceExtension'][] = $this->itemPriceExtension;
        }

        return $arrays;
    }
}
