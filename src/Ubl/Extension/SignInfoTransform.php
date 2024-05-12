<?php

namespace Klsheng\Myinvois\Ubl\Extension;

use InvalidArgumentException;
use Sabre\Xml\Writer;
use Klsheng\Myinvois\Ubl\ISerializable;
use Klsheng\Myinvois\Ubl\IValidator;
use Klsheng\Myinvois\Ubl\XmlSchema;

class SignInfoTransform implements ISerializable, IValidator
{
    private $xpath;

    /**
     * @return string
     */
    public function getXPath()
    {
        return $this->xpath;
    }

    /**
     * @param string $xpath
     * @return SignInfoTransform
     */
    public function setXPath($xpath)
    {
        $this->xpath = $xpath;
        return $this;
    }

    /**
     * validate function
     *
     * @throws InvalidArgumentException An error with information about required data that is missing
     */
    public function validate()
    {
        if (empty($this->xpath)) {
            throw new InvalidArgumentException('Missing SignInfoTransform xpath');
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
            'name' => XmlSchema::DS . 'XPath',
            'value' => $this->xpath,
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

        $arrays['XPath'][] = [
            '_' => $this->xpath,
        ];

        return $arrays;
    }
}
