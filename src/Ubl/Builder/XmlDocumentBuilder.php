<?php

namespace Klsheng\Myinvois\Ubl\Builder;

use DOMDocument;
use Sabre\Xml\Service;
use Klsheng\Myinvois\Ubl\Constant\UblSpecifications;
use Klsheng\Myinvois\Helper\MyInvoisHelper;
use Klsheng\Myinvois\Ubl\Extension\Signature;

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

    protected function getPropsDigestHash(Signature $signature)
    {
        // https://sdk.myinvois.hasil.gov.my/signature-creation/
        // Step 7

        $service = new Service();
        $service->namespaceMap = [
            'http://uri.etsi.org/01903/v1.3.2#' => 'xades',
            'http://www.w3.org/2000/09/xmldsig#' => 'ds',
        ];

        $content = $service->write('{http://uri.etsi.org/01903/v1.3.2#}root', $signature->getObject()->getQualifyingProperties());
        $content = str_replace("<?xml version=\"1.0\"?>\n", '', $content);

        $xml = new DOMDocument('1.0', 'UTF-8');
        $xml->preserveWhiteSpace = false;
        $xml->loadXML($content);
        
        $content = $xml->C14N();

        return MyInvoisHelper::getHash($content);
    }
}
