<?php

namespace Klsheng\Myinvois\Ubl\Builder;

use DOMDocument;
use Sabre\Xml\Service;
use Klsheng\Myinvois\Ubl\Constant\UblSpecifications;

class XmlDocumentBuilder extends AbstractDocumentBuilder
{
    /**
     * {@inheritdoc}
     */
    public function build()
    {
        $document = $this->getDocument();
        $xmlService = new Service();

        $xmlService->namespaceMap = [
            'urn:oasis:names:specification:ubl:schema:xsd:' . $document->xmlTagName . '-2' => '',
            UblSpecifications::CBC => 'cbc',
            UblSpecifications::CAC => 'cac',
            UblSpecifications::EXT => 'ext'
        ];

        $content = $xmlService->write($document->xmlTagName, [
            $document
        ]);

        $content = str_replace("<?xml version=\"1.0\"?>\n", '', $content);

        $xml = new DOMDocument('1.0', 'UTF-8');
        $xml->loadXML($content);
        
        return $xml->C14N();
    }
}
