<?php

namespace Klsheng\Myinvois\Ubl;

use Sabre\Xml\Writer;

class FinancialInstitutionBranch implements ISerializable, IValidator
{
    private $id;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return FinancialInstitutionBranch
     */
    public function setId($id)
    {
        $this->id = $id;
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

        return $arrays;
    }
}
