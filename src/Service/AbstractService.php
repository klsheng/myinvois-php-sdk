<?php

/**
 * @copyright Copyright (c) 2024 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

namespace Klsheng\Myinvois\Service;

use Exception;
use Klsheng\Myinvois\MyInvoisClient;

/**
 * Abstract class for service component
 * 
 * @author Sean Kau (kliensheng2020@gmail.com)
 * @since 1.0.0
 */
abstract class AbstractService
{
    /**
     * Base URL
     *
     * @var string
     */
    private $baseUrl = '';

    /**
     * MyInvoisClient object
     * 
     * @var MyInvoisClient
     */
    private $client;

    /**
     * AbstractService constructor.
     *
     * @param MyInvoisClient    $client
     * @param string            $baseUrl
     */
    public function __construct(MyInvoisClient $client, $baseUrl)
    {
        $this->client = $client;
        $this->baseUrl = $baseUrl;
    }

    /**
     * @return string
     */
    protected function getBaseUrl()
    {
        return $this->baseUrl;
    }

    /**
     * @return mixed
     */
    protected function getClient()
    {
        return $this->client;
    }
}
