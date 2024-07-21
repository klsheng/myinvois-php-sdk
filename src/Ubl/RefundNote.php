<?php

/**
 * @copyright Copyright (c) 2024 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

namespace Klsheng\Myinvois\Ubl;

use Klsheng\Myinvois\Ubl\Constant\InvoiceTypeCodes;

class RefundNote extends Invoice
{
    public $xmlTagName = 'Invoice'; //'RefundNote'; // MyInvois System re-use back same tag name
    protected $invoiceTypeCode = InvoiceTypeCodes::REFUND_NOTE;
}
