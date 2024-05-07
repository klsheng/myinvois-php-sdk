<?php

namespace klsheng\myinvois\ubl;

use InvalidArgumentException;
use Sabre\Xml\Writer;
use klsheng\myinvois\ubl\constant\UblAttributes;

class CommodityClassification implements ISerializable, IValidator
{
    private $itemClassificationCode;
    private $itemClassificationCodeAttributes = [];

    /**
     * @return string
     */
    public function getItemClassificationCode()
    {
        return $this->itemClassificationCode;
    }

    /**
     * @param string $itemClassificationCode
     * @param string $listID Optional
     * @param array $attributes Optional
     * @return CommodityClassification
     */
    public function setItemClassificationCode($itemClassificationCode, $listID = null, $attributes = null)
    {
        $this->itemClassificationCode = $itemClassificationCode;
        if (isset($listID)) {
            $this->itemClassificationCodeAttributes[UblAttributes::LIST_ID] = $listID;
        }
        if (isset($attributes)) {
            $this->itemClassificationCodeAttributes = array_merge($this->itemClassificationCodeAttributes, $attributes);
        }
        return $this;
    }

    /**
     * validate function
     *
     * @throws InvalidArgumentException An error with information about required data that is missing
     */
    public function validate()
    {
        if ($this->itemClassificationCode === null) {
            throw new InvalidArgumentException('Missing itemClassificationCode');
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
            'name' => XmlSchema::CBC . 'ItemClassificationCode',
            'value' => $this->itemClassificationCode,
            'attributes' => $this->itemClassificationCodeAttributes,
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

        $items = [
            '_' => $this->itemClassificationCode,
        ];

        $items = array_merge($items, $this->itemClassificationCodeAttributes);
        $arrays['ItemClassificationCode'][] = $items;

        return $arrays;
    }
}
