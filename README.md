# MyInvois SDK for PHP
[![Latest Version on Packagist](https://img.shields.io/packagist/v/klsheng/myinvois-php-sdk.svg?style=flat-square)](https://packagist.org/packages/klsheng/myinvois-php-sdk)
[![Total Downloads](https://img.shields.io/packagist/dt/klsheng/myinvois-php-sdk.svg?style=flat-square)](https://packagist.org/packages/klsheng/myinvois-php-sdk)
[![License](https://poser.pugx.org/klsheng/myinvois-php-sdk/license?format=flat-square)](https://packagist.org/packages/klsheng/myinvois-php-sdk)

<a href="https://www.buymeacoffee.com/klsheng" target="_blank"><img src="https://cdn.buymeacoffee.com/buttons/v2/default-yellow.png" alt="Buy Me A Coffee" style="height: 40px !important;width: 180px !important;" ></a>

An object-oriented PHP library to create custom UBL v2.1 format supported by MyInvois System.

This SDK initially require [UBL-Invoice](https://github.com/num-num/ubl-invoice) package. However, MyInvois System doesn't fully support UBL v2.1 format, so UBL package re-create based on original author to support MyInvois System.

## TODO

- [x] Login as Taxpayer System
- [x] Login as Intermediary System
- [x] Get All Document Types
- [x] Get Document Type
- [x] Get Document Type Version
- [x] Get Notifications
- [x] Validate Taxpayer's TIN
- [x] Search Taxpayer's TIN
- [x] Get Taxpayer From QR Code
- [x] Submit Documents (Invoice)
- [x] Submit Documents (CreditNote)
- [x] Submit Documents (DebitNote)
- [x] Submit Documents (RefundNote)
- [x] Submit Documents (Self-Billed Invoice)
- [x] Submit Documents (Self-Billed Credit Note)
- [x] Submit Documents (Self-Billed Debit Note)
- [x] Submit Documents (Self-Billed Refund Note)
- [x] Cancel Document
- [x] Reject Document
- [x] Get Recent Documents
- [x] Get Submission
- [x] Get Document
- [x] Get Document Details
- [x] Search Documents
- [x] Digital Signature
- [x] Get Document's QR Code URL

## Installation and usage

This package requires PHP 7.4 or higher. 

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

To install, either run

```zsh
$ composer require klsheng/myinvois-php-sdk "*"
```
or add
```zsh
"klsheng/myinvois-php-sdk": "*"
```
to the ```require``` section of your `composer.json` file.

## Dependencies

This package require the following extensions in order to work properly:

- [`curl`](https://www.php.net/manual/en/book.curl.php)
- [`json`](https://www.php.net/manual/en/book.json.php)
- [`guzzlehttp/guzzle`](https://github.com/guzzle/guzzle)
- [`sabre/xml`](https://github.com/sabre-io/xml)
- [`psr/http-client`](https://github.com/php-fig/http-client)
- [`openssl`](https://www.php.net/manual/en/book.openssl.php)

If you use Composer, these dependencies should be handled automatically. If you install manually, you'll want to make sure that these extensions are available.

It is recommended to install and use composer in PHP development when doesn't use any PHP framework (E.g: Laravel, Yii, etc)

## To use MyInvois PHP SDK without PHP framework environment
You may refer to README at [PurePHPExample](https://github.com/klsheng/myinvois-php-sdk/blob/main/src/Example/PurePHP/README.md).

## Usage
You may refer example to create UBL v2.1 document supported by MyInvois System at [CreateDocumentExample](https://github.com/klsheng/myinvois-php-sdk/blob/main/src/Example/Ubl/CreateDocumentExample.php).

Sample usage:

#### Login as Taxpayer System
```php
use Klsheng\Myinvois\MyInvoisClient;

$prodMode = false;
$client = new MyInvoisClient('client_id', 'client_secret', $prodMode);

$client->login();
$access_token = $client->getAccessToken();
// Store $access_token somewhere to re-use it again within 1hour

// OR
$client->setAccessToken('access_token');
```

#### Login as Intermediary System
```php
use Klsheng\Myinvois\MyInvoisClient;

$prodMode = false;
$client = new MyInvoisClient('client_id', 'client_secret', $prodMode);

$client->login($onbehalfof);
$access_token = $client->getAccessToken();
// Store $access_token somewhere to re-use it again within 1hour

// OR
$client->setAccessToken('access_token');
$client->setOnbehalfof($onbehalfof);
```

#### Get All Document Types
```php
$response = $client->getAllDocumentTypes();
```

#### Get Document Type
```php
$response = $client->getDocumentType($id);
```

#### Get Document Type Version
```php
$response = $client->getDocumentTypeVersion($id, $versionId);
```

#### Get Notifications
```php
$response = $client->getNotifications();
// OR
$dateFrom = new \DateTime('2015-02-13T14:20:10Z'); 
$dateTo = '2015-02-13T14:20:10Z';
$type = '2';
$language = 'en';
$status = 'delivered';
$pageNo = 3;
$pageSize = 20;

$response = $client->getNotifications($dateFrom, $dateTo, $type, $language, $status, $pageNo, $pageSize);
```

#### Validate Taxpayer's TIN
```php
$tin = 'C00000000000';
$idType = 'NRIC';
$idValue = '770625015324';

$response = $client->validateTaxPayerTin($tin, $idType, $idValue);
```

#### Search Taxpayer's TIN
```php
$taxPayerName = 'AXXX_XXXX SMART';
// OR
// $taxPayerName = 'AXXX_XXXX+SMART';
// OR
// $taxPayerName = '';
$idType = 'NRIC';
$idValue = '770625015324';

$response = $client->searchTaxPayerTin($taxPayerName, $idType, $idValue);
```

#### Get Taxpayer From QR Code
```php
$qrCodeText = '4e1bc907-25b7-45b1-9620-2d671a6f9cae';

$response = $client->getTaxPayerFromQrcode($qrCodeText);
```

#### Submit JSON document
```php
use Klsheng\Myinvois\Helper\MyInvoisHelper;
use Klsheng\Myinvois\Example\Ubl\CreateDocumentExample;
use Klsheng\Myinvois\Ubl\Constant\InvoiceTypeCodes;

$id = 'INV20240418105410';
$supplier = [
    'TIN' => 'C00000000000',
    'BRN' => '0000000-T',
];
$customer = [
    'TIN' => 'C00000000000',
    'BRN' => '0000000-T',
];
$delivery = [
    'TIN' => 'C00000000000',
    'BRN' => '0000000-T',
];

// Example contains hardcoded test data, you may need to modify it yourself
$example = new CreateDocumentExample();
$invoice = $example->createJsonDocument(InvoiceTypeCodes::INVOICE, $id, $supplier, $customer, $delivery, true, '/path/to/eInvoice.crt', '/path/to/eInvoice.key');

// If you are using p12 or pfx file, you may use following code to generate document
/*
$invoice = $example->createJsonDocument(InvoiceTypeCodes::INVOICE, $id, $supplier, $customer, $delivery, true, '/path/to/eInvoice.p12', null, 'passphrase');
*/

// In case there is DS326 error, you may use following code to re-arrange issuer key sequences
// Default sequence -> ['CN', 'E', 'OU', 'O', 'C']
/*
$invoice = $example->createJsonDocument(InvoiceTypeCodes::INVOICE, $id, $supplier, $customer, $delivery, true, '/path/to/eInvoice.p12', null, 'passphrase', ['C', 'O', 'OU', 'E', 'CN']);
*/

$documents = [];
$document = MyInvoisHelper::getSubmitDocument($id, $invoice);
$documents[] = $document;

$response = $client->submitDocument($documents);
```

#### Submit XML document
```php
use Klsheng\Myinvois\Helper\MyInvoisHelper;
use Klsheng\Myinvois\Example\Ubl\CreateDocumentExample;
use Klsheng\Myinvois\Ubl\Constant\InvoiceTypeCodes;

$id = 'INV20240418105410';
$supplier = [
    'TIN' => 'C00000000000',
    'BRN' => '0000000-T',
];
$customer = [
    'TIN' => 'C00000000000',
    'BRN' => '0000000-T',
];
$delivery = [
    'TIN' => 'C00000000000',
    'BRN' => '0000000-T',
];

// Example contains hardcoded test data, you may need to modify it yourself
$example = new CreateDocumentExample();
$invoice = $example->createXmlDocument(InvoiceTypeCodes::INVOICE, $id, $supplier, $customer, $delivery, true, '/path/to/eInvoice.crt', '/path/to/eInvoice.key');

// If you are using p12 or pfx file, you may use following code to generate document
/*
$invoice = $example->createXmlDocument(InvoiceTypeCodes::INVOICE, $id, $supplier, $customer, $delivery, true, '/path/to/eInvoice.p12', null, 'passphrase');
*/

// In case there is DS326 error, you may use following code to re-arrange issuer key sequences
// Default sequence -> ['CN', 'E', 'OU', 'O', 'C']
/*
$invoice = $example->createXmlDocument(InvoiceTypeCodes::INVOICE, $id, $supplier, $customer, $delivery, true, '/path/to/eInvoice.p12', null, 'passphrase', ['C', 'O', 'OU', 'E', 'CN']);
*/

$documents = [];
$document = MyInvoisHelper::getSubmitDocument($id, $invoice);
$documents[] = $document;

$response = $client->submitDocument($documents);
```

#### Cancel Document
```php
$reason = 'Customer refund';
$response = $client->cancelDocument($id, $reason);
```

#### Reject Document
```php
$reason = 'Customer reject';
$response = $client->rejectDocument($id, $reason);
```

#### Get Recent Documents
```php
$response = $client->getRecentDocuments();
// OR
$pageNo = 3;
$pageSize = 20;
$submissionDateFrom = '2022-11-25T01:59:10Z';
$submissionDateTo = new \DateTime('2022-12-22T23:59:59Z');
$issueDateFrom = null;
$issueDateTo = null;
$direction = 'Sent';
$status = 'Valid';
$documentType = '01';
$receiverId = 'A12345678';
$receiverIdType = 'PASSPORT';
$receiverTin = 'C2584563200';
$issuerId = null;
$issuerIdType = null;
$issuerTin = null;

$response = $client->getRecentDocuments($pageNo, $pageSize, $submissionDateFrom, $submissionDateTo, $issueDateFrom, $issueDateTo, $direction, $status, $documentType, $receiverId, $receiverIdType, $receiverTin, $issuerId, $issuerIdType, $issuerTin);
```

#### Get Submission
```php
$response = $client->getSubmission($id);
// OR
$pageNo = 1;
$pageSize = 100;

$response = $client->getSubmission($id, $pageNo, $pageSize);
```

#### Get Document
```php
$response = $client->getDocument($id);
```

#### Get Document Details
```php
$response = $client->getDocumentDetail($id);
```

#### Search Documents
```php
$submissionDateFrom = new \DateTime('2024-12-31T00:00:00Z'); 
$submissionDateTo = '2025-01-02T00:00:00Z';

$response = $client->searchDocuments(null, $submissionDateFrom, $submissionDateTo);
// OR
$id = 'F9D425P6DS7D8IU';
$submissionDateFrom = new \DateTime('2024-12-31T00:00:00Z'); 
$submissionDateTo = '2025-01-02T00:00:00Z';
$pageNo = 1;
$pageSize = 100;
$issueDateFrom = null;
$issueDateTo = null;
$direction = 'Sent';
$status = 'Valid';
$documentType = '01';
$searchQuery = null;

$response = $client->searchDocuments($id, $submissionDateFrom, $submissionDateTo, $pageNo, $pageSize, $issueDateFrom, $issueDateTo, $direction, $status, $documentType, $searchQuery);
```

#### Get Document's QR Code URL
```php
use Klsheng\Myinvois\MyInvoisClient;

$prodMode = false;
$client = new MyInvoisClient('client_id', 'client_secret', $prodMode);

$id = '0000000000000'; // Document's UUID
$longId = '11111111111111'; // Document's Long Id
$url = $client->generateDocumentQrCodeUrl($id, $longId);

```