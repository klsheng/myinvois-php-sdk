<?php

/**
 * @copyright Copyright (c) 2024 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

namespace Klsheng\Myinvois\Ubl;

use InvalidArgumentException;
use Sabre\Xml\Writer;
use Klsheng\Myinvois\Ubl\Constant\UblAttributes;

/**
 * Party
 * 
 * @author Sean Kau (kliensheng2020@gmail.com)
 * @since 1.0.0
 */
class Party implements ISerializable, IValidator
{
    private $name;
    private $partyIdentifications = [];
    private $postalAddress;
    private $physicalLocation;
    private $contact;
    private $partyTaxScheme;
    private $legalEntity;
    private $endpointID;
    private $endpointID_schemeID;
    private $industryClassificationCode;
    private $industryClassificationCodeAttributes = [];

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Party
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return array
     */
    public function getPartyIdentifications()
    {
        return $this->partyIdentifications;
    }

    /**
     * @param PartyIdentification $partyIdentification
     * @return Party
     */
    public function setPartyIdentification(PartyIdentification $partyIdentification)
    {
        $this->partyIdentifications = [$partyIdentification];
        return $this;
    }

    /**
     * @param PartyIdentification[] $partyIdentifications
     * @return Party
     */
    public function setPartyIdentifications($partyIdentifications)
    {
        $this->partyIdentifications = $partyIdentifications;
        return $this;
    }

    /**
     * @param PartyIdentification $partyIdentification
     * @return Party
     */
    public function addPartyIdentification(PartyIdentification $partyIdentification)
    {
        $this->partyIdentifications[] = $partyIdentification;
        return $this;
    }

    /**
     * @return Address
     */
    public function getPostalAddress()
    {
        return $this->postalAddress;
    }

    /**
     * @param Address $postalAddress
     * @return Party
     */
    public function setPostalAddress(Address $postalAddress)
    {
        $this->postalAddress = $postalAddress;
        return $this;
    }

    /**
     * @return LegalEntity
     */
    public function getLegalEntity()
    {
        return $this->legalEntity;
    }

    /**
     * @param LegalEntity $legalEntity
     * @return Party
     */
    public function setLegalEntity(LegalEntity $legalEntity)
    {
        $this->legalEntity = $legalEntity;
        return $this;
    }

    /**
     * @return Address
     */
    public function getPhysicalLocation()
    {
        return $this->physicalLocation;
    }

    /**
     * @param Address $physicalLocation
     * @return Party
     */
    public function setPhysicalLocation(Address $physicalLocation)
    {
        $this->physicalLocation = $physicalLocation;
        return $this;
    }

    /**
     * @return PartyTaxScheme
     */
    public function getPartyTaxScheme()
    {
        return $this->partyTaxScheme;
    }

    /**
     * @param PartyTaxScheme $partyTaxScheme
     * @return Party
     */
    public function setPartyTaxScheme(PartyTaxScheme $partyTaxScheme)
    {
        $this->partyTaxScheme = $partyTaxScheme;
        return $this;
    }

    /**
     * @return Contact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param Contact $contact
     * @return Party
     */
    public function setContact(Contact $contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * @param $endpointID
     * @param int|string $schemeID See list at https://docs.peppol.eu/poacc/billing/3.0/codelist/eas/
     * @return Party
     */
    public function setEndpointID($endpointID, $schemeID)
    {
        $this->endpointID = $endpointID;
        $this->endpointID_schemeID = $schemeID;
        return $this;
    }

    /**
     * @return string
     */
    public function getIndustryClassificationCode()
    {
        return $this->companyId;
    }

    /**
     * @param string $industryClassificationCode
     * @param string $name Optional
     * @param array $attributes Optional
     * @return Party
     */
    public function setIndustryClassificationCode($industryClassificationCode, $name = null, $attributes = null)
    {
        $this->industryClassificationCode = $industryClassificationCode;
        if (isset($name)) {
            $this->industryClassificationCodeAttributes['name'] = $name;
        }
        if (isset($attributes)) {
            $this->industryClassificationCodeAttributes = array_merge($this->industryClassificationCodeAttributes, $attributes);
        }

        return $this;
    }

    /**
     * validate function
     *
     * @throws InvalidArgumentException An error with information about required data that is missing
     */
    public function validate()
    {
        if ($this->postalAddress === null) {
            throw new InvalidArgumentException('Missing Party postalAddress');
        }

        if ($this->legalEntity === null) {
            throw new InvalidArgumentException('Missing Party legalEntity');
        }

        // TODO
        // IndustryClassificationCode -> For AccountingSupplierParty 
    }

    /**
     * The xmlSerialize method is called during xml writing.
     *
     * @param Writer $writer
     * @return void
     */
    public function xmlSerialize(Writer $writer): void
    {
        $this->validate();

        if ($this->industryClassificationCode !== null) {
            $writer->write([
                [
                    'name' => XmlSchema::CBC . 'IndustryClassificationCode',
                    'value' => $this->industryClassificationCode,
                    'attributes' => $this->industryClassificationCodeAttributes,
                ],
            ]);
        }

        if ($this->endpointID !== null && $this->endpointID_schemeID !== null) {
            $writer->write([
                [
                    'name' => XmlSchema::CBC . 'EndpointID',
                    'value' => $this->endpointID,
                    'attributes' => [
                        UblAttributes::SCHEME_ID => is_numeric($this->endpointID_schemeID)
                            ? sprintf('%04d', +$this->endpointID_schemeID)
                            : $this->endpointID_schemeID
                    ]
                ]
            ]);
        }

        if (!empty($this->partyIdentifications)) {
            foreach ($this->partyIdentifications as $partyIdentification) {
                $writer->write([
                    XmlSchema::CAC . 'PartyIdentification' => $partyIdentification
                ]);
            }
        }

        if ($this->name !== null) {
            $writer->write([
                XmlSchema::CAC . 'PartyName' => [
                    XmlSchema::CBC . 'Name' => $this->name
                ]
            ]);
        }

        $writer->write([
            XmlSchema::CAC . 'PostalAddress' => $this->postalAddress
        ]);

        if ($this->physicalLocation !== null) {
            $writer->write([
               XmlSchema::CAC . 'PhysicalLocation' => [XmlSchema::CAC . 'Address' => $this->physicalLocation]
            ]);
        }

        if ($this->partyTaxScheme !== null) {
            $writer->write([
                XmlSchema::CAC . 'PartyTaxScheme' => $this->partyTaxScheme
            ]);
        }

        if ($this->legalEntity !== null) {
            $writer->write([
                XmlSchema::CAC . 'PartyLegalEntity' => $this->legalEntity
            ]);
        }

        if ($this->contact !== null) {
            $writer->write([
                XmlSchema::CAC . 'Contact' => $this->contact
            ]);
        }
    }

    /**
     * The jsonSerialize method is called during json writing.
     *
     * @return array
     */
    public function jsonSerialize()
    {
        $this->validate();

        $arrays = [];

        if ($this->industryClassificationCode !== null) {
            $items = [
                '_' => $this->industryClassificationCode,
            ];

            $items = array_merge($items, $this->industryClassificationCodeAttributes);
            $arrays['IndustryClassificationCode'][] = $items;
        }

        if ($this->endpointID !== null && $this->endpointID_schemeID !== null) {
            $items = [
                '_' => $this->endpointID,
            ];

            $items[UblAttributes::SCHEME_ID] = is_numeric($this->endpointID_schemeID)
                    ? sprintf('%04d', +$this->endpointID_schemeID) 
                    : $this->endpointID_schemeID;

            $arrays['EndpointID'][] = $items;
        }

        if (!empty($this->partyIdentifications)) {
            foreach ($this->partyIdentifications as $partyIdentification) {
                $arrays['PartyIdentification'][] = $partyIdentification;
            }
        }

        if ($this->name !== null) {
            $arrays['PartyName'][] = [
                'Name' => $this->name,
            ];
        }

        $arrays['PostalAddress'][] = $this->postalAddress;

        if ($this->physicalLocation !== null) {
            $arrays['PhysicalLocation'][] = [
                'Address' => $this->physicalLocation,
            ];
        }

        if ($this->partyTaxScheme !== null) {
            $arrays['PartyTaxScheme'][] = $this->partyTaxScheme;
        }

        if ($this->legalEntity !== null) {
            $arrays['PartyLegalEntity'][] = $this->legalEntity;
        }

        if ($this->contact !== null) {
            $arrays['Contact'][] = $this->contact;
        }

        return $arrays;
    }
}
