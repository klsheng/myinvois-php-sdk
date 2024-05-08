<?php

namespace klsheng\myinvois\ubl\builder;

use Sabre\Xml\Service;
use klsheng\myinvois\ubl\Invoice;

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
            'urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2' => 'cbc',
            'urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2' => 'cac',
            'urn:oasis:names:specification:ubl:schema:xsd:CommonExtensionComponents-2' => 'ext'
        ];

        return $xmlService->write($invoice->xmlTagName, [
            $invoice
        ]);
    }
}
