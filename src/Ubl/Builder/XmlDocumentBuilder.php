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
            // When MyInvois validate signature it, it will exclude entire ext:UBLExtensions and cac:Signature portion 
            // without remove ext namespace, so we need to add this before signature calculation
            UblSpecifications::EXT => 'ext',
        ];

        $content = $xmlService->write($document->xmlTagName, [
            $document
        ]);

        $content = str_replace("<?xml version=\"1.0\"?>\n", '', $content);

        $xml = new DOMDocument('1.0', 'UTF-8');
        $xml->preserveWhiteSpace = false;
        $xml->formatOutput = false;
        $xml->loadXML($content);

        $content = $xml->C14N();

        $content = utf8_encode($content);
        $content = str_replace(array("\n", "\t", "\r"), '', $content);

        // Custom code to resolve signature issue
        // if($this->isSigned) {
        //     $content = str_replace('<ds:Reference Type="http://www.w3.org/2000/09/xmldsig#SignatureProperties" URI="#id-xades-signed-props">', '<ds:Reference xmlns="urn:oasis:names:specification:ubl:schema:xsd:Invoice-2" xmlns:ds="http://www.w3.org/2000/09/xmldsig#" Type="http://uri.etsi.org/01903/v1.3.2#SignedProperties" URI="#id-xades-signed-props">', $content);
        // }
        
        return $content;
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

        $xml = new DOMDocument('1.0', 'UTF-8');
        $xml->preserveWhiteSpace = false;
        $xml->formatOutput = false;
        $xml->loadXML($content);
        
        $content = $xml->C14N();

        $content = utf8_encode($content);
        $content = str_replace(array("\n", "\t", "\r"), '', $content);
        $content = str_replace("<?xml version=\"1.0\"?>", '', $content);
        $content = str_replace("<xades:root xmlns:ds=\"http://www.w3.org/2000/09/xmldsig#\" xmlns:xades=\"http://uri.etsi.org/01903/v1.3.2#\">", '', $content);
        $content = str_replace("</xades:root>", '', $content);
        //$content = str_replace("<xades:SignedProperties Id=\"id-xades-signed-props\">", '', $content);
        //$content = str_replace("</xades:SignedProperties>", '', $content);

        return MyInvoisHelper::getHash($content, true);
    }
}
