<?php

namespace klsheng\myinvois\ubl;

use klsheng\myinvois\ubl\constant\InvoiceTypeCodes;

class SelfBilledCreditNote extends CreditNote
{
    public $xmlTagName = 'Invoice'; //'SelfBilledCreditNote'; // MyInvois System re-use back same tag name
    protected $invoiceTypeCode = InvoiceTypeCodes::SELF_BILLED_CREDIT_NOTE;
}
