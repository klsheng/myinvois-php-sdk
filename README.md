# MyInvois SDK for PHP
[![Latest Version on Packagist](https://img.shields.io/packagist/v/klsheng/myinvois-php-sdk.svg?style=flat-square)](https://packagist.org/packages/klsheng/myinvois-php-sdk)
[![Total Downloads](https://img.shields.io/packagist/dt/klsheng/myinvois-php-sdk.svg?style=flat-square)](https://packagist.org/packages/klsheng/myinvois-php-sdk)
[![License](https://poser.pugx.org/klsheng/myinvois-php-sdk/license?format=flat-square)](https://packagist.org/packages/klsheng/myinvois-php-sdk)

An object-oriented PHP library to create custom UBL v2.1 format supported by MyInvois System.

This SDK initially require [UBL-Invoice](https://github.com/num-num/ubl-invoice) package. However, MyInvois System doesn't fully support UBL v2.1 format, so UBL package re-create based on original author to support MyInvois System.

## TODO

- [x] Login as Taxpayer System
- [ ] Login as Intermediary System
- [x] Get All Document Types
- [x] Get Document Type
- [x] Get Document Type Version
- [x] Get Notifications
- [ ] Validate Taxpayer's TIN
- [x] Submit Documents (Invoice)
- [ ] Submit Documents (CreditNote, DebitNote, RefundNote, Self-Billed Invoice, Self-Billed Credit Note, Self-Billed Debit Note, Self-Billed Refund Note)
- [x] Cancel Document
- [x] Reject Document
- [x] Get Recent Documents
- [x] Get Submission
- [x] Get Document
- [x] Get Document Details
- [x] Search Documents
- [ ] Digital Signature

## [How to obtain Client ID and Client Secret for Sandbox?](https://sdk.myinvois.hasil.gov.my/faq/#how-to-obtain-client-id-and-client-secret-for-sandbox)

To obtain your Client ID and Client Secret, please send an email request to sdkmyinvois@hasil.gov.my with the following information:

1. Taxpayer TIN
2. Business Registration Number
3. Company Name
4. Company Email Address
5. ERP System Name

## Installation and usage

This package requires PHP 7.4 or higher. 

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

To install, either run

```zsh
$ composer require klsheng/myinvois-php-sdk
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

If you use Composer, these dependencies should be handled automatically. If you install manually, you'll want to make sure that these extensions are available.

## Usage
You may refer example to create UBL v2.1 document supported by MyInvois System at [CreateDocumentExample](https://github.com/klsheng/myinvois-php-sdk/blob/main/src/example/ubl/CreateDocumentExample.php).

Sample usage:

```php

use klsheng\myinvois\MyInvoisClient;
use klsheng\myinvois\helper\MyInvoisHelper;
use klsheng\myinvois\example\ubl\CreateDocumentExample;

$client = new MyInvoisClient('client_id', 'client_secret');
$client->login();

$example = new CreateDocumentExample();
$invoice = $example->createJsonDocument();

$documents = [];
$document = MyInvoisHelper::getSubmitDocument('json', 'INV20240418105410', $invoice);
$documents[] = $document;

$response = $client->submitDocument($documents);
return $response;

```