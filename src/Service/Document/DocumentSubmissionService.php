<?php

/**
 * @copyright Copyright (c) 2024 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

namespace Klsheng\Myinvois\Service\Document;

use Exception;
use Klsheng\Myinvois\MyInvoisClient;
use Klsheng\Myinvois\Service\AbstractService;

/**
 * Document submission service
 * 
 * @author Sean Kau (kliensheng2020@gmail.com)
 * @since 1.0.0
 */
class DocumentSubmissionService extends AbstractService
{
    public const SANDBOX_API_BASE_URL = 'https://preprod-api.myinvois.hasil.gov.my/api/v1.0/documentsubmissions';
    public const PROD_API_BASE_URL = 'https://api.myinvois.hasil.gov.my/api/v1.0/documentsubmissions';

    /**
     * DocumentSubmissionService constructor.
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
     * This API returns information on documents submitted during a single submission by taxpayer.
     * 
     * @param string    $id         Mandatory: Unique ID of the document submission to retrieve.
     * @param int       $pageNo     Optional: number of the page to retrieve
     * @param int       $pageSize   Optional: number of the documents to retrieve per page. Page size cannot exceed system configured maximum page size for this API [100]
     * 
     * @return array
     */
    public function getSubmission($id, $pageNo = 1, $pageSize = 100)
    {
        $params = [
            'pageNo' => $pageNo,
            'pageSize' => $pageSize,
        ];
        $query = '?' . http_build_query($params);

        $url = $this->getBaseUrl() . '/' . $id . $query;

        $response = $this->getClient()->request('GET', $url);
        return $response;
    }

    /**
     * This API allows taxpayer to submit one or more signed documents to MyInvois System.
     * 
     * @param array $documents  List of document objects submitted. List should have at least one document. The document should follow the UBL 2.1 schema based on the document type version.
     * 
     * @return array
     */
    public function submitDocument(array $documents = [])
    {
        $url = $this->getBaseUrl();
        $body = [
            'json' => [
                'documents' => $documents,
            ],
        ];

        $response = $this->getClient()->request('POST', $url, $body);
        return $response;
    }
}
