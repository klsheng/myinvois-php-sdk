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

/**
 * UBL extension item
 * 
 * @author Sean Kau (kliensheng2020@gmail.com)
 * @since 1.0.0
 */
class UBLExtensionItem implements ISerializable, IValidator
{
    private $uri = UblSpecifications::SIGNATURE_METHOD;
    private $content;

    /**
     * @return string
     */
    public function getURI()
    {
        return $this->uri;
    }

    /**
     * @param string $uri
     * @return UBLExtensionItem
     */
    public function setURI($uri)
    {
        $this->uri = $uri;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     * @return UBLExtensionItem
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * validate function
     *
     * @throws InvalidArgumentException An error with information about required data that is missing
     */
    public function validate()
    {
        if (empty($this->uri)) {
            throw new InvalidArgumentException('Missing UBLExtension uri');
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

        $writer->namespaceMap = array_merge($writer->namespaceMap, [
            UblSpecifications::SIG => 'sig',
            UblSpecifications::SAC => 'sac',
            UblSpecifications::SBC => 'sbc',
        ]);

        if ($this->uri !== null) {
            $writer->write([
                XmlSchema::EXT . 'ExtensionURI' => $this->uri
            ]);
        }

        if ($this->content !== null) {
            $writer->write([
                XmlSchema::EXT . 'ExtensionContent' => $this->content
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

        if ($this->uri !== null) {
            $arrays['ExtensionURI'][] = [
                '_' => $this->uri,
            ];
        }

        if ($this->content !== null) {
            $isScalar = $this->isScalarDataType($this->content);
            if($isScalar) {
                $data = [
                    '_' => $this->content,
                ];
            } else {
                $data = $this->content;
            }
            $arrays['ExtensionContent'][] = $data;
        }

        return $arrays;
    }

    private function isScalarDataType($data)
    {
        return is_scalar($data) == 1 ? true : false;
    }
}
