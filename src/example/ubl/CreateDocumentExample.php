<?php

namespace klsheng\myinvois\example\ubl;

use klsheng\myinvois\ubl\Invoice;
use klsheng\myinvois\ubl\CreditNote;
use klsheng\myinvois\ubl\DebitNote;
use klsheng\myinvois\ubl\Address;
use klsheng\myinvois\ubl\AddressLine;
use klsheng\myinvois\ubl\Country;
use klsheng\myinvois\ubl\LegalEntity;
use klsheng\myinvois\ubl\Contact;
use klsheng\myinvois\ubl\AccountingParty;
use klsheng\myinvois\ubl\Party;
use klsheng\myinvois\ubl\PartyIdentification;
use klsheng\myinvois\ubl\AllowanceCharge;
use klsheng\myinvois\ubl\Shipment;
use klsheng\myinvois\ubl\Delivery;
use klsheng\myinvois\ubl\TaxTotal;
use klsheng\myinvois\ubl\TaxScheme;
use klsheng\myinvois\ubl\TaxCategory;
use klsheng\myinvois\ubl\TaxSubTotal;
use klsheng\myinvois\ubl\Item;
use klsheng\myinvois\ubl\CommodityClassification;
use klsheng\myinvois\ubl\Price;
use klsheng\myinvois\ubl\ItemPriceExtension;
use klsheng\myinvois\ubl\InvoiceLine;
use klsheng\myinvois\ubl\CreditNoteLine;
use klsheng\myinvois\ubl\DebitNoteLine;
use klsheng\myinvois\ubl\AdditionalDocumentReference;
use klsheng\myinvois\ubl\LegalMonetaryTotal;
use klsheng\myinvois\ubl\InvoicePeriod;
use klsheng\myinvois\ubl\PayeeFinancialAccount;
use klsheng\myinvois\ubl\PaymentMeans;
use klsheng\myinvois\ubl\PaymentTerms;
use klsheng\myinvois\ubl\BillingReference;
use klsheng\myinvois\ubl\PrepaidPayment;
use klsheng\myinvois\ubl\builder\XmlDocumentBuilder;
use klsheng\myinvois\ubl\builder\JsonDocumentBuilder;
use klsheng\myinvois\ubl\constant\MSICCodes;

class CreateDocumentExample
{
    public function createXmlDocument()
    {
        $document = $this->createDocument();

        $builder = new XmlDocumentBuilder();
        return $builder->getDocument($document);
    }

    public function createJsonDocument()
    {
        $document = $this->createDocument();

        $builder = new JsonDocumentBuilder();
        return $builder->getDocument($document);
    }

    private function createDocument()
    {
        $document = new Invoice();
        $document->setId('INV20240418105410');
        $document->setIssueDateTime(new \DateTime('2017-11-26 15:30:00Z'));

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
        $country->setIdentificationCode('MYS', 'ISO3166-1', '6');
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
        $country->setIdentificationCode('MYS', 'ISO3166-1', '6');
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
        $country->setIdentificationCode('MYS', 'ISO3166-1', '6');
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
        $taxTotal->setTaxAmount(1460.50);

        $taxScheme = new TaxScheme();
        $taxScheme->setId('OTH', 'UN/ECE 5153', '6');

        $taxCategory = new TaxCategory();
        $taxCategory->setId('E');
        $taxCategory->setPercent('6.00');
        $taxCategory->setTaxExemptionReason('Exempt New Means of Transport');
        $taxCategory->setTaxScheme($taxScheme);

        $taxSubTotal = new TaxSubTotal();
        $taxSubTotal->setTaxableAmount(1460.50);
        $taxSubTotal->setTaxAmount(0);
        $taxSubTotal->setTaxCategory($taxCategory);
        $taxTotal->addTaxSubTotal($taxSubTotal);

        $country = new Country();
        $country->setIdentificationCode('MYS');

        $item = new Item();
        $item->setDescription('Laptop Peripherals');
        $item->setCountry($country);

        $commodityClassification = new CommodityClassification();
        $commodityClassification->setItemClassificationCode('12344321', 'PTC');
        $item->addCommodityClassification($commodityClassification);

        $commodityClassification = new CommodityClassification();
        $commodityClassification->setItemClassificationCode('12344321', 'CLASS');
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
        $taxScheme->setId('OTH', 'UN/ECE 5153', '6');

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
}
