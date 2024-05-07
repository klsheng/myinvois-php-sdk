<?php

namespace klsheng\myinvois\ubl;

use Sabre\Xml\Writer;

class Item implements ISerializable, IValidator
{
    private $description;
    private $name;
    private $buyersItemIdentification;
    private $sellersItemIdentification;
    private $standardItemIdentification;
    private $commodityClassifications = [];
    private $country;

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Item
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Item
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSellersItemIdentification()
    {
        return $this->sellersItemIdentification;
    }

    /**
     * @param mixed $sellersItemIdentification
     * @return Item
     */
    public function setSellersItemIdentification($sellersItemIdentification)
    {
        $this->sellersItemIdentification = $sellersItemIdentification;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStandardItemIdentification()
    {
        return $this->standardItemIdentification;
    }

    /**
     * @param mixed $standardItemIdentification
     * @return Item
     */
    public function setStandardItemIdentification($standardItemIdentification)
    {
        $this->standardItemIdentification = $standardItemIdentification;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBuyersItemIdentification()
    {
        return $this->buyersItemIdentification;
    }

    /**
     * @param mixed $buyersItemIdentification
     * @return Item
     */
    public function setBuyersItemIdentification($buyersItemIdentification)
    {
        $this->buyersItemIdentification = $buyersItemIdentification;
        return $this;
    }

    /**
     * @return CommodityClassification[]
     */
    public function getCommodityClassifications()
    {
        return $this->commodityClassifications;
    }

    /**
     * @param CommodityClassification $commodityClassification
     * @return Item
     */
    public function setCommodityClassification(CommodityClassification $commodityClassification)
    {
        $this->commodityClassifications = [$commodityClassification];
        return $this;
    }

    /**
     * @param CommodityClassification[] $commodityClassifications
     * @return Item
     */
    public function setCommodityClassifications($commodityClassifications)
    {
        $this->commodityClassifications = $commodityClassifications;
        return $this;
    }

    /**
     * @param CommodityClassification $commodityClassification
     * @return Item
     */
    public function addCommodityClassification(CommodityClassification $commodityClassification)
    {
        $this->commodityClassifications[] = $commodityClassification;
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
     * @return Item
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
        
        if (!empty($this->description)) {
            $writer->write([
                XmlSchema::CBC . 'Description' => $this->description
            ]);
        }

        if ($this->name !== null) {
            $writer->write([
                XmlSchema::CBC . 'Name' => $this->name
            ]);
        }

        if (!empty($this->buyersItemIdentification)) {
            $writer->write([
                XmlSchema::CAC . 'BuyersItemIdentification' => [
                    XmlSchema::CBC . 'ID' => $this->buyersItemIdentification
                ],
            ]);
        }

        if (!empty($this->sellersItemIdentification)) {
            $writer->write([
                XmlSchema::CAC . 'SellersItemIdentification' => [
                    XmlSchema::CBC . 'ID' => $this->sellersItemIdentification
                ],
            ]);
        }

        if (!empty($this->standardItemIdentification)) {
            $writer->write([
                XmlSchema::CAC . 'StandardItemIdentification' => [
                    XmlSchema::CBC . 'ID' => $this->standardItemIdentification
                ],
            ]);
        }

        if (!empty($this->commodityClassifications)) {
            foreach ($this->commodityClassifications as $commodityClassification) {
                $writer->write([
                    XmlSchema::CAC . 'CommodityClassification' => $commodityClassification
                ]);
            }
        }

        if ($this->country !== null) {
            $writer->write([
                XmlSchema::CAC . 'OriginCountry' => $this->country,
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

        if (!empty($this->description)) {
            $arrays['Description'][] = [
                '_' => $this->description,
            ];
        }

        if ($this->name !== null) {
            $arrays['Name'][] = [
                '_' => $this->name,
            ];
        }

        if (!empty($this->buyersItemIdentification)) {
            $arrays['BuyersItemIdentification'][] = [
                '_' => $this->buyersItemIdentification,
            ];
        }

        if (!empty($this->sellersItemIdentification)) {
            $arrays['SellersItemIdentification'][] = [
                '_' => $this->sellersItemIdentification,
            ];
        }

        if (!empty($this->standardItemIdentification)) {
            $arrays['StandardItemIdentification'][] = [
                '_' => $this->standardItemIdentification,
            ];
        }

        if (!empty($this->commodityClassifications)) {
            foreach ($this->commodityClassifications as $commodityClassification) {
                $arrays['CommodityClassification'][] = $commodityClassification;
            }
        }

        if ($this->country !== null) {
            $arrays['OriginCountry'][] = $this->country;
        }

        return $arrays;
    }
}
