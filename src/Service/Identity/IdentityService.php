<?php

/**
 * @copyright Copyright (c) 2024 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

namespace Klsheng\Myinvois\Service\Identity;

use Exception;
use Klsheng\Myinvois\MyInvoisClient;
use Klsheng\Myinvois\Service\AbstractService;

class IdentityService extends AbstractService
{
    public const SANDBOX_IDENTITY_BASE_URL = 'https://preprod-api.myinvois.hasil.gov.my/connect/token';
    public const PROD_IDENTITY_BASE_URL = 'https://api.myinvois.hasil.gov.my/connect/token';

    /**
     * IdentityService constructor.
     *
     * @param MyInvoisClient    $client
     * @param bool              $prodMode
     */
    public function __construct(MyInvoisClient $client, $prodMode = false)
    {
        $baseUrl = ($prodMode) ? self::PROD_IDENTITY_BASE_URL : self::SANDBOX_IDENTITY_BASE_URL;

        parent::__construct($client, $baseUrl);
    }

    /**
     * Set token if you have it
     *
     * @param string $token
     *
     * @return array
     */
    public function setAccessToken($token)
    {
        $headers = $this->getClient()->getOption('headers');
        if(!$headers) {
            $headers = [];
        }
        $headers = array_merge($headers, [
            'Authorization' => 'Bearer ' . $token,
        ]);

        return $this->getClient()->setOption('headers', $headers);
    }

    /**
     * Extract auth token from client
     *
     * @return null|string
     */
    public function getAccessToken()
    {
        $authHeader = $this->getClient()->getOption('headers');

        if (!$authHeader) {
            return null;
        }

        if(!array_key_exists('Authorization', $authHeader)) {
            return null;
        }

        return substr($authHeader['Authorization'], 7);
    }

    /**
     * This should be the Tax Identification Number (TIN) of the taxpayer the intermediary is presenting
     *
     * @param string $onbehalfof
     *
     * @return array
     */
    public function setOnbehalfof($onbehalfof)
    {
        $headers = $this->getClient()->getOption('headers');
        if(!$headers) {
            $headers = [];
        }
        $headers = array_merge($headers, [
            'onbehalfof' => $onbehalfof,
        ]);

        return $this->getClient()->setOption('headers', $headers);
    }

    /**
     * This API is used to authenticate the ERP system associated with a specific taxpayer calling and issue access token which allows ERP system to access those protected APIs.
     * 
     * @param string|null   $onbehalfof     Optional: Used by intermediary system to set (TIN) of the taxpayer the intermediary is presenting
     * @param string        $grantType      Optional: OAuth grant type
     * @param string        $scope          Optional: OAuth scope
     * 
     * @return array
     */
    public function login($onbehalfof = null,  $grantType = 'client_credentials', $scope = 'InvoicingAPI')
    {
        if(!empty($onbehalfof)) {
            $this->setOnbehalfof($onbehalfof);
        }

        $body = [
            'form_params' => [
                'client_id' => $this->getClient()->getClientId(),
                'client_secret' => $this->getClient()->getClientSecret(),
                'grant_type' => $grantType,
                'scope' => $scope,
            ],
        ];

        $response = $this->getClient()->request('POST', $this->getBaseUrl(), $body);

        if (is_array($response) && !array_key_exists('access_token', $response)) {
            throw new Exception('access_token not found!');
        }

        $this->setAccessToken($response['access_token']);

        return $response;
    }
}
