<?php

/**
 * @copyright Copyright (c) 2024 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

namespace Klsheng\Myinvois\Service\Document;

use Exception;
use DateTime;
use Klsheng\Myinvois\MyInvoisClient;
use Klsheng\Myinvois\Service\AbstractService;

/**
 * Document service
 * 
 * @author Sean Kau (kliensheng2020@gmail.com)
 * @since 1.0.0
 */
class DocumentService extends AbstractService
{
    public const SANDBOX_API_BASE_URL = 'https://preprod-api.myinvois.hasil.gov.my/api/v1.0/documents';
    public const PROD_API_BASE_URL = 'https://api.myinvois.hasil.gov.my/api/v1.0/documents';

    private const STATE_CANCELLED = 'cancelled';
    private const STATE_REJECTED = 'rejected';

    /**
     * DocumentService constructor.
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
     * This API allows issuer to cancel previously issued document, either self-induced cancellation or by accepting a rejection request made by the buyer.
     * 
     * @param string $id        Unique ID of existing document.
     * @param string $reasion   Reason for cancelling the document. (The length of the reason would be limited to 300 chars)
     * 
     * @return array
     */
    public function cancelDocument($id, $reason = '')
    {
        $url = $this->getBaseUrl() . '/state/' . $id . '/state';
        $body = [
            'json' => [
                'status' => self::STATE_CANCELLED,
                'reason' => $reason,
            ],
        ];

        $response = $this->getClient()->request('PUT', $url, $body);
        return $response;
    }

    /**
     * This API allows a buyer that received an invoice to reject it and request the supplier to cancel it.
     * 
     * @param string $id        Unique ID of existing document.
     * @param string $reasion   Reason for rejecting the document. (The length of the reason would be limited to 300 chars)
     * 
     * @return array
     */
    public function rejectDocument($id, $reason = '')
    {
        $url = $this->getBaseUrl() . '/state/' . $id . '/state';
        $body = [
            'json' => [
                'status' => self::STATE_REJECTED,
                'reason' => $reason,
            ],
        ];

        $response = $this->getClient()->request('PUT', $url, $body);
        return $response;
    }

    /**
     * This API allows taxpayers to retrieve document source in XML or JSON format along with the additional tax authority metadata.
     * 
     * @param string $id    Unique ID of the document to retrieve.
     * 
     * @return array
     */
    public function getDocument($id)
    {
        $url = $this->getBaseUrl() . '/' . $id . '/raw';

        $response = $this->getClient()->request('GET', $url);
        return $response;
    }

    /**
     * This API allows taxpayers to retrieve a single document's full details including validation results.
     * 
     * @param string $id    Unique ID of the document to retrieve.
     * 
     * @return array
     */
    public function getDocumentDetail($id)
    {
        $url = $this->getBaseUrl() . '/' . $id . '/details';

        $response = $this->getClient()->request('GET', $url);
        return $response;
    }

    /**
     * This API allows taxpayer's systems to search the documents sent or received which are available on the MyInvois System using various filters. This API will only return documents that are issued within the last 30 days.
     * 
     * @param int               $pageNo                 Optional: number of the page to retrieve. Typically this parameter value is derived from initial parameter less call when caller learns total amount of page of certain size
     * @param int               $pageSize               Optional: number of the documents to retrieve per page. Page size cannot exceed system configured maximum page size for this API
     * @param DateTime|string   $submissionDateFrom     Optional: The start date and time when the document was submitted to the e-Invoice API, Time to be supplied in UTC timezone. Mandatory when ‘submissionDateTo’ is provided
     * @param DateTime|string   $submissionDateTo       Optional: The end date and time when the document was submitted to the e-Invoice API, Time to be supplied in UTC timezone. Mandatory when ‘submissionDateFrom’ is provided
     * @param DateTime|string   $issueDateFrom          Optional: The start date and time when the document was issued. Mandatory when ‘issueDateTo’ is provided
     * @param DateTime|string   $issueDateTo            Optional: The end date and time when the document was issued. Mandatory when ‘issueDateFrom’ is provided
     * @param string            $direction              Optional: direction of the document. Possible values: (Sent, Received)
     * @param string            $status                 Optional: status of the document. Possible values: (Valid, Invalid, Cancelled, Submitted)
     * @param string            $documentType           Optional: Document type code.
     * @param string            $receiverId             Optional: Document recipient identifier. Only can be used when ‘Direction’ filter is set to Sent. Possible values: (Business registration number, National ID(IC), Passport Number, Army ID)
     * @param string            $receiverIdType         Optional: Document recipient identifier type. Only can be used when ‘Direction’ filter is set to Sent. Possible values: (BRN, PASSPORT, NRIC, ARMY) This is mandatory in case the receiverId is provided
     * @param string            $receiverTin            Optional: Document recipient TIN. Only can be used when ‘Direction’ filter is set to Sent.
     * @param string            $issuerId               Optional: Document issuer identifier. Only can be used when ‘Direction’ filter is set to Received. Possible values: (Business registration number, National ID(IC), Passport Number, Army ID)
     * @param string            $issuerIdType           Optional: Document issuer identifier type. Only can be used when ‘Direction’ filter is set to Received. Possible values: (BRN, PASSPORT, NRIC, ARMY) This is mandatory in case the issuerId is provided
     * @param string            $issuerTin              Optional: Document issuer identifier. Only can be used when ‘Direction’ filter is set to Received.
     * 
     * @return array
     */
    public function getRecentDocuments($pageNo = 1, $pageSize = 20, $submissionDateFrom = null, 
        $submissionDateTo = null, $issueDateFrom = null, $issueDateTo = null, $direction = null, 
        $status = null, $documentType = null, $receiverId = null, $receiverIdType = null, $receiverTin = null,
        $issuerId = null, $issuerIdType = null, $issuerTin = null)
    {
        $submissionDateFromString = ($submissionDateFrom instanceof DateTime) ? $submissionDateFrom->format('Y-m-d\TH:i:s\Z') : $submissionDateFrom;
        $submissionDateToString = ($submissionDateTo instanceof DateTime) ? $submissionDateTo->format('Y-m-d\TH:i:s\Z') : $submissionDateTo;
        $issueDateFromString = ($issueDateFrom instanceof DateTime) ? $issueDateFrom->format('Y-m-d\TH:i:s\Z') : $issueDateFrom;
        $issueDateToString = ($issueDateTo instanceof DateTime) ? $issueDateTo->format('Y-m-d\TH:i:s\Z') : $issueDateTo;

        $params = [
            'pageNo' => $pageNo,
            'pageSize' => $pageSize,
            'submissionDateFrom' => $submissionDateFromString,
            'submissionDateTo' => $submissionDateToString,
            'issueDateFrom' => $issueDateFromString,
            'issueDateTo' => $issueDateToString,
            'direction' => $direction,
            'status' => $status,
            'documentType' => $documentType,
            'receiverId' => $receiverId,
            'receiverIdType' => $receiverIdType,
            'receiverTin' => $receiverTin,
            'issuerId' => $issuerId,
            'issuerIdType' => $issuerIdType,
            'issuerTin' => $issuerTin,
        ];
        $query = '?' . http_build_query($params);

        $url = $this->getBaseUrl() . '/recent' . $query;

        $response = $this->getClient()->request('GET', $url);
        return $response;
    }

    /**
     * This API allows taxpayer's systems to search the documents sent or received which are available on the MyInvois System using various filters.
     * 
     * @param string            $id                     Optional: Unique ID of the document to retrieve.
     * @param DateTime|string   $submissionDateFrom     Optional: The start date and time when the document was submitted to the e-Invoice API, Time to be supplied in UTC timezone. Mandatory when ‘submissionDateTo’ is provided or issueDate filters are not used
     * @param DateTime|string   $submissionDateTo       Optional: The end date and time when the document was submitted to the e-Invoice API, Time to be supplied in UTC timezone. Mandatory when ‘submissionDateFrom’ is provided or issueDate filters are not used
     * @param string            $continuationToken      Optional: Token provided to navigate to the next page. Must be omitted or use an empty string when requesting the first page.
     * @param int               $pageSize               Optional: number of the documents to retrieve per page. Page size cannot exceed system configured maximum page size for this API. Default is 100
     * @param DateTime|string   $issueDateFrom          Optional: The start date and time when the document was issued. Mandatory when ‘issueDateTo’ is provided or submissionDate filters are not used
     * @param DateTime|string   $issueDateTo            Optional: The end date and time when the document was issued. Mandatory when ‘issueDateFrom’ is provided or submissionDate filters are not used
     * @param string            $direction              Optional: direction of the document. Possible values: (Sent, Received). When not provided sent and received documents are retrieved.
     * @param string            $status                 Optional: status of the document. Possible values: (Valid, Invalid, Cancelled, Submitted)
     * @param string            $documentType           Optional: Unique name of the document type. Possible values: 01 [Invoice], 02 [Credit Note], 03 [Debit Note], 04 [Refund Note], 11 [Self-billed Invoice], 12 [Self-billed Credit Note], 13 [Self-billed Debit Note], 14 [Self-billed Refund Note]
     * @param string            $receiverId             Optional: Document recipient identifier. Only can be used when ‘Direction’ filter is set to Sent. Possible values: (Business registration number, Passport Number, National ID)
     * @param string            $receiverIdType         Optional: Document recipient identifier type. Only can be used when ‘Direction’ filter is set to Sent. Possible values: (BRN, PASSPORT, NRIC, ARMY) This is mandatory in case the receiverId is provided
     * @param string            $receiverTin            Optional: Document recipient TIN. Only can be used when ‘Direction’ filter is set to Sent.
     * @param string            $issuerTin              Optional: Document issuer identifier. Only can be used when ‘Direction’ filter is set to Received.
     * 
     * @return array
     */
    public function searchDocuments($id = null, $submissionDateFrom = null, $submissionDateTo = null, 
        $continuationToken = null, $pageSize = 100, $issueDateFrom = null, $issueDateTo = null, $direction = null, 
        $status = null, $documentType = null, $receiverId = null, $receiverIdType = null, $receiverTin = null,
        $issuerTin = null)
    {
        $submissionDateFromString = ($submissionDateFrom instanceof DateTime) ? $submissionDateFrom->format('Y-m-d\TH:i:s\Z') : $submissionDateFrom;
        $submissionDateToString = ($submissionDateTo instanceof DateTime) ? $submissionDateTo->format('Y-m-d\TH:i:s\Z') : $submissionDateTo;
        $issueDateFromString = ($issueDateFrom instanceof DateTime) ? $issueDateFrom->format('Y-m-d\TH:i:s\Z') : $issueDateFrom;
        $issueDateToString = ($issueDateTo instanceof DateTime) ? $issueDateTo->format('Y-m-d\TH:i:s\Z') : $issueDateTo;


        $params = [
            'uuid' => $id,
            'submissionDateFrom' => $submissionDateFromString,
            'submissionDateTo' => $submissionDateToString,
            'continuationToken' => $continuationToken,
            'pageSize' => $pageSize,
            'issueDateFrom' => $issueDateFromString,
            'issueDateTo' => $issueDateToString,
            'direction' => $direction,
            'status' => $status,
            'documentType' => $documentType,
            'receiverId' => $receiverId,
            'receiverIdType' => $receiverIdType,
            'receiverTin' => $receiverTin,
            'issuerTin' => $issuerTin,
        ];
        $query = '?' . http_build_query($params);

        $url = $this->getBaseUrl() . '/search' . $query;

        $response = $this->getClient()->request('GET', $url);
        return $response;
    }
}
