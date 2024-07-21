<?php

/**
 * @copyright Copyright (c) 2024 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

namespace Klsheng\Myinvois\Ubl\Extension;

use DateTime;
use InvalidArgumentException;
use Sabre\Xml\Writer;
use Klsheng\Myinvois\Ubl\ISerializable;
use Klsheng\Myinvois\Ubl\IValidator;
use Klsheng\Myinvois\Ubl\XmlSchema;

/**
 * Signed signature properties
 * 
 * @author Sean Kau (kliensheng2020@gmail.com)
 * @since 1.0.0
 */
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
     * @return SigningCertificate
     */
    public function getSigningCertificate()
    {
        return $this->signingCertificate;
    }

    /**
     * @param SigningCertificate $signingCertificate
     * @return SignedSignatureProperties
     */
    public function setSigningCertificate(SigningCertificate $signingCertificate)
    {
        $this->signingCertificate = $signingCertificate;
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

        if ($this->signingCertificate === null) {
            throw new InvalidArgumentException('Invalid SignedSignatureProperties signingCertificate');
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

        $writer->write([
            XmlSchema::XADES . 'SigningCertificate' => $this->signingCertificate,
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

        $arrays['SigningCertificate'][] = $this->signingCertificate;

        return $arrays;
    }
}
