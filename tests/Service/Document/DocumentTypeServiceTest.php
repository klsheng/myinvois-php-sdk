<?php

/**
 * @copyright Copyright (c) 2024 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

namespace Klsheng\Myinvois\Tests\Service\Document;

use PHPUnit\Framework\TestCase;
use Klsheng\Myinvois\MyInvoisClient;
use Klsheng\Myinvois\Service\Document\DocumentTypeService;

class DocumentTypeServiceTest extends TestCase
{
    /**
     * @covers \Klsheng\Myinvois\Service\AbstractService
     * @covers \Klsheng\Myinvois\Service\Document\DocumentTypeService
     */
    public function testGetAllDocumentTypes()
    {
        $mockResponse = [
            'data' => 'document types',
        ];

        $mockClient = $this->createMock(MyInvoisClient::class);
        $mockClient
            ->expects($this->once())
            ->method('request')
            ->willReturn($mockResponse);

        $service = new DocumentTypeService($mockClient);
        $response = $service->getAllDocumentTypes();

        $this->assertEquals($mockResponse, $response);
    }

    /**
     * @covers \Klsheng\Myinvois\Service\AbstractService
     * @covers \Klsheng\Myinvois\Service\Document\DocumentTypeService
     */
    public function testGetDocumentType()
    {
        $mockResponse = [
            'data' => 'document type',
        ];

        $mockClient = $this->createMock(MyInvoisClient::class);
        $mockClient
            ->expects($this->once())
            ->method('request')
            ->willReturn($mockResponse);

        $service = new DocumentTypeService($mockClient);
        $response = $service->getDocumentType('123');

        $this->assertEquals($mockResponse, $response);
    }

    /**
     * @covers \Klsheng\Myinvois\Service\AbstractService
     * @covers \Klsheng\Myinvois\Service\Document\DocumentTypeService
     */
    public function testGetDocumentTypeVersion()
    {
        $mockResponse = [
            'invoiceTypeCode' => 4,
            'name' => '1.0',
            'description' => 'Credit note version 1.0',
        ];

        $mockClient = $this->createMock(MyInvoisClient::class);
        $mockClient
            ->expects($this->once())
            ->method('request')
            ->willReturn($mockResponse);

        $service = new DocumentTypeService($mockClient);
        $response = $service->getDocumentTypeVersion('123', '123');

        $this->assertEquals($mockResponse, $response);
    }
}
