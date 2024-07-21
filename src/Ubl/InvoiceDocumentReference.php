<?php

/**
 * @copyright Copyright (c) 2024 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

namespace Klsheng\Myinvois\Ubl;

use InvalidArgumentException;
use Sabre\Xml\Writer;

class InvoiceDocumentReference implements ISerializable, IValidator
{
    private $id;
    private $uuid;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return InvoiceDocumentReference
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getUuid()
    {
        return $this->id;
    }

    /**
     * @param string $uuid
     * @return InvoiceDocumentReference
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
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
            throw new InvalidArgumentException('Missing InvoiceDocumentReference id');
        }

        if (empty($this->uuid)) {
            throw new InvalidArgumentException('Missing InvoiceDocumentReference uuid');
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
            XmlSchema::CBC . 'ID' => $this->id
        ]);

        $writer->write([
            XmlSchema::CBC . 'UUID' => $this->uuid
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

        $arrays['UUID'][] = [
            '_' => $this->uuid,
        ];

        return $arrays;
    }
}
