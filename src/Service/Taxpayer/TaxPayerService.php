<?php

/**
 * @copyright Copyright (c) 2024 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

namespace Klsheng\Myinvois\Service\Taxpayer;

use Exception;
use Klsheng\Myinvois\MyInvoisClient;
use Klsheng\Myinvois\Service\AbstractService;

/**
 * Tax payer service
 * 
 * @author Sean Kau (kliensheng2020@gmail.com)
 * @since 1.0.0
 */
class TaxPayerService extends AbstractService
{
    public const SANDBOX_API_BASE_URL = 'https://preprod-api.myinvois.hasil.gov.my/api/v1.0/taxpayer';
    public const PROD_API_BASE_URL = 'https://api.myinvois.hasil.gov.my/api/v1.0/taxpayer';

    /**
     * TaxPayerService constructor.
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
     * This API allows taxpayer's ERP system to validate specific Tax Identification Number (TIN) before 
     * adding this number to an invoice and issuing the invoice.
     *
     * @param string $tin       The Tax Identification Number to get the validity of the tin.
     * @param string $idType    NRIC, Passport number, Business registration number, army number
     * @param string $idValue   The actual value of the ID Type selected. For example, if NRIC selected as ID Type, then pass the NRIC value here.
     * 
     * @return bool
     */
    public function validateTaxPayerTin($tin, $idType, $idValue)
    {
        $params = [
            'idType' => $idType,
            'idValue' => $idValue,
        ];
        $query = '?' . http_build_query($params);

        $url = $this->getBaseUrl() . '/validate/' . $tin . $query;

        $response = $this->getClient()->request('GET', $url);
        // When it is valid, the gateway return empty with statusCode 200
        if($response == null) {
            return '';
        }
        return $response;
    }

    /**
     * This API allows taxpayer's ERP system to search for a specific Tax Identification Number (TIN) 
     * using the supported search parameters. The available search parameters are either 
     * the Taxpayer Name or ID Type and ID Value, or all three parameters combined. 
     * If all parameters are provided then the search would use an AND operator to make sure the result 
     * found matches all search parameters provided.
     *
     * @param string $taxPayerName      The Taxpayer Name.
     * @param string $idType            NRIC, Passport number, Business registration number, army number
     * @param string $idValue           The actual value of the ID Type selected. For example, if NRIC selected as ID Type, then pass the NRIC value here.
     * @param string $fileType          Optional: Value to differentiate between individual and non-individual taxpayers. (1 for IG TIN (individual). 2 for non-IG TIN (non-individual).)
     * 
     * @return string
     */
    public function searchTaxPayerTin($taxPayerName = '', $idType = '', $idValue = '', $fileType = '')
    {
        $params = [
            'idType' => $idType,
            'idValue' => $idValue,
            'taxpayerName' => $taxPayerName,
            'fileType' => $fileType,
        ];
        $query = '?' . http_build_query($params);

        $url = $this->getBaseUrl() . '/search/tin' .  $query;

        $response = $this->getClient()->request('GET', $url);
        return $response;
    }
}
