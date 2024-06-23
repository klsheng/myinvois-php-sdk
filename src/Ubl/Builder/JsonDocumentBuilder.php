<?php

namespace Klsheng\Myinvois\Ubl\Builder;

use Klsheng\Myinvois\Ubl\Constant\UblSpecifications;

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
            '_E' => UblSpecifications::EXT,
            $document->xmlTagName => [
                $document
            ],
        ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

        // $content = json_encode(json_decode($content), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        $content = str_replace(array("\r", "\n"), '', $content);

        return $content;
    }
}
