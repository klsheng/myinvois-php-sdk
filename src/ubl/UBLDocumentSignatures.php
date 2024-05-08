<?php

namespace klsheng\myinvois\ubl;

use InvalidArgumentException;
use Sabre\Xml\Writer;

class UBLDocumentSignatures implements ISerializable, IValidator
{
    private $signatureInformation;

    /**
     * @return SignatureInformation
     */
    public function getSignatureInformation()
    {
        return $this->signatureInformation;
    }

    /**
     * @param SignatureInformation $signatureInformation
     * @return UBLDocumentSignatures
     */
    public function setSignatureInformation(SignatureInformation $signatureInformation)
    {
        $this->signatureInformation = $signatureInformation;
        return $this;
    }

    /**
     * validate function
     *
     * @throws InvalidArgumentException An error with information about required data that is missing
     */
    public function validate()
    {
        if($this->signatureInformation === null) {
            throw new InvalidArgumentException('Missing UBLDocumentSignatures signatureInformation');
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

        if ($this->signatureInformation !== null) {
            $writer->write([
                'name' => XmlSchema::SIG . 'UBLDocumentSignatures',
                'value' => [
                    XmlSchema::SAC . 'SignatureInformation' => $this->signatureInformation,
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

        if ($this->signatureInformation !== null) {
            $arrays['UBLDocumentSignatures'][] = $this->signatureInformation;
        }

        return $arrays;
    }
}
