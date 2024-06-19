<?php

namespace Klsheng\Myinvois\Example\Ubl;

use Klsheng\Myinvois\Ubl\Invoice;
use Klsheng\Myinvois\Ubl\CreditNote;
use Klsheng\Myinvois\Ubl\DebitNote;
use Klsheng\Myinvois\Ubl\Address;
use Klsheng\Myinvois\Ubl\AddressLine;
use Klsheng\Myinvois\Ubl\Country;
use Klsheng\Myinvois\Ubl\LegalEntity;
use Klsheng\Myinvois\Ubl\Contact;
use Klsheng\Myinvois\Ubl\AccountingParty;
use Klsheng\Myinvois\Ubl\Party;
use Klsheng\Myinvois\Ubl\PartyIdentification;
use Klsheng\Myinvois\Ubl\AllowanceCharge;
use Klsheng\Myinvois\Ubl\Shipment;
use Klsheng\Myinvois\Ubl\Delivery;
use Klsheng\Myinvois\Ubl\TaxTotal;
use Klsheng\Myinvois\Ubl\TaxScheme;
use Klsheng\Myinvois\Ubl\TaxCategory;
use Klsheng\Myinvois\Ubl\TaxSubTotal;
use Klsheng\Myinvois\Ubl\Item;
use Klsheng\Myinvois\Ubl\CommodityClassification;
use Klsheng\Myinvois\Ubl\Price;
use Klsheng\Myinvois\Ubl\ItemPriceExtension;
use Klsheng\Myinvois\Ubl\InvoiceLine;
use Klsheng\Myinvois\Ubl\CreditNoteLine;
use Klsheng\Myinvois\Ubl\DebitNoteLine;
use Klsheng\Myinvois\Ubl\AdditionalDocumentReference;
use Klsheng\Myinvois\Ubl\LegalMonetaryTotal;
use Klsheng\Myinvois\Ubl\InvoicePeriod;
use Klsheng\Myinvois\Ubl\PayeeFinancialAccount;
use Klsheng\Myinvois\Ubl\PaymentMeans;
use Klsheng\Myinvois\Ubl\PaymentTerms;
use Klsheng\Myinvois\Ubl\BillingReference;
use Klsheng\Myinvois\Ubl\PrepaidPayment;
use Klsheng\Myinvois\Ubl\TaxExchangeRate;
use Klsheng\Myinvois\Ubl\Extension\UBLExtensions;
use Klsheng\Myinvois\Ubl\Extension\UBLExtensionItem;
use Klsheng\Myinvois\Ubl\Extension\UBLDocumentSignatures;
use Klsheng\Myinvois\Ubl\Extension\SignatureInformation;
use Klsheng\Myinvois\Ubl\Extension\Signature;
use Klsheng\Myinvois\Ubl\Extension\SignInfo;
use Klsheng\Myinvois\Ubl\Extension\SignInfoReference;
use Klsheng\Myinvois\Ubl\Extension\SignInfoTransform;
use Klsheng\Myinvois\Ubl\Extension\KeyInfo;
use Klsheng\Myinvois\Ubl\Extension\KeyInfoX509Data;
use Klsheng\Myinvois\Ubl\Extension\SignatureObject;
use Klsheng\Myinvois\Ubl\Extension\QualifyingProperties;
use Klsheng\Myinvois\Ubl\Extension\SignedProperties;
use Klsheng\Myinvois\Ubl\Extension\SignedSignatureProperties;
use Klsheng\Myinvois\Ubl\Builder\XmlDocumentBuilder;
use Klsheng\Myinvois\Ubl\Builder\JsonDocumentBuilder;
use Klsheng\Myinvois\Ubl\Constant\MSICCodes;

class CreateDocumentExample
{
    public function createXmlDocument($id, $includeSignature = false, $certFilePath = null, $certPrivateKeyFilePath = null)
    {
        $document = $this->createDocument($id);

        $builder = new XmlDocumentBuilder();
        $builder->setDocument($document);

        if($includeSignature) {
            $builder->createSignature($certFilePath, $certPrivateKeyFilePath);
        }

        return $builder->build();
    }

    public function createJsonDocument($id, $includeSignature = false, $certFilePath = null, $certPrivateKeyFilePath = null)
    {
        $document = $this->createDocument($id);

        $builder = new JsonDocumentBuilder();
        $builder->setDocument($document);

        if($includeSignature) {
            $builder->createSignature($certFilePath, $certPrivateKeyFilePath);
        }

        return $builder->build();
    }

    private function createDocument($id)
    {
        $issueDateTime = new \DateTime('now', new \DateTimeZone('UTC'));

        $document = new Invoice();
        $document->setId($id);
        $document->setIssueDateTime($issueDateTime);

        //$document = $this->setUBLExtension($document);
        $document = $this->setBillingReference($document);
        $document = $this->setPrepaidPayment($document);
        $document = $this->setSupplier($document);
        $document = $this->setCustomer($document);
        $document = $this->setDelivery($document);
        $document = $this->setDocumentLine($document);
        $document = $this->setAdditionalDocumentReference($document);
        $document = $this->setLegalMonetaryTotal($document);
        $document = $this->setInvoicePeriod($document);
        $document = $this->setPaymentMeans($document);
        $document = $this->setPaymentTerms($document);
        $document = $this->setAllowanceCharges($document);
        $document = $this->setTaxTotal($document);
        $document = $this->setTaxExchangeRate($document);

        return $document;
    }

    private function setUBLExtension($document)
    {
        $signedSignatureProperties = new SignedSignatureProperties();
        $signedSignatureProperties->setSigningTime(new \DateTime('2024-04-01 00:41:21'));

        $signedProperties = new SignedProperties();
        $signedProperties->setSignedSignatureProperties($signedSignatureProperties);

        $qualifyingProperties = new QualifyingProperties();
        $qualifyingProperties->setSignedProperties($signedProperties);

        $signatureObject = new SignatureObject();
        $signatureObject->setQualifyingProperties($qualifyingProperties);

        $x509Data = new KeyInfoX509Data();
        $x509Data->setX509Certificate('MIIEQzCCAyugAwIBAgIhAOkUChItLeodmoK/A7B0XLcSUCvT4jgrSeYBOeZ1G8VPMA0GCSqGSIb3DQEBBQUAMIG9MQswCQYDVQQGEwJLTDEhMB8GA1UECgwYQ29udG9zbyBNYWxheXNpYSBTZG4gQmhkMSEwHwYDVQQLDBhDb250b3NvIE1hbGF5c2lhIFNkbiBCaGQxITAfBgNVBAMMGENvbnRvc28gTWFsYXlzaWEgU2RuIEJoZDEiMCAGCSqGSIb3DQEJARYTbm9lbWFpbEBjb250b3NvLmNvbTEhMB8GA1UEAwwYQ29udG9zbyBNYWxheXNpYSBTZG4gQmhkMB4XDTI0MDQwMzA5NTM1MFoXDTI3MDQwNDA5NTM1MFowgZoxCzAJBgNVBAYTAktMMSEwHwYDVQQKDBhDb250b3NvIE1hbGF5c2lhIFNkbiBCaGQxITAfBgNVBAsMGENvbnRvc28gTWFsYXlzaWEgU2RuIEJoZDEhMB8GA1UEAwwYQ29udG9zbyBNYWxheXNpYSBTZG4gQmhkMSIwIAYJKoZIhvcNAQkBFhNub2VtYWlsQGNvbnRvc28uY29tMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA8yRxOigcbDzObxhNmVklzyJOItz4eSZHUv+JEy7nTosOg/wcFcDgrJDw6LZ/Mr6aW98VJ930hlSw52fOPiMnXTyJLF6ZjISPsTjlrn9eKnbWt6DWqFIDWDIaXVhAcfFRkKftSFgSIEO9NIb+kmV6K/LotWEiLglz6KZE3EopSF+pXa1LmwC8v0UhK8V8LcxqIe3dBq/jzyaWsLx5D4zdQqBSFEXrfp0A+N/93uAtQa35Fj3ypEpSzF/EQ6bDO/GwBKQm3lCny6AJB/I/kCbC/X+oMxkTOo9zW5hcdRiqmAa4iIrhORIOTlj5qfnngjulTnSMdK5kXSLJxC6SDlKtVwIDAQABo08wTTAdBgNVHQ4EFgQU2pvYc/z5Prqp8Dt8PM1C/df1ysQwHwYDVR0jBBgwFoAU2pvYc/z5Prqp8Dt8PM1C/df1ysQwCwYDVR0RBAQwAoIAMA0GCSqGSIb3DQEBBQUAA4IBAQBHzVHoQk+cAwunDlmrBjWYxfzmF3Adab81HKug+riDGiSG3bNntAwRVkDC4onG680Ucsuhxeyj18gkAtR/5ZWu3RDZwcYoBMuQzUSS9U5bwg5VqCqxEfTQCSERjuCa8lt99EcgY06e8a8WEwcY19LKVVwtrTJnlHvXhmcheumX3pfjPb5u0c0WKnbkj5mow75TuEmc0k1qow6Z6H5O6cPhX+eyNQSFZ3QnC0W2oIZTi96TVT4JH8LOPurZ5AdG9maQNIypaZ0gYPtAJISP+nxPOHmloicecdLLaMG/cvDf2+/bJR2P98dTuTZqgKrvWHkiMOma62MVx5dbcmbxgxU6');

        $keyInfo = new KeyInfo();
        $keyInfo->setX509Data($x509Data);

        $signedInfo = new SignInfo();
        $reference = new SignInfoReference();
        $reference->setAttributes([
            'Id' => 'id-doc-signed-data',
            'URI' => '',
        ]);
        $reference->setDigestValue('RvCSpMYz8009KbJ3ku72oaCFWpzEfQNcpc+5bulh3Jk=');

        $transform = new SignInfoTransform();
        $transform->setXPath('not(//ancestor-or-self::ext:UBLExtensions)');
        $reference->addTransform($transform);

        $transform = new SignInfoTransform();
        $transform->setXPath('not(//ancestor-or-self::cac:Signature)');
        $reference->addTransform($transform);

        $transform = new SignInfoTransform();
        $transform->setAttributes([
            UblAttributes::ALGORITHM => 'http://www.w3.org/2006/12/xml-c14n11',
        ]);
        $reference->addTransform($transform);

        $signedInfo->addReference($reference);

        $reference = new SignInfoReference();
        $reference->setAttributes([
            'Type' => 'http://www.w3.org/2000/09/xmldsig#SignatureProperties',
            'URI' => '#id-xades-signed-props',
        ]);
        $reference->setDigestValue('OGU1M2Q3NGFkOTdkYTRiNDVhOGZmYmU2ZjE0YzI3ZDhhNjlmM2EzZmQ4MTU5NTBhZjBjNDU2MWZlNjU3MWU0ZQ==');
        $signedInfo->addReference($reference);

        $signature = new Signature();
        $signature->setSignatureValue('VkiVEIkPTISrrwdFouXWEHirxST2mCbLuXmgO0T+4UXHq9Sir+/9gnEZU7Aa2PCB
        Q/3X0RIkX/sQwGMNdQ5jUJWc0BoGOszhc0CYHxDiayqlQ4fZGz+nhVdoUog4o7Tx
        dk+vu/LS/7iz6asudXp2Zh8tT4LnOINsj+//DdRd6yM=');
        $signature->setSignInfo($signedInfo);
        $signature->setKeyInfo($keyInfo);
        $signature->setObject($signatureObject);

        $information = new SignatureInformation();
        $information->setSignature($signature, ['Id' => 'signature']);

        $sign = new UBLDocumentSignatures();
        $sign->setSignatureInformation($information);

        $ublExtensionItem = new UBLExtensionItem();
        $ublExtensionItem->setContent($sign);

        $ublExtensions = new UBLExtensions();
        $ublExtensions->addUBLExtensionItem($ublExtensionItem);
        
        $document->setUBLExtensions($ublExtensions);

        return $document;
    }

    private function setBillingReference($document)
    {
        $additionalDocumentReference = new AdditionalDocumentReference();
        $additionalDocumentReference->setId('E12345678912');

        $billingReference = new BillingReference();
        $billingReference->setAdditionalDocumentReference($additionalDocumentReference);

        $document->setBillingReference($billingReference);

        return $document;
    }

    private function setPrepaidPayment($document)
    {
        $prepaidPayment = new PrepaidPayment();
        $prepaidPayment->setId('E12345678912');
        $prepaidPayment->setPaidAmount(1.00);
        $prepaidPayment->setPaidDateTime(new \DateTime('2000-01-01 12:00:00Z'));

        $document->setPrepaidPayment($prepaidPayment);

        return $document;
    }

    private function setSupplier($document)
    {
        $address = new Address();
        $address->setCityName('Kuala Lumpur');
        $address->setPostalZone('50480');
        $address->setCountrySubentityCode('14');

        $addressLine = new AddressLine();
        $addressLine->setLine('Lot 66');
        $address->addAddressLine($addressLine);

        $addressLine = new AddressLine();
        $addressLine->setLine('Bangunan Merdeka');
        $address->addAddressLine($addressLine);

        $addressLine = new AddressLine();
        $addressLine->setLine('Persiaran Jaya');
        $address->addAddressLine($addressLine);

        $country = new Country();
        $country->setIdentificationCode('MYS');
        $address->setCountry($country);

        $legalEntity = new LegalEntity();
        $legalEntity->setRegistrationName('AMS Setia Jaya Sdn. Bhd.');

        $contact = new Contact();
        $contact->setTelephone('+60-123456789');
        $contact->setElectronicMail('general.ams@supplier.com');

        $supplier = new Party();

        $partyIdentification = new PartyIdentification();
        $partyIdentification->setId('C25746052070', 'TIN');
        $supplier->addPartyIdentification($partyIdentification);

        $partyIdentification = new PartyIdentification();
        $partyIdentification->setId('1307004-T', 'BRN');
        $supplier->addPartyIdentification($partyIdentification);

        $supplier->setPostalAddress($address);
        $supplier->setLegalEntity($legalEntity);
        $supplier->setContact($contact);

        $msicCode = '01111';
        $msicCodeDesc = MSICCodes::getDescription($msicCode);
        $supplier->setIndustryClassificationCode($msicCode, $msicCodeDesc);

        $accountingParty = new AccountingParty();
        $accountingParty->setAdditionalAccountID('CPT-CCN-W-211111-KL-000002');
        $accountingParty->setParty($supplier);
        
        return $document->setAccountingSupplierParty($accountingParty);
    }

    private function setCustomer($document)
    {
        $address = new Address();
        $address->setCityName('Kuala Lumpur');
        $address->setPostalZone('50480');
        $address->setCountrySubentityCode('14');

        $addressLine = new AddressLine();
        $addressLine->setLine('Lot 66');
        $address->addAddressLine($addressLine);

        $addressLine = new AddressLine();
        $addressLine->setLine('Bangunan Merdeka');
        $address->addAddressLine($addressLine);

        $addressLine = new AddressLine();
        $addressLine->setLine('Persiaran Jaya');
        $address->addAddressLine($addressLine);

        $country = new Country();
        $country->setIdentificationCode('MYS');
        $address->setCountry($country);

        $legalEntity = new LegalEntity();
        $legalEntity->setRegistrationName('Hebat Group');

        $contact = new Contact();
        $contact->setTelephone('+60-123456789');
        $contact->setElectronicMail('name@buyer.com');

        $customer = new Party();

        $partyIdentification = new PartyIdentification();
        $partyIdentification->setId('C2584563200', 'TIN');
        $customer->addPartyIdentification($partyIdentification);

        $partyIdentification = new PartyIdentification();
        $partyIdentification->setId('201901234567', 'BRN');
        $customer->addPartyIdentification($partyIdentification);

        $customer->setPostalAddress($address);
        $customer->setLegalEntity($legalEntity);
        $customer->setContact($contact);

        $accountingParty = new AccountingParty();
        $accountingParty->setParty($customer);

        return $document->setAccountingCustomerParty($accountingParty);
    }

    private function setDelivery($document)
    {
        $address = new Address();
        $address->setCityName('Kuala Lumpur');
        $address->setPostalZone('50480');
        $address->setCountrySubentityCode('14');

        $addressLine = new AddressLine();
        $addressLine->setLine('Lot 66');
        $address->addAddressLine($addressLine);

        $addressLine = new AddressLine();
        $addressLine->setLine('Bangunan Merdeka');
        $address->addAddressLine($addressLine);

        $addressLine = new AddressLine();
        $addressLine->setLine('Persiaran Jaya');
        $address->addAddressLine($addressLine);

        $country = new Country();
        $country->setIdentificationCode('MYS');
        $address->setCountry($country);

        $legalEntity = new LegalEntity();
        $legalEntity->setRegistrationName('Greenz Sdn. Bhd.');

        $deliveryParty = new Party();

        $partyIdentification = new PartyIdentification();
        $partyIdentification->setId('C2584563200', 'TIN');
        $deliveryParty->addPartyIdentification($partyIdentification);

        $partyIdentification = new PartyIdentification();
        $partyIdentification->setId('201901234567', 'BRN');
        $deliveryParty->addPartyIdentification($partyIdentification);

        $deliveryParty->setPostalAddress($address);
        $deliveryParty->setLegalEntity($legalEntity);

        $freightAllowanceCharge = new AllowanceCharge();
        $freightAllowanceCharge->setChargeIndicator(true);
        $freightAllowanceCharge->setAllowanceChargeReason('Service charge');
        $freightAllowanceCharge->setAmount(100);

        $shipment = new Shipment();
        $shipment->setId('1234');
        $shipment->setFreightAllowanceCharge($freightAllowanceCharge);

        $delivery = new Delivery();
        $delivery->setDeliveryParty($deliveryParty);
        $delivery->setShipment($shipment);

        return $document->setDelivery($delivery);
    }

    private function setDocumentLine($document)
    {
        $allowanceCharges = [];
        $allowanceCharge = new AllowanceCharge();
        $allowanceCharge->setChargeIndicator(false);
        $allowanceCharge->setAllowanceChargeReason('Sample Description');
        $allowanceCharge->setMultiplierFactorNumeric(0.15);
        $allowanceCharge->setAmount(100);
        $allowanceCharges[] = $allowanceCharge;

        $allowanceCharge = new AllowanceCharge();
        $allowanceCharge->setChargeIndicator(true);
        $allowanceCharge->setAllowanceChargeReason('Sample Description');
        $allowanceCharge->setMultiplierFactorNumeric(0.10);
        $allowanceCharge->setAmount(100);
        $allowanceCharges[] = $allowanceCharge;

        $taxTotal = new TaxTotal();
        $taxTotal->setTaxAmount(14.61);

        $taxScheme = new TaxScheme();
        $taxScheme->setId('OTH');

        $taxCategory = new TaxCategory();
        $taxCategory->setId('01');
        $taxCategory->setPercent(10.0);
        $taxCategory->setTaxExemptionReason('Exempt New Means of Transport');
        $taxCategory->setTaxScheme($taxScheme);

        $taxSubTotal = new TaxSubTotal();
        $taxSubTotal->setTaxableAmount(1460.50);
        $taxSubTotal->setTaxAmount(14.61);
        $taxSubTotal->setPercent(10.0);
        $taxSubTotal->setTaxCategory($taxCategory);
        $taxTotal->addTaxSubTotal($taxSubTotal);

        $country = new Country();
        $country->setIdentificationCode('MYS');

        $item = new Item();
        $item->setDescription('Laptop Peripherals');
        //$item->setCountry($country); // Removed by MyInvois

        $commodityClassification = new CommodityClassification();
        $commodityClassification->setItemClassificationCode('12344321', 'PTC');
        $item->addCommodityClassification($commodityClassification);

        $commodityClassification = new CommodityClassification();
        $commodityClassification->setItemClassificationCode('011', 'CLASS');
        $item->addCommodityClassification($commodityClassification);

        $price = new Price();
        $price->setPriceAmount(17);

        $itemPriceExtension = new ItemPriceExtension();
        $itemPriceExtension->setAmount(100);

        $documentLines = [];
        $documentLine = new InvoiceLine();
        $documentLine->setId('1234');
        $documentLine->setInvoicedQuantity(1);
        $documentLine->setLineExtensionAmount(1436.50);
        $documentLine->setAllowanceCharges($allowanceCharges);
        $documentLine->setTaxTotal($taxTotal);
        $documentLine->setItem($item);
        $documentLine->setPrice($price);
        $documentLine->setItemPriceExtension($itemPriceExtension);
        $documentLines[] = $documentLine;

        return $document->setInvoiceLines($documentLines);
    }

    private function setAdditionalDocumentReference($document)
    {
        $additionalDocumentReferences = [];

        $additionalDocumentReference = new AdditionalDocumentReference();
        $additionalDocumentReference->setId('E12345678912');
        $additionalDocumentReference->setDocumentType('CustomsImportForm');
        $additionalDocumentReferences[] = $additionalDocumentReference;

        $additionalDocumentReference = new AdditionalDocumentReference();
        $additionalDocumentReference->setId('ASEAN-Australia-New Zealand FTA (AANZFTA)');
        $additionalDocumentReference->setDocumentType('FreeTradeAgreement');
        $additionalDocumentReference->setDocumentDescription('Sample Description');
        $additionalDocumentReferences[] = $additionalDocumentReference;

        $additionalDocumentReference = new AdditionalDocumentReference();
        $additionalDocumentReference->setId('E12345678912');
        $additionalDocumentReference->setDocumentType('K2');
        $additionalDocumentReferences[] = $additionalDocumentReference;

        $additionalDocumentReference = new AdditionalDocumentReference();
        $additionalDocumentReference->setId('CIF');
        $additionalDocumentReferences[] = $additionalDocumentReference;

        return $document->setAdditionalDocumentReferences($additionalDocumentReferences);
    }

    private function setLegalMonetaryTotal($document)
    {
        $legalMonetaryTotal = new LegalMonetaryTotal();
        $legalMonetaryTotal->setLineExtensionAmount(1436.50);
        $legalMonetaryTotal->setTaxExclusiveAmount(1436.50);
        $legalMonetaryTotal->setTaxInclusiveAmount(1436.50);
        $legalMonetaryTotal->setAllowanceTotalAmount(1436.50);
        $legalMonetaryTotal->setChargeTotalAmount(1436.50);
        $legalMonetaryTotal->setPayableRoundingAmount(0.30);
        $legalMonetaryTotal->setPayableAmount(1436.50);

        return $document->setLegalMonetaryTotal($legalMonetaryTotal);
    }

    private function setInvoicePeriod($document)
    {
        $invoicePeriod = new InvoicePeriod();
        $invoicePeriod->setStartDate(new \DateTime('2017-11-26'));
        $invoicePeriod->setEndDate(new \DateTime('2017-11-30'));
        $invoicePeriod->setDescription('Monthly');

        return $document->setInvoicePeriod($invoicePeriod);
    }

    private function setPaymentMeans($document)
    {
        $payeeFinancialAccount = new PayeeFinancialAccount();
        $payeeFinancialAccount->setId('1234567890123');

        $paymentMeans = new PaymentMeans();
        $paymentMeans->setPayeeFinancialAccount($payeeFinancialAccount);

        return $document->setPaymentMeans($paymentMeans);
    }

    private function setPaymentTerms($document)
    {
        $paymentTerms = new PaymentTerms();
        $paymentTerms->setNote('Payment method is cash');

        return $document->setPaymentTerms($paymentTerms);
    }

    private function setAllowanceCharges($document)
    {
        $allowanceCharges = [];
        $allowanceCharge = new AllowanceCharge();
        $allowanceCharge->setChargeIndicator(false);
        $allowanceCharge->setAllowanceChargeReason('Sample Description 2');
        $allowanceCharge->setAmount(100);
        $allowanceCharges[] = $allowanceCharge;

        $allowanceCharge = new AllowanceCharge();
        $allowanceCharge->setChargeIndicator(true);
        $allowanceCharge->setAllowanceChargeReason('Service charge');
        $allowanceCharge->setAmount(100);
        $allowanceCharges[] = $allowanceCharge;

        return $document->setAllowanceCharges($allowanceCharges);
    }

    private function setTaxTotal($document)
    {
        $taxTotal = new TaxTotal();
        $taxTotal->setTaxAmount(87.63);

        $taxScheme = new TaxScheme();
        $taxScheme->setId('OTH');

        $taxCategory = new TaxCategory();
        $taxCategory->setId('01');
        $taxCategory->setTaxScheme($taxScheme);

        $taxSubTotal = new TaxSubTotal();
        $taxSubTotal->setTaxableAmount(87.63);
        $taxSubTotal->setTaxAmount(87.63);
        $taxSubTotal->setTaxCategory($taxCategory);
        $taxTotal->addTaxSubTotal($taxSubTotal);

        return $document->setTaxTotal($taxTotal);
    }

    private function setTaxExchangeRate($document)
    {
        $taxExchangeRate = new TaxExchangeRate();
        $taxExchangeRate->setSourceCurrencyCode('EUR');
        $taxExchangeRate->setTargetCurrencyCode('MYR');
        $taxExchangeRate->setCalculationRate(5.07);

        return $document->setTaxExchangeRate($taxExchangeRate);
    }
}
