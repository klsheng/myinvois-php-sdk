<?php

namespace Klsheng\Myinvois\Ubl\Builder;

use Klsheng\Myinvois\Ubl\Invoice;

interface IDocumentBuilder
{
    public function getDocument(Invoice $invoice);
}
