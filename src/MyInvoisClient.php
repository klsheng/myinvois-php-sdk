<?php

namespace klsheng\myinvois;

use Exception;
use BadMethodCallException;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\BadResponseException;
use Guzzle\Http\Message\Response;
use klsheng\myinvois\service\identity\IdentityService;
use klsheng\myinvois\service\document\DocumentService;
use klsheng\myinvois\service\document\DocumentTypeService;
use klsheng\myinvois\service\document\DocumentSubmissionService;
use klsheng\myinvois\service\notification\NotificationService;
use klsheng\myinvois\service\taxpayer\TaxPayerService;

class MyInvoisClient
{
    /**
     * Client Id for MyInvois API
     *
     * @var string
     */
    private $clientId;

    /**
     * Client Secret for MyInvois API
     *
     * @var string
     */
    private $clientSecret;

    /**
     * Production mode flag
     *
     * @var boolean
     */
    private $prodMode;

    /**
     * GuzzleClient object
     *
     * @var GuzzleClient
     */
    private $guzzleClient;

    /**
     * Options options control various aspects of a request including, headers, query string parameters, timeout settings, the body of a request
     *
     * @var array
     */
    private $options = [];

    /**
     * IdentityService object
     *
     * @var \klsheng\myinvois\identity\IdentityService
     */
    private $identityService;

    /**
     * DocumentService object
     *
     * @var \klsheng\myinvois\document\DocumentService
     */
    private $documentService;

    /**
     * DocumentTypeService object
     *
     * @var \klsheng\myinvois\document\DocumentTypeService
     */
    private $documentTypeService;

    /**
     * DocumentSubmissionService object
     *
     * @var \klsheng\myinvois\document\DocumentSubmissionService
     */
    private $documentSubmissionService;

    /**
     * NotificationService object
     *
     * @var \klsheng\myinvois\notification\NotificationService
     */
    private $notificationService;

    /**
     * TaxPayerService object
     *
     * @var \klsheng\myinvois\taxpayer\TaxPayerService
     */
    private $taxPayerService;

    /**
     * Client constructor.
     *
     * @param string            $clientId
     * @param string            $clientSecret
     * @param string            $clientSecret
     * @param GuzzleClient|null $guzzle
     */
    public function __construct($clientId, $clientSecret, $prodMode = false, GuzzleClient $guzzleClient = null)
    {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->prodMode = $prodMode;
        $this->setHttpClient($guzzleClient ?: new GuzzleClient());
    }

    /**
     * @param string $clientId
     *
     * @return void
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;
    }

    /**
     * @return string
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * @param string $clientSecret
     *
     * @return void
     */
    public function setClientSecret($clientSecret)
    {
        $this->clientSecret = $clientSecret;
    }

    /**
     * @return string
     */
    public function getClientSecret()
    {
        return $this->clientSecret;
    }

    /**
     * @param GuzzleClient $client
     *
     * @return void
     */
    public function setHttpClient(GuzzleClient $client)
    {
        $this->guzzleClient = $client;
    }

    /**
     * @return mixed
     */
    public function getHttpClient()
    {
        return $this->guzzleClient;
    }

    /**
     * Set options for HttpClient.
     *
     * @param array $options
     *
     * @return array
     */
    public function setOptions(array $options): array
    {
        return $this->options = $options;
    }

    /**
     * Set individual option.
     *
     * @param string $key
     * @param mixed $value
     *
     * @return mixed
     */
    public function setOption($key, $value)
    {
        return $this->options[$key] = $value;
    }

    /**
     * @return array
     */
    public function getOptions(): array
    {
        return $this->options;
    }

     /**
     * @param $key
     *
     * @return bool|mixed
     * @return void
     */
    public function getOption($key)
    {
        if (isset($this->options[$key])) {
            return $this->options[$key];
        }

        return false;
    }

    /**
     * Call method
     *
     * @param $name
     * @param $args
     *
     * @return mixed
     */
    public function __call($name, $args)
    {
        switch ($name) {
            case 'login':
            case 'setAccessToken':
            case 'getAccessToken':
            case 'setOnbehalfof':
                return call_user_func_array([$this->getIdentityService(), $name], $args);
            case 'getAllDocumentTypes':
            case 'getDocumentType':
            case 'getDocumentTypeVersion':
                return call_user_func_array([$this->getDocumentTypeService(), $name], $args);
            case 'getDocument':
            case 'getDocumentDetail':
            case 'getRecentDocuments':
            case 'searchDocuments':
            case 'cancelDocument':
            case 'rejectDocument':
                return call_user_func_array([$this->getDocumentService(), $name], $args);
            case 'getSubmission':
            case 'submitDocument':
                return call_user_func_array([$this->getDocumentSubmissionService(), $name], $args);
            case 'getNotifications':
                return call_user_func_array([$this->getNotificationService(), $name], $args);
            case 'validateTaxPayerTin':
                return call_user_func_array([$this->getTaxPayerService(), $name], $args);
            default:
                throw new BadMethodCallException($name . ' does not exist!');
        }
    }

    /**
     * @return \klsheng\myinvois\identity\IdentityService
     */
    private function getIdentityService()
    {
        if ($this->identityService) {
            return $this->identityService;
        }

        $this->identityService = new IdentityService($this, $this->prodMode);

        return $this->identityService;
    }

    /**
     * @return \klsheng\myinvois\document\DocumentService
     */
    private function getDocumentService()
    {
        if ($this->documentService) {
            return $this->documentService;
        }

        $this->documentService = new DocumentService($this, $this->prodMode);

        return $this->documentService;
    }

    /**
     * @return \klsheng\myinvois\document\DocumentTypeService
     */
    private function getDocumentTypeService()
    {
        if ($this->documentTypeService) {
            return $this->documentTypeService;
        }

        $this->documentTypeService = new DocumentTypeService($this, $this->prodMode);

        return $this->documentTypeService;
    }

    /**
     * @return \klsheng\myinvois\document\DocumentSubmissionService
     */
    private function getDocumentSubmissionService()
    {
        if ($this->documentSubmissionService) {
            return $this->documentSubmissionService;
        }

        $this->documentSubmissionService = new DocumentSubmissionService($this, $this->prodMode);

        return $this->documentSubmissionService;
    }

    /**
     * @return \klsheng\myinvois\notification\NotificationService
     */
    private function getNotificationService()
    {
        if ($this->notificationService) {
            return $this->notificationService;
        }

        $this->notificationService = new NotificationService($this, $this->prodMode);

        return $this->notificationService;
    }

    /**
     * @return \klsheng\myinvois\taxpayer\TaxPayerService
     */
    private function getTaxPayerService()
    {
        if ($this->taxPayerService) {
            return $this->taxPayerService;
        }

        $this->taxPayerService = new TaxPayerService($this, $this->prodMode);

        return $this->taxPayerService;
    }

    /**
     * Make a request through Guzzle.
     *
     * @param $method
     * @param $url
     * @param array $options
     *
     * @throws PHP Exception
     *
     * @return mixed
     */
    public function request($method, $url, array $options = [])
    {
        $body = '';
        $options = array_merge($this->getOptions(), $options);

        try {
            $response = $this->getHttpClient()->request($method, $url, $options);
            $body = json_decode($response->getBody(), true, JSON_FORCE_OBJECT);
        } catch (BadResponseException $exception) {
            $this->handleError($exception);
        }

        return $body;
    }

    /**
     *  Throw errors.
     *
     * @param BadResponseException $exception
     *
     * @throws PHP Exception
     *
     */
    protected function handleError(Exception $e)
    {
        $body = $e->getResponse()->getBody();
        $errorCode = $e->getResponse()->getStatusCode();

        throw new Exception($body, $errorCode);
    }
}
