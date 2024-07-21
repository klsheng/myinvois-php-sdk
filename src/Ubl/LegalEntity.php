<?php

/**
 * @copyright Copyright (c) 2024 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

namespace Klsheng\Myinvois\Ubl;

use InvalidArgumentException;
use Sabre\Xml\Writer;
use Klsheng\Myinvois\Ubl\Constant\UblAttributes;

class LegalEntity implements ISerializable, IValidator
{
    private $registrationName;
    private $companyId;
    private $companyIdAttributes = [];

    /**
     * @return string
     */
    public function getRegistrationName()
    {
        return $this->registrationName;
    }

    /**
     * @param string $registrationName
     * @return LegalEntity
     */
    public function setRegistrationName($registrationName)
    {
        $this->registrationName = $registrationName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyId()
    {
        return $this->companyId;
    }

    /**
     * @param string $companyId
     * @param string $schemeID Optional
     * @param string $schemeAgencyID Optional
     * @param array $attributes Optional
     * @return LegalEntity
     */
    public function setCompanyId($companyId, $schemeID = null, $schemeAgencyID = null, $attributes = null)
    {
        $this->companyId = $companyId;
        if (isset($schemeID)) {
            $this->companyIdAttributes[UblAttributes::SCHEME_ID] = $schemeID;
        }
        if (isset($schemeAgencyID)) {
            $this->companyIdAttributes[UblAttributes::SCHEME_AGENCY_ID] = $schemeAgencyID;
        }
        if (isset($attributes)) {
            $this->companyIdAttributes = array_merge($this->companyIdAttributes, $attributes);
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
        if (empty($this->registrationName)) {
            throw new InvalidArgumentException('Missing registrationName');
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
        
        $writer->write([
            XmlSchema::CBC . 'RegistrationName' => $this->registrationName,
        ]);
        if ($this->companyId !== null) {
            $writer->write([
                [
                    'name' => XmlSchema::CBC . 'CompanyID',
                    'value' => $this->companyId,
                    'attributes' => $this->companyIdAttributes,
                ],
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

        $arrays['RegistrationName'][] = [
            '_' => $this->registrationName,
        ];

        if ($this->companyId !== null) {
            $items = [
                '_' => $this->companyId,
            ];
    
            $items = array_merge($items, $this->companyIdAttributes);

            $arrays['CompanyID'][] = $items;
        }

        return $arrays;
    }
}
