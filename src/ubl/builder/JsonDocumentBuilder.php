<?php

namespace klsheng\myinvois\ubl\builder;

use klsheng\myinvois\ubl\Invoice;

class JsonDocumentBuilder implements IDocumentBuilder
{
    /**
     * @param Invoice $invoice Invoice is base model of all documents
     * @return string
     */
    public function getDocument(Invoice $invoice)
    {
        return json_encode([
            '_D' => 'urn:oasis:names:specification:ubl:schema:xsd:' . $invoice->xmlTagName . '-2',
            '_A' => 'urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2',
            '_B' => 'urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2',
            $invoice->xmlTagName => [
                $invoice
            ],
        ]);
    }
}
