<?php

/**
 * @copyright Copyright (c) 2024 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

namespace Klsheng\Myinvois\Service\Document;

use Exception;
use Klsheng\Myinvois\MyInvoisClient;
use Klsheng\Myinvois\Service\AbstractService;

class DocumentTypeService extends AbstractService
{
    public const SANDBOX_API_BASE_URL = 'https://preprod-api.myinvois.hasil.gov.my/api/v1.0/documenttypes';
    public const PROD_API_BASE_URL = 'https://api.myinvois.hasil.gov.my/api/v1.0/documenttypes';

    /**
     * DocumentTypeService constructor.
     *
     * @param MyInvoisClient    $client
     * @param bool              $prodMode
     */
    public function __construct(MyInvoisClient $client, $prodMode = false)
    {
        $baseUrl = ($prodMode) ? self::PROD_API_BASE_URL : self::SANDBOX_API_BASE_URL;

        parent::__construct($client, $baseUrl);
    }

    /**
     * This API allows taxpayer's systems to retrieve list of document types published by the MyInvois System.
     * 
     * @return array
     */
    public function getAllDocumentTypes()
    {
        $response = $this->getClient()->request('GET', $this->getBaseUrl());
        return $response;
    }

    /**
     * This API allows taxpayer's ERP system to retrieve the details of single document type that contains structure definitions of the document.
     * 
     * @param string $id    Unique ID of existing document type
     * 
     * @return array
     */
    public function getDocumentType($id)
    {
        $url = $this->getBaseUrl() . '/' . $id;
        
        $response = $this->getClient()->request('GET', $url);
        return $response;
    }

    /**
     * This API allows taxpayer's ERP system to retrieve the details of document type version that contains structure definitions of the documents.
     * 
     * @param string $id            Unique ID of existing document type
     * @param string $versionId     Unique ID of existing document type version that is published or deactivated
     * 
     * @return array
     */
    public function getDocumentTypeVersion($id, $versionId)
    {
        $url = $this->getBaseUrl() . '/' . $id . '/versions/' . $versionId;

        $response = $this->getClient()->request('GET', $url);
        return $response;
    }
}
