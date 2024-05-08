<?php

namespace klsheng\myinvois\ubl;

use klsheng\myinvois\ubl\constant\InvoiceTypeCodes;

class RefundNote extends Invoice
{
    public $xmlTagName = 'Invoice'; //'RefundNote'; // MyInvois System re-use back same tag name
    protected $invoiceTypeCode = InvoiceTypeCodes::REFUND_NOTE;
}
