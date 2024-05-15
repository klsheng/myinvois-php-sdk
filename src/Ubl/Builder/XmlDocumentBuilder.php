<?php

namespace Klsheng\Myinvois\Ubl\Builder;

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

        return $xmlService->write($document->xmlTagName, [
            $document
        ]);
    }
}
