<?php

namespace Klsheng\Myinvois\Ubl;

use Klsheng\Myinvois\Ubl\Constant\InvoiceTypeCodes;

class SelfBilledDebitNote extends DebitNote
{
    public $xmlTagName = 'Invoice'; //'SelfBilledDebitNote'; // MyInvois System re-use back same tag name
    protected $invoiceTypeCode = InvoiceTypeCodes::SELF_BILLED_DEBIT_NOTE;
}
