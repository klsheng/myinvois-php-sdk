<?php

namespace klsheng\myinvois\ubl\builder;

use klsheng\myinvois\ubl\Invoice;

interface IDocumentBuilder
{
    public function getDocument(Invoice $invoice);
}
