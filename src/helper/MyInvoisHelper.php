<?php

namespace klsheng\myinvois\helper;

class MyInvoisHelper
{
    /**
     * Get SubmitDocument array required by MyInvois API gateway
     *
     * @param string $format xml / json
     * @param string $codeNumber Invoice Number
     * @param string $content Original Document Content String
     * 
     * @return array
     */
    public static function getSubmitDocument($format, $codeNumber, $content)
    {
        $document = base64_encode($content);
        $documentHash = hash('sha256', $content);

        return [
            'format' => $format,
            'document' => $document,
            'codeNumber' => $codeNumber,
            'documentHash' => $documentHash,
        ];
    }
}
