<?php

/**
 * @copyright Copyright (c) 2024 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

namespace Klsheng\Myinvois\Ubl;

use Sabre\Xml\Writer;

class AddressLine implements ISerializable, IValidator
{
    private $line;

    /**
     * @return string
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * @param string $line
     * @return AddressLine
     */
    public function setLine($line)
    {
        $this->line = $line;
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

        if ($this->line !== null) {
            $writer->write([
                XmlSchema::CBC . 'Line' => $this->line
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

        if ($this->line !== null) {
            $arrays['Line'][] = [
                '_' => $this->line,
            ];
        }

        return $arrays;
    }
}
