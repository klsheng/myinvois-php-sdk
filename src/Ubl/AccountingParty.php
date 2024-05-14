<?php

namespace Klsheng\Myinvois\Ubl;

use InvalidArgumentException;
use Sabre\Xml\Writer;
use Klsheng\Myinvois\Ubl\Constant\UblAttributes;

class AccountingParty implements ISerializable, IValidator
{
    private $customerAssignedAccountID;
    private $supplierAssignedAccountID;
    private $additionalAccountID;
    private $additionalAccountIDAttributes = [
        UblAttributes::SCHEME_AGENCY_NAME => 'CertEX',
    ];
    private $party;

    /**
     * @return string
     */
    public function getCustomerAssignedAccountID()
    {
        return $this->customerAssignedAccountID;
    }

    /**
     * @param string $customerAssignedAccountID
     * @return AccountingParty
     */
    public function setCustomerAssignedAccountID($customerAssignedAccountID)
    {
        $this->customerAssignedAccountID = $customerAssignedAccountID;
        return $this;
    }

    /**
     * @return string
     */
    public function getSupplierAssignedAccountID()
    {
        return $this->supplierAssignedAccountID;
    }

    /**
     * @param string $supplierAssignedAccountID
     * @return AccountingParty
     */
    public function setSupplierAssignedAccountID($supplierAssignedAccountID)
    {
        $this->supplierAssignedAccountID = $supplierAssignedAccountID;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalAccountID()
    {
        return $this->additionalAccountID;
    }

    /**
     * @param string $additionalAccountID
     * @param string $schemeAgencyName Optional
     * @param array $attributes Optional
     * @return AccountingParty
     */
    public function setAdditionalAccountID($additionalAccountID, $schemeAgencyName = null, $attributes = null)
    {
        $this->additionalAccountID = $additionalAccountID;
        if (isset($schemeAgencyName)) {
            $this->additionalAccountIDAttributes[UblAttributes::SCHEME_AGENCY_NAME] = $schemeAgencyName;
        }
        if (isset($attributes)) {
            $this->additionalAccountIDAttributes = array_merge($this->additionalAccountIDAttributes, $attributes);
        }
        return $this;
    }

    /**
     * @return Party
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     * @param Party $party
     * @return AccountingParty
     */
    public function setParty(Party $party)
    {
        $this->party = $party;
        return $this;
    }

    /**
     * validate function
     *
     * @throws InvalidArgumentException An error with information about required data that is missing
     */
    public function validate()
    {
        if ($this->party === null) {
            throw new InvalidArgumentException('Missing AccountingParty party');
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

        if ($this->customerAssignedAccountID !== null) {
            $writer->write([
                XmlSchema::CBC . 'CustomerAssignedAccountID' => $this->customerAssignedAccountID
            ]);
        }

        if ($this->supplierAssignedAccountID !== null) {
            $writer->write([
                XmlSchema::CBC . 'SupplierAssignedAccountID' => $this->supplierAssignedAccountID
            ]);
        }

        if ($this->additionalAccountID !== null) {
            $writer->write([
                [
                    'name' => XmlSchema::CBC . 'AdditionalAccountID',
                    'value' => $this->additionalAccountID,
                    'attributes' => $this->additionalAccountIDAttributes,
                ],
            ]);
        }

        $writer->write([
            XmlSchema::CAC . 'Party' => $this->party
        ]);
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

        if ($this->customerAssignedAccountID !== null) {
            $arrays['CustomerAssignedAccountID'][] = [
                '_' => $this->customerAssignedAccountID,
            ];
        }

        if ($this->supplierAssignedAccountID !== null) {
            $arrays['SupplierAssignedAccountID'][] = [
                '_' => $this->supplierAssignedAccountID,
            ];
        }

        if ($this->additionalAccountID !== null) {
            $items = [
                '_' => $this->additionalAccountID,
            ];
    
            $items = array_merge($items, $this->additionalAccountIDAttributes);
            $arrays['AdditionalAccountID'][] = $items;
        }

        $arrays['Party'][] = $this->party;

        return $arrays;
    }
}
