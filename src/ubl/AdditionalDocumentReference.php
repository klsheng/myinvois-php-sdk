<?php

namespace klsheng\myinvois\ubl;

use Sabre\Xml\Writer;

class AdditionalDocumentReference implements ISerializable, IValidator
{
    private $id;
    private $documentType;
    private $documentDescription;
    private $attachment;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return AdditionalDocumentReference
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getDocumentType()
    {
        return $this->documentType;
    }

    /**
     * @param string $documentType
     * @return AdditionalDocumentReference
     */
    public function setDocumentType($documentType)
    {
        $this->documentType = $documentType;
        return $this;
    }

    /**
     * @return string
     */
    public function getDocumentDescription()
    {
        return $this->documentDescription;
    }

    /**
     * @param string $documentDescription
     * @return AdditionalDocumentReference
     */
    public function setDocumentDescription($documentDescription)
    {
        $this->documentDescription = $documentDescription;
        return $this;
    }

    /**
     * @return Attachment
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * @param Attachment $attachment
     * @return AdditionalDocumentReference
     */
    public function setAttachment(Attachment $attachment)
    {
        $this->attachment = $attachment;
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

        $writer->write([ XmlSchema::CBC . 'ID' => $this->id ]);

        if ($this->documentType !== null) {
            $writer->write([
                XmlSchema::CBC . 'DocumentType' => $this->documentType
            ]);
        }

        if ($this->documentDescription !== null) {
            $writer->write([
                XmlSchema::CBC . 'DocumentDescription' => $this->documentDescription
            ]);
        }

        if ($this->attachment !== null) {
            $writer->write([
              XmlSchema::CAC . 'Attachment' => $this->attachment
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

        if ($this->documentType !== null) {
            $arrays['DocumentType'][] = [
                '_' => $this->documentType,
            ];
        }

        if ($this->documentDescription !== null) {
            $arrays['DocumentDescription'][] = [
                '_' => $this->documentDescription,
            ];
        }

        if ($this->attachment !== null) {
            $arrays['Attachment'][] = $this->attachment;
        }

        return $arrays;
    }
}
