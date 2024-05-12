<?php

namespace Klsheng\Myinvois\Ubl\Builder;

use Klsheng\Myinvois\Ubl\Invoice;
use Klsheng\Myinvois\Ubl\Constant\UblSpecifications;

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
            '_A' => UblSpecifications::CAC,
            '_B' => UblSpecifications::CBC,
            '_E' => UblSpecifications::EXT,
            $invoice->xmlTagName => [
                $invoice
            ],
        ]);
    }
}
