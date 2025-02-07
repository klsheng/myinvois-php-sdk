<?php

/**
 * @copyright Copyright (c) 2024 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

namespace Klsheng\Myinvois\Tests\Service\Taxpayer;

use Exception;
use PHPUnit\Framework\TestCase;
use Klsheng\Myinvois\MyInvoisClient;
use Klsheng\Myinvois\Service\Taxpayer\TaxPayerService;

class TaxPayerServiceTest extends TestCase
{
    /**
     * @covers \Klsheng\Myinvois\Service\AbstractService
     * @covers \Klsheng\Myinvois\Service\Taxpayer\TaxPayerService
     */
    public function testValidateTaxPayerTinNotFound()
    {
        $mockNotFound = 'NotFound';

        $prodMode = false;
        $mockClient = $this->createMock(MyInvoisClient::class);
        $mockClient
            ->expects($this->once())
            ->method('request')
            ->with(
                'GET',
                'https://preprod-api.myinvois.hasil.gov.my/api/v1.0/taxpayer/validate/' . $mockNotFound . '?idType=' . $mockNotFound . '&idValue=' . $mockNotFound
            )
            ->willThrowException(new Exception());

        $service = new TaxPayerService($mockClient, $prodMode);

        $this->expectException(Exception::class);
        $service->validateTaxPayerTin($mockNotFound, $mockNotFound, $mockNotFound);
    }

    /**
     * @covers \Klsheng\Myinvois\Service\AbstractService
     * @covers \Klsheng\Myinvois\Service\Taxpayer\TaxPayerService
     */
    public function testValidateTaxPayerTinFound()
    {
        $mockFound = 'Found';

        $prodMode = false;
        $mockClient = $this->createMock(MyInvoisClient::class);
        $mockClient
            ->expects($this->once())
            ->method('request')
            ->with(
                'GET',
                'https://preprod-api.myinvois.hasil.gov.my/api/v1.0/taxpayer/validate/' . $mockFound . '?idType=' . $mockFound . '&idValue=' . $mockFound
            )
            ->willReturn('');

        $service = new TaxPayerService($mockClient, $prodMode);

        $result = $service->validateTaxPayerTin($mockFound, $mockFound, $mockFound);
        $this->assertEquals('', $result);
    }

    /**
     * @covers \Klsheng\Myinvois\Service\AbstractService
     * @covers \Klsheng\Myinvois\Service\Taxpayer\TaxPayerService
     */
    public function testSearchTaxPayerTinNotFound()
    {
        $mockNotFound = 'NotFound';

        $prodMode = false;
        $mockClient = $this->createMock(MyInvoisClient::class);
        $mockClient
            ->expects($this->once())
            ->method('request')
            ->with(
                'GET',
                'https://preprod-api.myinvois.hasil.gov.my/api/v1.0/taxpayer/search/tin?idType=' . $mockNotFound . '&idValue=' . $mockNotFound . '&taxpayerName=' . $mockNotFound
            )
            ->willThrowException(new Exception());

        $service = new TaxPayerService($mockClient, $prodMode);

        $this->expectException(Exception::class);
        $service->searchTaxPayerTin($mockNotFound, $mockNotFound, $mockNotFound);
    }

    /**
     * @covers \Klsheng\Myinvois\Service\AbstractService
     * @covers \Klsheng\Myinvois\Service\Taxpayer\TaxPayerService
     */
    public function testSearchTaxPayerTinFound()
    {
        $mockFound = 'Found';
        $mockTIN = 'TIN';

        $prodMode = false;
        $mockClient = $this->createMock(MyInvoisClient::class);
        $mockClient
            ->expects($this->once())
            ->method('request')
            ->with(
                'GET',
                'https://preprod-api.myinvois.hasil.gov.my/api/v1.0/taxpayer/search/tin?idType=' . $mockFound . '&idValue=' . $mockFound . '&taxpayerName=' . $mockFound,
            )
            ->willReturn($mockTIN);

        $service = new TaxPayerService($mockClient, $prodMode);

        $result = $service->searchTaxPayerTin($mockFound, $mockFound, $mockFound);
        $this->assertEquals($mockTIN, $result);
    }
}
