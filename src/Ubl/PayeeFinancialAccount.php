<?php

/**
 * @copyright Copyright (c) 2024 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

namespace Klsheng\Myinvois\Ubl;

use InvalidArgumentException;
use Sabre\Xml\Writer;

class PayeeFinancialAccount implements ISerializable, IValidator
{
    private $id;
    private $name;
    private $financialInstitutionBranch;


    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return PayeeFinancialAccount
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return PayeeFinancialAccount
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return FinancialInstitutionBranch
     */
    public function getFinancialInstitutionBranch()
    {
        return $this->financialInstitutionBranch;
    }

    /**
     * @param FinancialInstitutionBranch $financialInstitutionBranch
     * @return PayeeFinancialAccount
     */
    public function setFinancialInstitutionBranch(FinancialInstitutionBranch $financialInstitutionBranch)
    {
        $this->financialInstitutionBranch = $financialInstitutionBranch;
        return $this;
    }

    /**
     * validate function
     *
     * @throws InvalidArgumentException An error with information about required data that is missing
     */
    public function validate()
    {
        if (empty($this->id)) {
            throw new InvalidArgumentException('Missing PayeeFinancialAccount id');
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
            'name' => XmlSchema::CBC . 'ID',
            'value' => $this->id,
        ]);

        if ($this->name !== null) {
            $writer->write([
                XmlSchema::CBC . 'Name' => $this->name
            ]);
        }

        if ($this->financialInstitutionBranch !== null) {
            $writer->write([
                XmlSchema::CAC . 'FinancialInstitutionBranch' => $this->financialInstitutionBranch
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

        $arrays['ID'][] = [
            '_' => $this->id,
        ];

        if ($this->name !== null) {
            $arrays['Name'][] = [
                '_' => $this->name,
            ];
        }

        if ($this->financialInstitutionBranch !== null) {
            $arrays['FinancialInstitutionBranch'][] = $this->financialInstitutionBranch;
        }

        return $arrays;
    }
}
