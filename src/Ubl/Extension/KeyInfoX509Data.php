<?php

namespace Klsheng\Myinvois\Ubl\Extension;

use InvalidArgumentException;
use Sabre\Xml\Writer;
use Klsheng\Myinvois\Ubl\ISerializable;
use Klsheng\Myinvois\Ubl\IValidator;
use Klsheng\Myinvois\Ubl\XmlSchema;

class KeyInfoX509Data implements ISerializable, IValidator
{
    private $x509Certificate;

    /**
     * @return string
     */
    public function getX509Certificate()
    {
        return $this->x509Certificate;
    }

    /**
     * @param string $x509Certificate
     * @return KeyInfoX509Data
     */
    public function setX509Certificate($x509Certificate)
    {
        $this->x509Certificate = $x509Certificate;
        return $this;
    }

    /**
     * validate function
     *
     * @throws InvalidArgumentException An error with information about required data that is missing
     */
    public function validate()
    {
        if (empty($this->x509Certificate)) {
            throw new InvalidArgumentException('Missing KeyInfoX509Data x509Certificate');
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

        if ($this->x509Certificate !== null) {
            $writer->write([
                'name' => XmlSchema::DS . 'X509Certificate',
                'value' => $this->x509Certificate,
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

        if ($this->x509Certificate !== null) {
            $arrays['X509Certificate'][] = [
                '_' => $this->x509Certificate,
            ];
        }

        return $arrays;
    }
}
