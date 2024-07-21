<?php

/**
 * @copyright Copyright (c) 2024 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

namespace Klsheng\Myinvois\Ubl\Constant;

class InvoiceTypeCodes
{
    const INVOICE = '01';
    const CREDIT_NOTE = '02';
    const DEBIT_NOTE = '03';
    const REFUND_NOTE = '04';
    const SELF_BILLED_INVOICE = '11';
    const SELF_BILLED_CREDIT_NOTE = '12';
    const SELF_BILLED_DEBIT_NOTE = '13';
    const SELF_BILLED_REFUND_NOTE = '14';
}
