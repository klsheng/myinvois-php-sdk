<?php

namespace Klsheng\Myinvois\Service;

use Exception;
use Klsheng\Myinvois\MyInvoisClient;

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
