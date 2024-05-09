<?php

namespace Klsheng\Myinvois\Ubl;

use DateTime;
use InvalidArgumentException;
use Sabre\Xml\Writer;
use Klsheng\Myinvois\Ubl\Constant\InvoiceTypeCodes;
use Klsheng\Myinvois\Ubl\Constant\CurrencyCodes;
use Klsheng\Myinvois\Ubl\Constant\UblAttributes;

class Invoice implements ISerializable, IValidator
{
    public $xmlTagName = 'Invoice';
    private $id;
    private $issueDateTime;
    protected $invoiceTypeCode = InvoiceTypeCodes::INVOICE;
    private $invoiceTypeCodeAttributes = [
        UblAttributes::LIST_VERSION_ID => '1.0',
    ];
    private $paymentTerms;
    private $accountingSupplierParty;
    private $accountingCustomerParty;
    private $payeeParty;
    private $paymentMeans;
    private $taxTotal;
    private $legalMonetaryTotal;
    /** @var InvoiceLine[] $invoiceLines */
    protected $invoiceLines;
    private $allowanceCharges = [];
    private $additionalDocumentReferences = [];
    private $documentCurrencyCode = CurrencyCodes::MYR;
    private $buyerReference;
    private $accountingCostCode;
    private $invoicePeriod;
    private $delivery;
    private $orderReference;
    private $billingReference;
    private $prepaidPayment;
    private $ublExtensions;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Invoice
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getIssueDateTime()
    {
        return $this->issueDateTime;
    }

    /**
     * @param DateTime $issueDateTime
     * @return Invoice
     */
    public function setIssueDateTime($issueDateTime)
    {
        $this->issueDateTime = $issueDateTime;
        return $this;
    }

    /**
     * @param mixed $currencyCode
     * @return Invoice
     */
    public function setDocumentCurrencyCode($currencyCode)
    {
        $this->documentCurrencyCode = $currencyCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceTypeCode()
    {
        return $this->invoiceTypeCode;
    }

    /**
     * @param string $invoiceTypeCode
     * @param string $listVersionID Optional
     * @param array $attributes Optional
     * @return Invoice
     */
    public function setInvoiceTypeCode($invoiceTypeCode, $listVersionID = null, $attributes = null)
    {
        $this->invoiceTypeCode = $invoiceTypeCode;
        if (isset($listVersionID)) {
            $this->invoiceTypeCodeAttributes[UblAttributes::LIST_VERSION_ID] = $listVersionID;
        }
        if (isset($attributes)) {
            $this->invoiceTypeCodeAttributes = array_merge($this->invoiceTypeCodeAttributes, $attributes);
        }
        return $this;
    }

    /**
     * @return PaymentTerms
     */
    public function getPaymentTerms()
    {
        return $this->paymentTerms;
    }

    /**
     * @param PaymentTerms $paymentTerms
     * @return Invoice
     */
    public function setPaymentTerms(PaymentTerms $paymentTerms)
    {
        $this->paymentTerms = $paymentTerms;
        return $this;
    }

    /**
     * @return AccountingParty
     */
    public function getAccountingSupplierParty()
    {
        return $this->accountingSupplierParty;
    }

    /**
     * @param AccountingParty $accountingSupplierParty
     * @return Invoice
     */
    public function setAccountingSupplierParty(AccountingParty $accountingSupplierParty)
    {
        $this->accountingSupplierParty = $accountingSupplierParty;
        return $this;
    }

    /**
     * @return AccountingParty
     */
    public function getAccountingCustomerParty()
    {
        return $this->accountingCustomerParty;
    }

    /**
     * @param AccountingParty $accountingCustomerParty
     * @return Invoice
     */
    public function setAccountingCustomerParty(AccountingParty $accountingCustomerParty)
    {
        $this->accountingCustomerParty = $accountingCustomerParty;
        return $this;
    }

    /**
     * @return Party
     */
    public function getPayeeParty()
    {
        return $this->payeeParty;
    }

    /**
     * @param Party $payeeParty
     * @return Invoice
     */
    public function setPayeeParty(Party $payeeParty)
    {
        $this->payeeParty = $payeeParty;
        return $this;
    }

    /**
     * @return PaymentMeans
     */
    public function getPaymentMeans()
    {
        return $this->paymentMeans;
    }

    /**
     * @param PaymentMeans $paymentMeans
     * @return Invoice
     */
    public function setPaymentMeans(PaymentMeans $paymentMeans)
    {
        $this->paymentMeans = $paymentMeans;
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
     * @return Invoice
     */
    public function setTaxTotal(TaxTotal $taxTotal)
    {
        $this->taxTotal = $taxTotal;
        return $this;
    }

    /**
     * @return LegalMonetaryTotal
     */
    public function getLegalMonetaryTotal()
    {
        return $this->legalMonetaryTotal;
    }

    /**
     * @param LegalMonetaryTotal $legalMonetaryTotal
     * @return Invoice
     */
    public function setLegalMonetaryTotal(LegalMonetaryTotal $legalMonetaryTotal)
    {
        $this->legalMonetaryTotal = $legalMonetaryTotal;
        return $this;
    }

    /**
     * @return InvoiceLine[]
     */
    public function getInvoiceLines()
    {
        return $this->invoiceLines;
    }

    /**
     * @param InvoiceLine[] $invoiceLines
     * @return Invoice
     */
    public function setInvoiceLines($invoiceLines)
    {
        $this->invoiceLines = $invoiceLines;
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
     * @param AllowanceCharge[] $allowanceCharges
     * @return Invoice
     */
    public function setAllowanceCharges($allowanceCharges)
    {
        $this->allowanceCharges = $allowanceCharges;
        return $this;
    }

    /**
     * @return array<AdditionalDocumentReference>
     */
    public function getAdditionalDocumentReferences()
    {
        return $this->additionalDocumentReferences;
    }

    /**
     * @param AdditionalDocumentReference $additionalDocumentReference
     * @return Invoice
     */
    public function setAdditionalDocumentReference(AdditionalDocumentReference $additionalDocumentReference)
    {
        $this->additionalDocumentReferences = [$additionalDocumentReference];
        return $this;
    }

    /**
     * @param AdditionalDocumentReference[] $additionalDocumentReferences
     * @return Invoice
     */
    public function setAdditionalDocumentReferences($additionalDocumentReferences)
    {
        $this->additionalDocumentReferences = $additionalDocumentReferences;
        return $this;
    }

    /**
     * @param AdditionalDocumentReference $additionalDocumentReference
     * @return Invoice
     */
    public function addAdditionalDocumentReference(AdditionalDocumentReference $additionalDocumentReference)
    {
        $this->additionalDocumentReferences[] = $additionalDocumentReference;
        return $this;
    }

    /**
     * @param string $buyerReference
     * @return Invoice
     */
    public function setBuyerReference($buyerReference)
    {
        $this->buyerReference = $buyerReference;
        return $this;
    }

      /**
     * @return string buyerReference
     */
    public function getBuyerReference()
    {
        return $this->buyerReference;
    }

    /**
     * @return mixed
     */
    public function getAccountingCostCode()
    {
        return $this->accountingCostCode;
    }

    /**
     * @param mixed $accountingCostCode
     * @return Invoice
     */
    public function setAccountingCostCode($accountingCostCode)
    {
        $this->accountingCostCode = $accountingCostCode;
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
     * @return Invoice
     */
    public function setInvoicePeriod(InvoicePeriod $invoicePeriod)
    {
        $this->invoicePeriod = $invoicePeriod;
        return $this;
    }

    /**
     * @return Delivery
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * @param Delivery $delivery
     * @return Invoice
     */
    public function setDelivery(Delivery $delivery)
    {
        $this->delivery = $delivery;
        return $this;
    }

    /**
     * @return OrderReference
     */
    public function getOrderReference()
    {
        return $this->orderReference;
    }

    /**
     * @param OrderReference $orderReference
     * @return Invoice
     */
    public function setOrderReference(OrderReference $orderReference)
    {
        $this->orderReference = $orderReference;
        return $this;
    }

    /**
     * @return BillingReference
     */
    public function getBillingReference()
    {
        return $this->billingReference;
    }

    /**
     * @param BillingReference $billingReference
     * @return Invoice
     */
    public function setBillingReference(BillingReference $billingReference)
    {
        $this->billingReference = $billingReference;
        return $this;
    }

     /**
     * @return PrepaidPayment
     */
    public function getPrepaidPayment()
    {
        return $this->prepaidPayment;
    }

    /**
     * @param PrepaidPayment $prepaidPayment
     * @return Invoice
     */
    public function setPrepaidPayment(PrepaidPayment $prepaidPayment)
    {
        $this->prepaidPayment = $prepaidPayment;
        return $this;
    }

    /**
     * @return UBLExtensions
     */
    public function getUBLExtensions()
    {
        return $this->ublExtensions;
    }

    /**
     * @param UBLExtensions $ublExtensions
     * @return Invoice
     */
    public function setUBLExtensions(UBLExtensions $ublExtensions)
    {
        $this->ublExtensions = $ublExtensions;
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
            throw new InvalidArgumentException('Missing invoice id');
        }

        if (!$this->issueDateTime instanceof DateTime) {
            throw new InvalidArgumentException('Invalid invoice issueDateTime');
        }

        if (empty($this->invoiceTypeCode)) {
            throw new InvalidArgumentException('Missing invoice invoiceTypeCode');
        }

        if (empty($this->invoiceTypeCodeAttributes)) {
            throw new InvalidArgumentException('Missing invoice invoiceTypeCode attributes');
        }

        if (!array_key_exists(UblAttributes::LIST_VERSION_ID, $this->invoiceTypeCodeAttributes)) {
            throw new InvalidArgumentException('Missing ' . UblAttributes::LIST_VERSION_ID . ' attribute in invoice invoiceTypeCode');
        }

        if ($this->accountingSupplierParty === null) {
            throw new InvalidArgumentException('Missing invoice accountingSupplierParty');
        }

        if ($this->accountingCustomerParty === null) {
            throw new InvalidArgumentException('Missing invoice accountingCustomerParty');
        }

        if (empty($this->invoiceLines)) {
            throw new InvalidArgumentException('Missing invoice lines');
        }

        if ($this->legalMonetaryTotal === null) {
            throw new InvalidArgumentException('Missing invoice legalMonetaryTotal');
        }

        if (empty($this->documentCurrencyCode)) {
            throw new InvalidArgumentException('Missing invoice documentCurrencyCode');
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

        if ($this->ublExtensions !== null) {
            $writer->write([
                XmlSchema::EXT . 'UBLExtensions' => $this->ublExtensions
            ]);
        }

        $writer->write([
            XmlSchema::CBC . 'ID' => $this->id
        ]);

        $writer->write([
            XmlSchema::CBC . 'IssueDate' => $this->issueDateTime->format('Y-m-d'),
        ]);

        $writer->write([
            XmlSchema::CBC . 'IssueTime' => $this->issueDateTime->format('H:i:s\Z'),
        ]);

        if ($this->invoiceTypeCode !== null) {
            $writer->write([
                'name' => XmlSchema::CBC . 'InvoiceTypeCode',
                'value' => $this->invoiceTypeCode,
                'attributes' => $this->invoiceTypeCodeAttributes,
            ]);
        }

        $writer->write([
            XmlSchema::CBC . 'DocumentCurrencyCode' => $this->documentCurrencyCode,
        ]);

        if ($this->accountingCostCode !== null) {
            $writer->write([
                XmlSchema::CBC . 'AccountingCostCode' => $this->accountingCostCode
            ]);
        }

        if ($this->buyerReference != null) {
            $writer->write([
                XmlSchema::CBC . 'BuyerReference' => $this->buyerReference
            ]);
        }

        if ($this->invoicePeriod != null) {
            $writer->write([
                XmlSchema::CAC . 'InvoicePeriod' => $this->invoicePeriod
            ]);
        }

        if ($this->orderReference != null) {
            $writer->write([
                XmlSchema::CAC . 'OrderReference' => $this->orderReference
            ]);
        }

        if ($this->billingReference !== null) {
            $writer->write([
                XmlSchema::CAC . 'BillingReference' => $this->billingReference
            ]);
        }

        if (!empty($this->additionalDocumentReferences)) {
            foreach ($this->additionalDocumentReferences as $additionalDocumentReference) {
                $writer->write([
                    XmlSchema::CAC . 'AdditionalDocumentReference' => $additionalDocumentReference
                ]);
            }
        }

        $writer->write([
            XmlSchema::CAC . 'AccountingSupplierParty' => $this->accountingSupplierParty,
            XmlSchema::CAC . 'AccountingCustomerParty' => $this->accountingCustomerParty,
        ]);

        if ($this->payeeParty != null) {
            $writer->write([
                XmlSchema::CAC . 'PayeeParty' => $this->payeeParty
            ]);
        }

        if ($this->delivery != null) {
            $writer->write([
                XmlSchema::CAC . 'Delivery' => $this->delivery
            ]);
        }

        if ($this->paymentMeans !== null) {
            $writer->write([
                XmlSchema::CAC . 'PaymentMeans' => $this->paymentMeans
            ]);
        }

        if ($this->paymentTerms !== null) {
            $writer->write([
                XmlSchema::CAC . 'PaymentTerms' => $this->paymentTerms
            ]);
        }

        if ($this->prepaidPayment !== null) {
            $writer->write([
                XmlSchema::CAC . 'PrepaidPayment' => $this->prepaidPayment
            ]);
        }

        if ($this->allowanceCharges !== null) {
            foreach ($this->allowanceCharges as $allowanceCharge) {
                $writer->write([
                    XmlSchema::CAC . 'AllowanceCharge' => $allowanceCharge
                ]);
            }
        }

        if ($this->taxTotal !== null) {
            $writer->write([
                XmlSchema::CAC . 'TaxTotal' => $this->taxTotal
            ]);
        }

        $writer->write([
            XmlSchema::CAC . 'LegalMonetaryTotal' => $this->legalMonetaryTotal
        ]);

        foreach ($this->invoiceLines as $invoiceLine) {
            $writer->write([
                XmlSchema::CAC . $invoiceLine->xmlTagName => $invoiceLine
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

        if ($this->ublExtensions !== null) {
            $arrays['UBLExtensions'][] = $this->ublExtensions;
        }

        $arrays['ID'][] = [
            '_' => $this->id,
        ];

        $arrays['IssueDate'][] = [
            '_' => $this->issueDateTime->format('Y-m-d'),
        ];

        $arrays['IssueTime'][] = [
            '_' => $this->issueDateTime->format('H:i:s\Z'),
        ];

        if ($this->invoiceTypeCode !== null) {
            $items = [
                '_' => $this->invoiceTypeCode,
            ];

            $items = array_merge($items, $this->invoiceTypeCodeAttributes);

            $arrays['InvoiceTypeCode'][] = $items;
        }

        $arrays['DocumentCurrencyCode'][] = [
            '_' => $this->documentCurrencyCode,
        ];

        if ($this->accountingCostCode !== null) {
            $arrays['AccountingCostCode'][] = [
                '_' => $this->accountingCostCode,
            ];
        }

        if ($this->buyerReference != null) {
            $arrays['BuyerReference'][] = [
                '_' => $this->buyerReference,
            ];
        }

        if ($this->invoicePeriod != null) {
            $arrays['InvoicePeriod'][] = $this->invoicePeriod;
        }

        if ($this->orderReference != null) {
            $arrays['OrderReference'][] = $this->orderReference;
        }

        if ($this->billingReference !== null) {
            $arrays['BillingReference'][] = $this->billingReference;
        }

        if (!empty($this->additionalDocumentReferences)) {
            foreach ($this->additionalDocumentReferences as $additionalDocumentReference) {
                $arrays['AdditionalDocumentReference'][] = $additionalDocumentReference;
            }
        }

        $arrays['AccountingSupplierParty'][] = $this->accountingSupplierParty;
        $arrays['AccountingCustomerParty'][] = $this->accountingCustomerParty;

        if ($this->payeeParty != null) {
            $arrays['PayeeParty'][] = $this->payeeParty;
        }

        if ($this->delivery != null) {
            $arrays['Delivery'][] = $this->delivery;
        }

        if ($this->paymentMeans !== null) {
            $arrays['PaymentMeans'][] = $this->paymentMeans;
        }

        if ($this->paymentTerms !== null) {
            $arrays['PaymentTerms'][] = $this->paymentTerms;
        }

        if ($this->prepaidPayment !== null) {
            $arrays['PrepaidPayment'][] = $this->prepaidPayment;
        }

        if ($this->allowanceCharges !== null) {
            foreach ($this->allowanceCharges as $allowanceCharge) {
                $arrays['AllowanceCharge'][] = $allowanceCharge;
            }
        }

        if ($this->taxTotal !== null) {
            $arrays['TaxTotal'][] = $this->taxTotal;
        }

        $arrays['LegalMonetaryTotal'][] = $this->legalMonetaryTotal;

        foreach ($this->invoiceLines as $invoiceLine) {
            $arrays[$invoiceLine->xmlTagName][] = $invoiceLine;
        }

        return $arrays;
    }
}
