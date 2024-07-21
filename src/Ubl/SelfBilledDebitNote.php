<?php

/**
 * @copyright Copyright (c) 2024 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

namespace Klsheng\Myinvois\Ubl;

use Klsheng\Myinvois\Ubl\Constant\InvoiceTypeCodes;

class SelfBilledDebitNote extends DebitNote
{
    public $xmlTagName = 'Invoice'; //'SelfBilledDebitNote'; // MyInvois System re-use back same tag name
    protected $invoiceTypeCode = InvoiceTypeCodes::SELF_BILLED_DEBIT_NOTE;
}
