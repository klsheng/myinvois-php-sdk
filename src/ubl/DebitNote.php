<?php

namespace klsheng\myinvois\ubl;

use klsheng\myinvois\ubl\constant\InvoiceTypeCodes;

class DebitNote extends Invoice
{
    public $xmlTagName = 'Invoice'; //'DebitNote'; // MyInvois System re-use back same tag name
    protected $invoiceTypeCode = InvoiceTypeCodes::DEBIT_NOTE;

    /**
     * @return DebitNoteLine[]
     */
    public function getDebitNoteLines()
    {
        return $this->invoiceLines;
    }

    /**
     * @param DebitNoteLine[] $debitNoteLines
     * @return DebitNote
     */
    public function setDebitNoteLines($debitNoteLines)
    {
        $this->invoiceLines = $debitNoteLines;
        return $this;
    }
}
