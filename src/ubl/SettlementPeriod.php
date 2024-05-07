<?php

namespace klsheng\myinvois\ubl;

use DateTime;
use InvalidArgumentException;
use Sabre\Xml\Writer;
use klsheng\myinvois\ubl\constant\UblAttributes;

class SettlementPeriod implements ISerializable, IValidator
{
    private $startDate;
    private $endDate;

    /**
     * @return DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param DateTime $startDate
     * @return SettlementPeriod
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param DateTime $endDate
     * @return SettlementPeriod
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * validate function
     *
     * @throws InvalidArgumentException An error with information about required data that is missing
     */
    public function validate()
    {
        if ($this->startDate === null) {
            throw new InvalidArgumentException('Missing startDate');
        }
        if ($this->endDate === null) {
            throw new InvalidArgumentException('Missing endDate');
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
            XmlSchema::CBC . 'StartDate' => $this->startDate->format('Y-m-d'),
            XmlSchema::CBC . 'EndDate' => $this->endDate->format('Y-m-d'),
        ]);

        $writer->write([
            [
                'name' => XmlSchema::CBC . 'DurationMeasure',
                'value' => $this->endDate->diff($this->startDate)->format('%d'),
                'attributes' => [
                    UblAttributes::UNIT_CODE => 'DAY'
                ]
            ]
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

        $arrays['StartDate'][] = [
            '_' => $this->startDate->format('Y-m-d'),
        ];

        $arrays['EndDate'][] = [
            '_' => $this->endDate->format('Y-m-d'),
        ];

        $arrays['DurationMeasure'][] = [
            '_' => $this->endDate->diff($this->startDate)->format('%d'),
            UblAttributes::UNIT_CODE => 'DAY',
        ];

        return $arrays;
    }
}
