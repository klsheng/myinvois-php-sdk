<?php

namespace Klsheng\Myinvois\Ubl;

use Klsheng\Myinvois\Ubl\Constant\InvoiceTypeCodes;

class SelfBilledInvoice extends Invoice
{
    public $xmlTagName = 'Invoice'; //'SelfBilledInvoice'; // MyInvois System re-use back same tag name
    protected $invoiceTypeCode = InvoiceTypeCodes::SELF_BILLED_INVOICE;
}
