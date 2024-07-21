<?php

/**
 * @copyright Copyright (c) 2024 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

namespace Klsheng\Myinvois\Ubl;

use Klsheng\Myinvois\Ubl\Constant\InvoiceTypeCodes;

class CreditNote extends Invoice
{
    public $xmlTagName = 'Invoice'; //'CreditNote'; // MyInvois System re-use back same tag name
    protected $invoiceTypeCode = InvoiceTypeCodes::CREDIT_NOTE;

    /**
     * @return CreditNoteLine[]
     */
    public function getCreditNoteLines()
    {
        return $this->invoiceLines;
    }

    /**
     * @param CreditNoteLine[] $creditNoteLines
     * @return CreditNote
     */
    public function setCreditNoteLines($creditNoteLines)
    {
        $this->invoiceLines = $creditNoteLines;
        return $this;
    }
}
