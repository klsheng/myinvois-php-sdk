<?php

namespace klsheng\myinvois\ubl;

use klsheng\myinvois\ubl\constant\InvoiceTypeCodes;

class SelfBilledDebitNote extends DebitNote
{
    public $xmlTagName = 'Invoice'; //'SelfBilledDebitNote'; // MyInvois System re-use back same tag name
    protected $invoiceTypeCode = InvoiceTypeCodes::SELF_BILLED_DEBIT_NOTE;
}
