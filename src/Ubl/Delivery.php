<?php

namespace Klsheng\Myinvois\Ubl;

use InvalidArgumentException;
use DateTime;
use Sabre\Xml\Writer;

class Delivery implements ISerializable, IValidator
{
    private $actualDeliveryDate;
    private $deliveryLocation;
    private $deliveryParty;
    private $shipment;

    /**
     * @return DateTime
     */
    public function getActualDeliveryDate()
    {
        return $this->actualDeliveryDate;
    }

    /**
     * @param DateTime $actualDeliveryDate
     * @return Delivery
     */
    public function setActualDeliveryDate($actualDeliveryDate)
    {
        $this->actualDeliveryDate = $actualDeliveryDate;
        return $this;
    }

    /**
     * @return Address
     */
    public function getDeliveryLocation()
    {
        return $this->deliveryLocation;
    }

    /**
     * @param Address $deliveryLocation
     * @return Delivery
     */
    public function setDeliveryLocation(Address $deliveryLocation)
    {
        $this->deliveryLocation = $deliveryLocation;
        return $this;
    }

    /**
     * @return Party
     */
    public function getDeliveryParty()
    {
        return $this->deliveryParty;
    }

    /**
     * @param Party $deliveryParty
     * @return Delivery
     */
    public function setDeliveryParty(Party $deliveryParty)
    {
        $this->deliveryParty = $deliveryParty;
        return $this;
    }

    /**
     * @return Shipment
     */
    public function getShipment()
    {
        return $this->shipment;
    }

    /**
     * @param Shipment $shipment
     * @return Delivery
     */
    public function setShipment(Shipment $shipment)
    {
        $this->shipment = $shipment;
        return $this;
    }

    /**
     * validate function
     *
     * @throws InvalidArgumentException An error with information about required data that is missing
     */
    public function validate()
    {
        if ($this->deliveryParty === null) {
            throw new InvalidArgumentException('Missing Delivery deliveryParty');
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
        
        if ($this->actualDeliveryDate != null) {
            $writer->write([
               XmlSchema::CBC . 'ActualDeliveryDate' => $this->actualDeliveryDate->format('Y-m-d')
            ]);
        }
        if ($this->deliveryLocation != null) {
            $writer->write([
               XmlSchema::CAC . 'DeliveryLocation' => [ XmlSchema::CAC . 'Address' => $this->deliveryLocation ]
            ]);
        }
        if ($this->deliveryParty != null) {
            $writer->write([
               XmlSchema::CAC . 'DeliveryParty' => $this->deliveryParty
            ]);
        }
        if ($this->shipment != null) {
            $writer->write([
               XmlSchema::CAC . 'Shipment' => $this->shipment
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

        if ($this->actualDeliveryDate != null) {
            $arrays['ActualDeliveryDate'][] = [
                '_' => $this->actualDeliveryDate->format('Y-m-d'),
            ];
        }
        if ($this->deliveryLocation != null) {
            $arrays['DeliveryLocation'][] = [
                'Address' => $this->deliveryLocation,
            ];
        }
        if ($this->deliveryParty != null) {
            $arrays['DeliveryParty'][] = $this->deliveryParty;
        }
        if ($this->shipment != null) {
            $arrays['Shipment'][] = $this->shipment;
        }

        return $arrays;
    }
}
