<?php

/**
 * @copyright Copyright (c) 2024 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

namespace Klsheng\Myinvois\Ubl;

use InvalidArgumentException;
use Sabre\Xml\Writer;

/**
 * Contact
 * 
 * @author Sean Kau (kliensheng2020@gmail.com)
 * @since 1.0.0
 */
class Contact implements ISerializable, IValidator
{
    private $name;
    private $telephone;
    private $telefax;
    private $electronicMail;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Contact
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param string $telephone
     * @return Contact
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * @return string
     */
    public function getTelefax()
    {
        return $this->telefax;
    }

    /**
     * @param string $telefax
     * @return Contact
     */
    public function setTelefax($telefax)
    {
        $this->telefax = $telefax;
        return $this;
    }

    /**
     * @return string
     */
    public function getElectronicMail()
    {
        return $this->electronicMail;
    }

    /**
     * @param string $electronicMail
     * @return Contact
     */
    public function setElectronicMail($electronicMail)
    {
        $this->electronicMail = $electronicMail;
        return $this;
    }

    /**
     * validate function
     *
     * @throws InvalidArgumentException An error with information about required data that is missing
     */
    public function validate()
    {
        if (empty($this->telephone)) {
            throw new InvalidArgumentException('Missing telephone');
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
        
        if ($this->name !== null) {
            $writer->write([
                XmlSchema::CBC . 'Name' => $this->name
            ]);
        }

        if ($this->telephone !== null) {
            $writer->write([
                XmlSchema::CBC . 'Telephone' => $this->telephone
            ]);
        }

        if ($this->telefax !== null) {
            $writer->write([
                XmlSchema::CBC . 'Telefax' => $this->telefax
            ]);
        }

        if ($this->electronicMail !== null) {
            $writer->write([
                XmlSchema::CBC . 'ElectronicMail' => $this->electronicMail
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

        if ($this->name !== null) {
            $arrays['Name'][] = [
                '_' => $this->name,
            ];
        }

        if ($this->telephone !== null) {
            $arrays['Telephone'][] = [
                '_' => $this->telephone,
            ];
        }

        if ($this->telefax !== null) {
            $arrays['Telefax'][] = [
                '_' => $this->telefax,
            ];
        }

        if ($this->electronicMail !== null) {
            $arrays['ElectronicMail'][] = [
                '_' => $this->electronicMail,
            ];
        }

        return $arrays;
    }
}
