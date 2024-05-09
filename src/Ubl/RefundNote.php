<?php

namespace Klsheng\Myinvois\Ubl;

use Klsheng\Myinvois\Ubl\Constant\InvoiceTypeCodes;

class RefundNote extends Invoice
{
    public $xmlTagName = 'Invoice'; //'RefundNote'; // MyInvois System re-use back same tag name
    protected $invoiceTypeCode = InvoiceTypeCodes::REFUND_NOTE;
}
