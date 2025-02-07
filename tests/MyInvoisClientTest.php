<?php

/**
 * @copyright Copyright (c) 2024 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

namespace Klsheng\Myinvois\Tests;

use PHPUnit\Framework\TestCase;
use Klsheng\Myinvois\MyInvoisClient;
use GuzzleHttp\Client as GuzzleClient;

class MyInvoisClientTest extends TestCase
{
    /**
     * @covers \Klsheng\Myinvois\MyInvoisClient
     */
    public function testConstructor()
    {
        $clientId = 'your_client_id';
        $clientSecret = 'your_client_secret';
        $prodMode = false;
        $httpClient = new GuzzleClient();

        $client = new MyInvoisClient($clientId, $clientSecret, $prodMode, $httpClient);

        $this->assertEquals($clientId, $client->getClientId());
        $this->assertEquals($clientSecret, $client->getClientSecret());
        $this->assertEquals($httpClient, $client->getHttpClient());
    }

    /**
     * @covers \Klsheng\Myinvois\MyInvoisClient
     */
    public function testGenerateDocumentQrCodeUrl()
    {
        $clientId = 'your_client_id';
        $clientSecret = 'your_client_secret';
        $prodMode = false;

        $client = new MyInvoisClient($clientId, $clientSecret, $prodMode);

        $id = 'document_id';
        $longId = 'document_long_id';

        $expectedUrl = 'https://preprod.myinvois.hasil.gov.my/' . $id . '/share/' . $longId;
        $actualUrl = $client->generateDocumentQrCodeUrl($id, $longId);

        $this->assertEquals($expectedUrl, $actualUrl);
    }
}