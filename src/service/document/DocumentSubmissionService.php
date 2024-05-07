<?php
namespace klsheng\myinvois\service\document;

use Exception;
use klsheng\myinvois\MyInvoisClient;
use klsheng\myinvois\service\BaseService;

class DocumentSubmissionService extends BaseService
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
     * @param string $id    Unique ID of the document submission to retrieve.
     * 
     * @return array
     */
    public function getSubmission($id)
    {
        $url = $this->getBaseUrl() . '/' . $id;

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
