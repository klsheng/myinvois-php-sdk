<?php

/**
 * @copyright Copyright (c) 2024 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

namespace Klsheng\Myinvois\Ubl;

use InvalidArgumentException;
use Sabre\Xml\Writer;

/**
 * Address
 * 
 * @author Sean Kau (kliensheng2020@gmail.com)
 * @since 1.0.0
 */
class Address implements ISerializable, IValidator
{
    private $streetName;
    private $additionalStreetName;
    private $buildingNumber;
    private $cityName;
    private $postalZone;
    private $countrySubentityCode;
    private $country;
    private $addressLines = [];

    /**
     * @return string
     */
    public function getStreetName()
    {
        return $this->streetName;
    }

    /**
     * @param string $streetName
     * @return Address
     */
    public function setStreetName($streetName)
    {
        $this->streetName = $streetName;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalStreetName()
    {
        return $this->additionalStreetName;
    }

    /**
     * @param string $additionalStreetName
     * @return Address
     */
    public function setAdditionalStreetName($additionalStreetName)
    {
        $this->additionalStreetName = $additionalStreetName;
        return $this;
    }

    /**
    /**
     * @return string
     */
    public function getBuildingNumber()
    {
        return $this->buildingNumber;
    }

    /**
     * @param string $buildingNumber
     * @return Address
     */
    public function setBuildingNumber($buildingNumber)
    {
        $this->buildingNumber = $buildingNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * @param string $cityName
     * @return Address
     */
    public function setCityName($cityName)
    {
        $this->cityName = $cityName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostalZone()
    {
        return $this->postalZone;
    }

    /**
     * @param string $postalZone
     * @return Address
     */
    public function setPostalZone($postalZone)
    {
        $this->postalZone = $postalZone;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountrySubentityCode()
    {
        return $this->countrySubentityCode;
    }

    /**
     * @param string $countrySubentityCode
     * @return Address
     */
    public function setCountrySubentityCode($countrySubentityCode)
    {
        $this->countrySubentityCode = $countrySubentityCode;
        return $this;
    }

    /**
     * @return AddressLine[]
     */
    public function getAddressLines()
    {
        return $this->addressLines;
    }

    /**
     * @param AddressLine $addressLine
     * @return Address
     */
    public function setAddressLine(AddressLine $addressLine)
    {
        $this->addressLines = [$addressLine];
        return $this;
    }

    /**
     * @param AddressLine[] $addressLines
     * @return Address
     */
    public function setAddressLines($addressLines)
    {
        $this->addressLines = $addressLines;
        return $this;
    }

    /**
     * @param AddressLine $addressLine
     * @return Address
     */
    public function addAddressLine(AddressLine $addressLine)
    {
        $this->addressLines[] = $addressLine;
        return $this;
    }
    
    /**
     * @return Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param Country $country
     * @return Address
     */
    public function setCountry(Country $country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * validate function
     *
     * @throws InvalidArgumentException An error with information about required data that is missing
     */
    public function validate()
    {
        if (empty($this->addressLines)) {
            throw new InvalidArgumentException('Missing addressLines');
        }

        if (empty($this->cityName)) {
            throw new InvalidArgumentException('Missing cityName');
        }

        if (empty($this->countrySubentityCode)) {
            throw new InvalidArgumentException('Missing countrySubentityCode');
        }

        if (empty($this->country)) {
            throw new InvalidArgumentException('Missing country');
        }
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

        if ($this->streetName !== null) {
            $writer->write([
                XmlSchema::CBC . 'StreetName' => $this->streetName
            ]);
        }
        
        if ($this->additionalStreetName !== null) {
            $writer->write([
                XmlSchema::CBC . 'AdditionalStreetName' => $this->additionalStreetName
            ]);
        }

        if ($this->buildingNumber !== null) {
            $writer->write([
                XmlSchema::CBC . 'BuildingNumber' => $this->buildingNumber
            ]);
        }

        if ($this->cityName !== null) {
            $writer->write([
                XmlSchema::CBC . 'CityName' => $this->cityName,
            ]);
        }

        if ($this->postalZone !== null) {
            $writer->write([
                XmlSchema::CBC . 'PostalZone' => $this->postalZone,
            ]);
        }

        if ($this->countrySubentityCode !== null) {
            $writer->write([
                XmlSchema::CBC . 'CountrySubentityCode' => $this->countrySubentityCode,
            ]);
        }

        if (!empty($this->addressLines)) {
            foreach ($this->addressLines as $addressLine) {
                $writer->write([
                    XmlSchema::CAC . 'AddressLine' => $addressLine
                ]);
            }
        }

        if ($this->country !== null) {
            $writer->write([
                XmlSchema::CAC . 'Country' => $this->country,
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

        if ($this->streetName !== null) {
            $arrays['StreetName'][] = [
                '_' => $this->streetName,
            ];
        }
        
        if ($this->additionalStreetName !== null) {
            $arrays['AdditionalStreetName'][] = [
                '_' => $this->additionalStreetName,
            ];
        }

        if ($this->buildingNumber !== null) {
            $arrays['BuildingNumber'][] = [
                '_' => $this->buildingNumber,
            ];
        }

        if ($this->cityName !== null) {
            $arrays['CityName'][] = [
                '_' => $this->cityName,
            ];
        }

        if ($this->postalZone !== null) {
            $arrays['PostalZone'][] = [
                '_' => $this->postalZone,
            ];
        }

        if ($this->countrySubentityCode !== null) {
            $arrays['CountrySubentityCode'][] = [
                '_' => $this->countrySubentityCode,
            ];
        }

        if (!empty($this->addressLines)) {
            foreach ($this->addressLines as $addressLine) {
                $arrays['AddressLine'][] = $addressLine;
            }
        }

        if ($this->country !== null) {
            $arrays['Country'][] = $this->country;
        }

        return $arrays;
    }
}
