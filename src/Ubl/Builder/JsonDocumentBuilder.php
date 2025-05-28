<?php

/**
 * @copyright Copyright (c) 2024 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

namespace Klsheng\Myinvois\Ubl\Builder;

use Klsheng\Myinvois\Ubl\Constant\UblSpecifications;
use Klsheng\Myinvois\Helper\MyInvoisHelper;
use Klsheng\Myinvois\Ubl\Extension\Signature;

/**
 * JSON document builder
 * 
 * @author Sean Kau (kliensheng2020@gmail.com)
 * @since 1.0.0
 */
class JsonDocumentBuilder extends AbstractDocumentBuilder
{
    /**
     * {@inheritdoc}
     */
    public function build()
    {
        $document = $this->getDocument();

        $content = json_encode([
            '_D' => 'urn:oasis:names:specification:ubl:schema:xsd:' . $document->xmlTagName . '-2',
            '_A' => UblSpecifications::CAC,
            '_B' => UblSpecifications::CBC,
            // When MyInvois validate signature it, it will exclude entire ext:UBLExtensions and cac:Signature portion 
            // without remove ext namespace, so we need to add this before signature calculation
            '_E' => UblSpecifications::EXT,
            $document->xmlTagName => [
                $document
            ],
        ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

        // $content = json_encode(json_decode($content), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        $content = str_replace(array("\r", "\n"), '', $content);
        if (!mb_check_encoding($content, 'UTF-8')) {
						$content = mb_convert_encoding($content, 'UTF-8', 'auto');
				}

        // XML and JSON has different value for this
        if($this->isSigned) {
            $content = str_replace('"Type": "http://www.w3.org/2000/09/xmldsig#SignatureProperties"', '"Type": "http://uri.etsi.org/01903/v1.3.2#SignedProperties"', $content);
        }

        return $content;
    }

    /**
     * Get Props Digiest Hash
     * 
     * @param Signature $signature Signature object
     * @return string
     */
    protected function getPropsDigestHash(Signature $signature)
    {
        // https://sdk.myinvois.hasil.gov.my/signature-creation-json/
        // Step 5
        
        $content = json_encode(
            $signature->getObject()->getQualifyingProperties(), 
            JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

        if (!mb_check_encoding($content, 'UTF-8')) {
						$content = mb_convert_encoding($content, 'UTF-8', 'auto');
				}

        return MyInvoisHelper::getHash($content, true);
    }
}
