<?php

namespace klsheng\myinvois\ubl;

use klsheng\myinvois\ubl\constant\InvoiceTypeCodes;

class SelfBilledDebitNote extends DebitNote
{
    public $xmlTagName = 'SelfBilledDebitNote';
    protected $invoiceTypeCode = InvoiceTypeCodes::SELF_BILLED_DEBIT_NOTE;
}
