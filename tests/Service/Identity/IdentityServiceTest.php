<?php

/**
 * @copyright Copyright (c) 2024 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

namespace Klsheng\Myinvois\Tests\Service\Identity;

use Exception;
use PHPUnit\Framework\TestCase;
use Klsheng\Myinvois\MyInvoisClient;
use Klsheng\Myinvois\Service\Identity\IdentityService;

class IdentityServiceTest extends TestCase
{
    /**
     * @covers \Klsheng\Myinvois\MyInvoisClient
     * @covers \Klsheng\Myinvois\Service\AbstractService
     * @covers \Klsheng\Myinvois\Service\Identity\IdentityService
     */
    public function testSetAccessToken()
    {
        $token = 'Token';
        $authHeader = [
            'Authorization' => 'Bearer ' . $token,
        ];

        $clientId = 'your_client_id';
        $clientSecret = 'your_client_secret';
        $prodMode = false;
        $client = new MyInvoisClient($clientId, $clientSecret, $prodMode);

        $service = new IdentityService($client, $prodMode);

        $result = $service->setAccessToken($token);
        $this->assertEquals($authHeader, $result);
    }

    /**
     * @covers \Klsheng\Myinvois\Service\AbstractService
     * @covers \Klsheng\Myinvois\Service\Identity\IdentityService
     */
    public function testGetAccessToken()
    {
        $token = 'Token';
        $nonAuthHeader = [
            'Accept-Language' => 'en-US',
        ];
        $authHeader = [
            'Authorization' => 'Bearer ' . $token,
        ];

        $prodMode = false;
        $mockClient = $this->createMock(MyInvoisClient::class);
        $mockClient
            ->expects($this->any())
            ->method('getOption')
            ->with(
                'headers'
            )
            ->willReturnOnConsecutiveCalls(
                null, 
                [], 
                $authHeader, 
                $nonAuthHeader
            );

        $service = new IdentityService($mockClient, $prodMode);

        $result = $service->getAccessToken($token);
        $this->assertEquals(null, $result);

        $result = $service->getAccessToken($token);
        $this->assertEquals(null, $result);

        $result = $service->getAccessToken($token);
        $this->assertEquals($token, $result);

        $result = $service->getAccessToken($token);
        $this->assertEquals(null, $result);
    }

    /**
     * @covers \Klsheng\Myinvois\MyInvoisClient
     * @covers \Klsheng\Myinvois\Service\AbstractService
     * @covers \Klsheng\Myinvois\Service\Identity\IdentityService
     */
    public function testSetOnbehalfOf()
    {
        $onbehalfof = 'AnyString';
        $onbehalfofHeader = [
            'onbehalfof' => $onbehalfof,
        ];

        $clientId = 'your_client_id';
        $clientSecret = 'your_client_secret';
        $prodMode = false;
        $client = new MyInvoisClient($clientId, $clientSecret, $prodMode);

        $service = new IdentityService($client, $prodMode);

        $result = $service->setOnbehalfof($onbehalfof);
        $this->assertEquals($onbehalfofHeader, $result);
    }

    /**
     * @covers \Klsheng\Myinvois\Service\AbstractService
     * @covers \Klsheng\Myinvois\Service\Identity\IdentityService
     */
    public function testLoginException()
    {
        $prodMode = false;
        $mockClient = $this->createMock(MyInvoisClient::class);
        $mockClient
            ->expects($this->once())
            ->method('request')
            ->with(
                'POST',
                $this->anything(),
                $this->anything()
            )
            ->willThrowException(new Exception());

        $service = new IdentityService($mockClient, $prodMode);

        $this->expectException(Exception::class);
        $service->login();
    }

    /**
     * @covers \Klsheng\Myinvois\Service\AbstractService
     * @covers \Klsheng\Myinvois\Service\Identity\IdentityService
     */
    public function testLoginOnBehalfOfException()
    {
        $onbehalfof = 'AnyString';
        $prodMode = false;
        $mockClient = $this->createMock(MyInvoisClient::class);
        $mockClient
            ->expects($this->once())
            ->method('getOption');

        $mockClient
            ->expects($this->once())
            ->method('setOption');

        $mockClient
            ->expects($this->once())
            ->method('request')
            ->with(
                'POST',
                $this->anything(),
                $this->anything()
            )
            ->willThrowException(new Exception());

        $service = new IdentityService($mockClient, $prodMode);

        $this->expectException(Exception::class);
        $service->login($onbehalfof);
    }

    /**
     * @covers \Klsheng\Myinvois\Service\AbstractService
     * @covers \Klsheng\Myinvois\Service\Identity\IdentityService
     */
    public function testLoginErrorResponseException()
    {
        $prodMode = false;
        $mockClient = $this->createMock(MyInvoisClient::class);
        $mockClient
            ->expects($this->once())
            ->method('request')
            ->with(
                'POST',
                $this->anything(),
                $this->anything()
            )
            ->willReturn([
                'error' => 'invalid_client',
            ]);

        $service = new IdentityService($mockClient, $prodMode);

        $this->expectException(Exception::class);
        $service->login();
    }

    /**
     * @covers \Klsheng\Myinvois\Service\AbstractService
     * @covers \Klsheng\Myinvois\Service\Identity\IdentityService
     */
    public function testLoginSuccess()
    {
        $token = 'Token';
        $loginResponse = [
            'access_token' => $token,
            'expires_in' => '3600',
            'token_type' => 'Bearer',
            'scope' => 'InvoicingAPI',
        ];

        $prodMode = false;
        $mockClient = $this->createMock(MyInvoisClient::class);
        $mockClient
            ->expects($this->once())
            ->method('getOption');

        $mockClient
            ->expects($this->once())
            ->method('setOption');

        $mockClient
            ->expects($this->any())
            ->method('request')
            ->with(
                'POST',
                $this->anything(),
                $this->anything()
            )
            ->willReturn($loginResponse);

        $service = new IdentityService($mockClient, $prodMode);
        
        $result = $service->login();
        $this->assertEquals($loginResponse, $result);
    }

    /**
     * @covers \Klsheng\Myinvois\Service\AbstractService
     * @covers \Klsheng\Myinvois\Service\Identity\IdentityService
     */
    public function testLoginOnbehalfOfSuccess()
    {
        $token = 'Token';
        $loginResponse = [
            'access_token' => $token,
            'expires_in' => '3600',
            'token_type' => 'Bearer',
            'scope' => 'InvoicingAPI',
        ];

        $onbehalfof = 'AnyString';
        $prodMode = false;
        $mockClient = $this->createMock(MyInvoisClient::class);
        $mockClient
            ->expects($this->exactly(2))
            ->method('getOption');

        $mockClient
            ->expects($this->exactly(2))
            ->method('setOption');

        $mockClient
            ->expects($this->any())
            ->method('request')
            ->with(
                'POST',
                $this->anything(),
                $this->anything()
            )
            ->willReturn($loginResponse);

        $service = new IdentityService($mockClient, $prodMode);
        
        $result = $service->login($onbehalfof);
        $this->assertEquals($loginResponse, $result);
    }
}
