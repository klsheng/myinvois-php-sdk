<?php

namespace Klsheng\Myinvois\Ubl;

use Klsheng\Myinvois\Ubl\Constant\InvoiceTypeCodes;

class SelfBilledCreditNote extends CreditNote
{
    public $xmlTagName = 'Invoice'; //'SelfBilledCreditNote'; // MyInvois System re-use back same tag name
    protected $invoiceTypeCode = InvoiceTypeCodes::SELF_BILLED_CREDIT_NOTE;
}
