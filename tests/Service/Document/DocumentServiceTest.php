<?php

/**
 * @copyright Copyright (c) 2024 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

namespace Klsheng\Myinvois\Tests\Service\Document;

use PHPUnit\Framework\TestCase;
use Klsheng\Myinvois\MyInvoisClient;
use Klsheng\Myinvois\Service\Document\DocumentService;

class DocumentServiceTest extends TestCase
{
    /**
     * @covers \Klsheng\Myinvois\Service\AbstractService
     * @covers \Klsheng\Myinvois\Service\Document\DocumentService
     */
    public function testCancelDocument()
    {
        $mockResponse = [
            'uuid' => 'AnyString',
            'status' => 'Cancelled',
        ];

        $mockClient = $this->createMock(MyInvoisClient::class);
        $mockClient
            ->expects($this->once())
            ->method('request')
            ->willReturn($mockResponse);

        $service = new DocumentService($mockClient);
        $response = $service->cancelDocument('123');

        $this->assertEquals($mockResponse, $response);
    }

    /**
     * @covers \Klsheng\Myinvois\Service\AbstractService
     * @covers \Klsheng\Myinvois\Service\Document\DocumentService
     */
    public function testRejectDocument()
    {
        $mockResponse = [
            'uuid' => 'AnyString',
            'status' => 'Rejected',
        ];

        $mockClient = $this->createMock(MyInvoisClient::class);
        $mockClient
            ->expects($this->once())
            ->method('request')
            ->willReturn($mockResponse);

        $service = new DocumentService($mockClient);
        $response = $service->rejectDocument('123');

        $this->assertEquals($mockResponse, $response);
    }

    /**
     * @covers \Klsheng\Myinvois\Service\AbstractService
     * @covers \Klsheng\Myinvois\Service\Document\DocumentService
     */
    public function testGetDocument()
    {
        $mockResponse = [
            'uuid' => 'AnyString',
            'submissionUUID' => 'AnyString',
            'longID' => 'AnyString',
        ];

        $mockClient = $this->createMock(MyInvoisClient::class);
        $mockClient
            ->expects($this->once())
            ->method('request')
            ->willReturn($mockResponse);

        $service = new DocumentService($mockClient);
        $response = $service->getDocument('123');

        $this->assertEquals($mockResponse, $response);
    }

    /**
     * @covers \Klsheng\Myinvois\Service\AbstractService
     * @covers \Klsheng\Myinvois\Service\Document\DocumentService
     */
    public function testGetDocumentDetail()
    {
        $mockResponse = [
            'uuid' => 'AnyString',
            'submissionUUID' => 'AnyString',
            'longID' => 'AnyString',
        ];

        $mockClient = $this->createMock(MyInvoisClient::class);
        $mockClient
            ->expects($this->once())
            ->method('request')
            ->willReturn($mockResponse);

        $service = new DocumentService($mockClient);
        $response = $service->getDocumentDetail('123');

        $this->assertEquals($mockResponse, $response);
    }

    /**
     * @covers \Klsheng\Myinvois\Service\AbstractService
     * @covers \Klsheng\Myinvois\Service\Document\DocumentService
     */
    public function testGetRecentDocuments()
    {
        $mockResponse = [
            'result' => [
                [
                    'uuid' => 'AnyString',
                    'submissionUUID' => 'AnyString',
                    'longID' => 'AnyString',
                ],
                [
                    'uuid' => 'AnyString',
                    'submissionUUID' => 'AnyString',
                    'longID' => 'AnyString',
                ],
            ],
            'metadata' => [
                'totalPages' => 1,
                'totalCount' => 1,
            ]
        ];

        $mockClient = $this->createMock(MyInvoisClient::class);
        $mockClient
            ->expects($this->once())
            ->method('request')
            ->willReturn($mockResponse);

        $service = new DocumentService($mockClient);
        $response = $service->getRecentDocuments();

        $this->assertEquals($mockResponse, $response);
    }

    /**
     * @covers \Klsheng\Myinvois\Service\AbstractService
     * @covers \Klsheng\Myinvois\Service\Document\DocumentService
     */
    public function testSearchDocuments()
    {
        $mockResponse = [
            'result' => [
                [
                    'uuid' => 'AnyString',
                    'submissionUUID' => 'AnyString',
                    'longID' => 'AnyString',
                ],
                [
                    'uuid' => 'AnyString',
                    'submissionUUID' => 'AnyString',
                    'longID' => 'AnyString',
                ],
            ],
        ];

        $mockClient = $this->createMock(MyInvoisClient::class);
        $mockClient
            ->expects($this->once())
            ->method('request')
            ->willReturn($mockResponse);

        $service = new DocumentService($mockClient);
        $response = $service->searchDocuments();

        $this->assertEquals($mockResponse, $response);
    }
}
