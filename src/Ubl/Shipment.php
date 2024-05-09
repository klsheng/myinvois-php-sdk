<?php

namespace Klsheng\Myinvois\Ubl;

use Sabre\Xml\Writer;

class Shipment implements ISerializable, IValidator
{
    private $id;
    private $freightAllowanceCharges = [];

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Shipment
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return AllowanceCharge[]
     */
    public function getFreightAllowanceCharges()
    {
        return $this->freightAllowanceCharges;
    }

    /**
     * @param AllowanceCharge $freightAllowanceCharge
     * @return Shipment
     */
    public function setFreightAllowanceCharge(AllowanceCharge $freightAllowanceCharge)
    {
        $this->freightAllowanceCharges = [$freightAllowanceCharge];
        return $this;
    }

    /**
     * @param AllowanceCharge[] $freightAllowanceCharges
     * @return Shipment
     */
    public function setFreightAllowanceCharges($freightAllowanceCharges)
    {
        $this->freightAllowanceCharges = $freightAllowanceCharges;
        return $this;
    }

    /**
     * @param AllowanceCharge $freightAllowanceCharge
     * @return Shipment
     */
    public function addFreightAllowanceCharge(AllowanceCharge $freightAllowanceCharge)
    {
        $this->freightAllowanceCharges[] = $freightAllowanceCharge;
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
        
        $writer->write([
            XmlSchema::CBC . 'ID' => $this->id
        ]);

        if ($this->freightAllowanceCharges !== null) {
            foreach ($this->freightAllowanceCharges as $freightAllowanceCharge) {
                $writer->write([
                    XmlSchema::CAC . 'FreightAllowanceCharge' => $freightAllowanceCharge
                ]);
            }
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

        $arrays['ID'][] = [
            '_' => $this->id,
        ];

        if ($this->freightAllowanceCharges !== null) {
            foreach ($this->freightAllowanceCharges as $freightAllowanceCharge) {
                $arrays['FreightAllowanceCharge'][] = $freightAllowanceCharge;
            }
        }

        return $arrays;
    }
}
