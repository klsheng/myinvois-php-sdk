<?php

/**
 * @copyright Copyright (c) 2024 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

namespace Klsheng\Myinvois\Tests\Service\Notification;

use PHPUnit\Framework\TestCase;
use Klsheng\Myinvois\MyInvoisClient;
use Klsheng\Myinvois\Service\Notification\NotificationService;

class NotificationServiceTest extends TestCase
{
    /**
     * @covers \Klsheng\Myinvois\Service\AbstractService
     * @covers \Klsheng\Myinvois\Service\Notification\NotificationService
     */
    public function testGetNotifications()
    {
        $mockNotificationResponse = [
            'result' => [
                [
                    'notificationId' => '1',
                    'receivedDateTime' => '2024-01-01T00:00:00Z',
                    'typeId' => '1',
                    'language' => 'en',
                    'status' => 'delivered',
                    'finalMessage' => 'Notification message',
                    'deliveryAttempts' => [
                        [
                            'attemptDateTime' => '2024-01-01T00:00:00Z',
                            'status' => 'delivered',
                            'statusDetails' => 'Cannot connect to system URL supplied',
                        ]
                    ],
                ],
            ],
            'metadata' => [
                'totalPages' => 1,
                'totalCount' => 1,
            ],
        ];

        $prodMode = false;
        $mockClient = $this->createMock(MyInvoisClient::class);
        $mockClient
            ->expects($this->once())
            ->method('request')
            ->with(
                'GET',
                $this->anything()
            )
            ->willReturn($mockNotificationResponse);

        $service = new NotificationService($mockClient, $prodMode);

        $result = $service->getNotifications();

        $this->assertEquals($mockNotificationResponse, $result);
    }
}
