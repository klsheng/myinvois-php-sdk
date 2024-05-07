<?php
namespace klsheng\myinvois\service\identity;

use Exception;
use klsheng\myinvois\MyInvoisClient;
use klsheng\myinvois\service\BaseService;

class IdentityService extends BaseService
{
    public const SANDBOX_IDENTITY_BASE_URL = 'https://preprod-api.myinvois.hasil.gov.my/connect/token';
    public const PROD_IDENTITY_BASE_URL = ''; // TBD

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
        return $this->getClient()->setOption('headers', [
            'Authorization' => 'Bearer ' . $token,
        ]);
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

        return substr(reset($authHeader), 7);
    }

    /**
     * This API is used to authenticate the ERP system associated with a specific taxpayer calling and issue access token which allows ERP system to access those protected APIs.
     * 
     * @param bool      $intermediary   Optional: Used to differential between taxpayer or intermediary system
     * @param string    $grantType      Optional: OAuth grant type
     * @param string    $scope          Optional: OAuth scope
     * 
     * @return array
     */
    public function login($intermediary = false,  $grantType = 'client_credentials', $scope = 'InvoicingAPI')
    {
        // TODO
        // Switch intermediary URL in the future after supported by MyInvois API gateway

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
