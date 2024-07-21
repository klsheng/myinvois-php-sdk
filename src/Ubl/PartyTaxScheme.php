<?php

/**
 * @copyright Copyright (c) 2024 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

namespace Klsheng\Myinvois\Ubl;

use InvalidArgumentException;
use Sabre\Xml\Writer;

class PartyTaxScheme implements ISerializable, IValidator
{
    private $registrationName;
    private $companyId;
    private $taxScheme;

    /**
     * @return string
     */
    public function getRegistrationName()
    {
        return $this->registrationName;
    }

    /**
     * @param string $registrationName
     * @return PartyTaxScheme
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
     * @return PartyTaxScheme
     */
    public function setCompanyId($companyId)
    {
        $this->companyId = $companyId;
        return $this;
    }

    /**
     * @param TaxScheme $taxScheme.
     * @return mixed
     */
    public function getTaxScheme()
    {
        return $this->taxScheme;
    }

    /**
     * @param TaxScheme $taxScheme
     * @return PartyTaxScheme
     */
    public function setTaxScheme(TaxScheme $taxScheme)
    {
        $this->taxScheme = $taxScheme;
        return $this;
    }

    /**
     * validate function
     *
     * @throws InvalidArgumentException An error with information about required data that is missing
     */
    public function validate()
    {
        if ($this->taxScheme === null) {
            throw new InvalidArgumentException('Missing TaxScheme');
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
        
        if ($this->registrationName !== null) {
            $writer->write([
                XmlSchema::CBC . 'RegistrationName' => $this->registrationName
            ]);
        }
        if ($this->companyId !== null) {
            $writer->write([
                XmlSchema::CBC . 'CompanyID' => $this->companyId
            ]);
        }

        $writer->write([
            XmlSchema::CAC . 'TaxScheme' => $this->taxScheme
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

        if ($this->registrationName !== null) {
            $arrays['RegistrationName'][] = [
                '_' => $this->registrationName,
            ];
        }
        if ($this->companyId !== null) {
            $arrays['CompanyID'][] = [
                '_' => $this->companyId,
            ];
        }

        $arrays['TaxScheme'][] = $this->taxScheme;

        return $arrays;
    }
}
