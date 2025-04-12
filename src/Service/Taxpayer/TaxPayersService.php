<?php

/**
 * @copyright Copyright (c) 2025 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

namespace Klsheng\Myinvois\Service\Taxpayer;

use Exception;
use Klsheng\Myinvois\MyInvoisClient;
use Klsheng\Myinvois\Service\AbstractService;

/**
 * Tax payers service
 * 
 * @author Sean Kau (kliensheng2020@gmail.com)
 * @since 1.0.8
 */
class TaxPayersService extends AbstractService
{
    public const SANDBOX_API_BASE_URL = 'https://preprod-api.myinvois.hasil.gov.my/api/v1.0/taxpayers';
    public const PROD_API_BASE_URL = 'https://api.myinvois.hasil.gov.my/api/v1.0/taxpayers';

    /**
     * TaxPayersService constructor.
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
     * This API allows taxpayer’s ERP system to retrieve the information for a specific Taxpayer based on 
     * the Base64 formatted string obtained from scanning the respective QR code.
     *
     * @param string $qrCodeText       Decoded Base64 string.
     * 
     * @return array
     */
    public function getTaxPayerFromQrcode($qrCodeText)
    {
        $url = $this->getBaseUrl() . '/qrcodeinfo/' . $qrCodeText;

        $response = $this->getClient()->request('GET', $url);
        return $response;
    }
}
