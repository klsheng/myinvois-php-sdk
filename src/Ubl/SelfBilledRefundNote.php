<?php

namespace Klsheng\Myinvois\Ubl;

use Klsheng\Myinvois\Ubl\Constant\InvoiceTypeCodes;

class SelfBilledRefundNote extends Invoice
{
    public $xmlTagName = 'Invoice'; //'SelfBilledRefundNote'; // MyInvois System re-use back same tag name
    protected $invoiceTypeCode = InvoiceTypeCodes::SELF_BILLED_REFUND_NOTE;
}
