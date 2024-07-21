<?php

/**
 * @copyright Copyright (c) 2024 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

namespace Klsheng\Myinvois\Ubl\Extension;

use InvalidArgumentException;
use Sabre\Xml\Writer;
use Klsheng\Myinvois\Ubl\ISerializable;
use Klsheng\Myinvois\Ubl\IValidator;
use Klsheng\Myinvois\Ubl\XmlSchema;
use Klsheng\Myinvois\Ubl\Constant\UblSpecifications;

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
                'attributes' => [
                    'xmlns:sig' => UblSpecifications::SIG,
                    'xmlns:sac' => UblSpecifications::SAC,
                    'xmlns:sbc' => UblSpecifications::SBC,
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
            $arrays['UBLDocumentSignatures'][] = [
                'SignatureInformation' => [
                    $this->signatureInformation,
                ]
            ];
        }

        return $arrays;
    }
}
