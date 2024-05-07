<?php

namespace klsheng\myinvois\ubl;

use Exception;
use InvalidArgumentException;
use Sabre\Xml\Writer;

class Attachment implements ISerializable, IValidator
{
    private $filePath;
    private $externalReference;

    /**
     * @throws Exception exception when the mime type cannot be determined
     * @return string
     */
    public function getFileMimeType()
    {
        if (($mime_type = mime_content_type($this->filePath)) !== false) {
            return $mime_type;
        }

        throw new Exception('Could not determine mime_type of '.$this->filePath);
    }

    /**
     * @return string
     */
    public function getFilePath()
    {
        return $this->filePath;
    }

    /**
     * @param string $filePath
     * @return Attachment
     */
    public function setFilePath($filePath)
    {
        $this->filePath = $filePath;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalReference()
    {
        return $this->externalReference;
    }

    /**
     * @param string $externalReference
     * @return Attachment
     */
    public function setExternalReference($externalReference)
    {
        $this->externalReference = $externalReference;
        return $this;
    }

    /**
     * validate function
     *
     * @throws InvalidArgumentException An error with information about required data that is missing
     */
    public function validate()
    {
        if ($this->filePath === null && $this->externalReference === null) {
            throw new InvalidArgumentException('Attachment must have a filePath or an ExternalReference');
        }

        if ($this->filePath !== null && !file_exists($this->filePath)) {
            throw new InvalidArgumentException('Attachment at filePath does not exist');
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

        if ($this->filePath) {
            $fileContents = base64_encode(file_get_contents($this->filePath));
            $mimeType = $this->getFileMimeType();

            $writer->write([
                'name' => XmlSchema::CBC . 'EmbeddedDocumentBinaryObject',
                'value' => $fileContents,
                'attributes' => [
                    'mimeCode' => $mimeType,
                    'filename' => basename($this->filePath)
                ]
            ]);
        }

        if ($this->externalReference) {
            $writer->writeElement(
                XmlSchema::CAC . 'ExternalReference',
                [ XmlSchema::CBC . 'URI' => $this->externalReference ]
            );
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

        if ($this->filePath) {
            $fileContents = base64_encode(file_get_contents($this->filePath));
            $mimeType = $this->getFileMimeType();

            $items = [
                '_' => $fileContents,
            ];

            $items['mimeCode'] = $mimeType;
            $items['filename'] = basename($this->filePath);

            $arrays['EmbeddedDocumentBinaryObject'][] = $items;
        }

        if ($this->externalReference) {
            $arrays['ExternalReference'][] = [
                'URI' => $this->externalReference,
            ];
        }

        return $arrays;
    }
}
