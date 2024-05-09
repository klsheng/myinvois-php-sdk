<?php

namespace Klsheng\Myinvois\Helper;

class MyInvoisHelper
{
    public static function __callStatic($name, $arguments) {
        switch ($name) {
            case 'getSubmitDocument':
                return self::getInternalSubmitDocument($arguments);
            default:
                break;
        }
    }
    
    /**
     * Get SubmitDocument array required by MyInvois API gateway
     *
     * @param array $arguments
     * 
     * @return array
     */
    private static function getInternalSubmitDocument($arguments)
    {
        // Only $codeNumber and $content
        if(sizeof($arguments) == 2) {
            $codeNumber = $arguments[0];
            $content = $arguments[1];
            $format = (self::isJson($content)) ? 'json' : 'xml';
        } else {
            $format = $arguments[0];
            $codeNumber = $arguments[1];
            $content = $arguments[2];
        }

        $document = base64_encode($content);
        $documentHash = hash('sha256', $content);

        return [
            'format' => $format,
            'document' => $document,
            'codeNumber' => $codeNumber,
            'documentHash' => $documentHash,
        ];
    }

    public static function isJson($string) {
        json_decode($string);
        return json_last_error() === JSON_ERROR_NONE;
    }
}
