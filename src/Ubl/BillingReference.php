<?php

/**
 * @copyright Copyright (c) 2024 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

namespace Klsheng\Myinvois\Ubl;

use InvalidArgumentException;
use Sabre\Xml\Writer;

/**
 * Billing reference
 * 
 * @author Sean Kau (kliensheng2020@gmail.com)
 * @since 1.0.0
 */
class BillingReference implements ISerializable, IValidator
{
    private $additionalDocumentReference;
    private $invoiceDocumentReference;

    /**
     * @return AdditionalDocumentReference
     */
    public function getAdditionalDocumentReference()
    {
        return $this->additionalDocumentReference;
    }

    /**
     * @param AdditionalDocumentReference $additionalDocumentReferenceline
     * @return BillingReference
     */
    public function setAdditionalDocumentReference(AdditionalDocumentReference $additionalDocumentReference)
    {
        $this->additionalDocumentReference = $additionalDocumentReference;
        return $this;
    }

    /**
     * @return InvoiceDocumentReference
     */
    public function getInvoiceDocumentReference()
    {
        return $this->invoiceDocumentReference;
    }

    /**
     * @param InvoiceDocumentReference $invoiceDocumentReference
     * @return BillingReference
     */
    public function setInvoiceDocumentReference(InvoiceDocumentReference $invoiceDocumentReference)
    {
        $this->invoiceDocumentReference = $invoiceDocumentReference;
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

        if ($this->additionalDocumentReference !== null) {
            $writer->write([
                XmlSchema::CAC . 'AdditionalDocumentReference' => $this->additionalDocumentReference
            ]);
        }

        if ($this->invoiceDocumentReference !== null) {
            $writer->write([
                XmlSchema::CAC . 'InvoiceDocumentReference' => $this->invoiceDocumentReference
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

        if ($this->additionalDocumentReference !== null) {
            $arrays['AdditionalDocumentReference'][] = $this->additionalDocumentReference;
        }

        if ($this->invoiceDocumentReference !== null) {
            $arrays['InvoiceDocumentReference'][] = $this->invoiceDocumentReference;
        }

        return $arrays;
    }
}
