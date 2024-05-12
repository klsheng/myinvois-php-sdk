<?php

namespace Klsheng\Myinvois\Ubl\Extension;

use DateTime;
use InvalidArgumentException;
use Sabre\Xml\Writer;
use Klsheng\Myinvois\Ubl\ISerializable;
use Klsheng\Myinvois\Ubl\IValidator;
use Klsheng\Myinvois\Ubl\XmlSchema;

class SignedSignatureProperties implements ISerializable, IValidator
{
    private $signingTime;
    private $signingCertificate;

    /**
     * @return DateTime
     */
    public function getSigningTime()
    {
        return $this->signedSignatureProperties;
    }

    /**
     * @param DateTime $signingTime
     * @return SignedSignatureProperties
     */
    public function setSigningTime(DateTime $signingTime)
    {
        $this->signingTime = $signingTime;
        return $this;
    }

    /**
     * validate function
     *
     * @throws InvalidArgumentException An error with information about required data that is missing
     */
    public function validate()
    {
        if (!$this->signingTime instanceof DateTime) {
            throw new InvalidArgumentException('Invalid SignedSignatureProperties signingTime');
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
            XmlSchema::XADES . 'SigningTime' => $this->signingTime->format('Y-m-d\TH:i:s\Z'),
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

        $arrays['SigningTime'][] = [
            '_' => $this->signingTime->format('Y-m-d\TH:i:s\Z'),
        ];

        return $arrays;
    }
}
