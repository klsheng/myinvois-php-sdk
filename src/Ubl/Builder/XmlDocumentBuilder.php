<?php

namespace Klsheng\Myinvois\Ubl\Builder;

use Sabre\Xml\Service;
use Klsheng\Myinvois\Ubl\Invoice;
use Klsheng\Myinvois\Ubl\Constant\UblSpecifications;

class XmlDocumentBuilder implements IDocumentBuilder
{
    /**
     * @param Invoice $invoice Invoice is base model of all documents
     * @return string
     */
    public function getDocument(Invoice $invoice)
    {
        $xmlService = new Service();

        $xmlService->namespaceMap = [
            'urn:oasis:names:specification:ubl:schema:xsd:' . $invoice->xmlTagName . '-2' => '',
            UblSpecifications::CBC => 'cbc',
            UblSpecifications::CAC => 'cac',
            UblSpecifications::EXT => 'ext'
        ];

        return $xmlService->write($invoice->xmlTagName, [
            $invoice
        ]);
    }
}
