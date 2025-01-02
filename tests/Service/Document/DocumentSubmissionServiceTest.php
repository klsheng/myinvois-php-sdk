<?php

/**
 * @copyright Copyright (c) 2024 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

namespace Klsheng\Myinvois\Tests\Service\Document;

use PHPUnit\Framework\TestCase;
use Klsheng\Myinvois\MyInvoisClient;
use Klsheng\Myinvois\Service\Document\DocumentSubmissionService;

class DocumentSubmissionServiceTest extends TestCase
{
    /**
     * @covers \Klsheng\Myinvois\Service\AbstractService
     * @covers \Klsheng\Myinvois\Service\Document\DocumentSubmissionService
     */
    public function testGetSubmission()
    {
        $mockResponse = [
            'data' => 'submission',
        ];

        $mockClient = $this->createMock(MyInvoisClient::class);
        $mockClient
            ->expects($this->once())
            ->method('request')
            ->willReturn($mockResponse);

        $service = new DocumentSubmissionService($mockClient);
        $response = $service->getSubmission('123');

        $this->assertEquals($mockResponse, $response);
    }

    /**
     * @covers \Klsheng\Myinvois\Service\AbstractService
     * @covers \Klsheng\Myinvois\Service\Document\DocumentSubmissionService
     */
    public function testSubmitDocument()
    {
        $mockDocuments = [
            [
                'format' => 'xml',
                'documentHash' => 'AnyString',
                'codeNumber' => 'AnyString',
                'document' => 'AnyString',
            ],
            [
                'format' => 'json',
                'documentHash' => 'AnyString',
                'codeNumber' => 'AnyString',
                'document' => 'AnyString',
            ],
        ];

        $mockResponse = [
            'submissionUid' => 'AnyString',
            'acceptedDocuments' => [
                'uuid' => 'AnyString',
                'invoiceCodeNumber' => 'AnyString',
            ],
            'rejectedDocuments' => [],
        ];

        $mockClient = $this->createMock(MyInvoisClient::class);
        $mockClient
            ->expects($this->once())
            ->method('request')
            ->willReturn($mockResponse);

        $service = new DocumentSubmissionService($mockClient);
        $response = $service->submitDocument($mockDocuments);

        $this->assertEquals($mockResponse, $response);
    }
}
