<?php

namespace klsheng\myinvois\ubl;

use DateTime;
use InvalidArgumentException;
use Sabre\Xml\Writer;

class InvoicePeriod implements ISerializable, IValidator
{
    private $startDate;
    private $endDate;
    private $description;

    /**
     * @return DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param DateTime $startDate
     * @return InvoicePeriod
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
     * @return InvoicePeriod
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * validate function
     *
     * @throws InvalidArgumentException An error with information about required data that is missing
     */
    public function validate()
    {
        if ($this->description === null && ($this->startDate === null && $this->endDate === null)) {
            throw new InvalidArgumentException('Missing startDate or endDate or description');
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

        if ($this->startDate != null) {
            $writer->write([
                XmlSchema::CBC . 'StartDate' => $this->startDate->format('Y-m-d'),
            ]);
        }
        if ($this->endDate != null) {
            $writer->write([
                XmlSchema::CBC . 'EndDate' => $this->endDate->format('Y-m-d'),
            ]);
        }
        if ($this->description !== null) {
            $writer->write([
                XmlSchema::CBC . 'Description' => $this->description,
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

        if ($this->startDate != null) {
            $arrays['StartDate'][] = [
                '_' => $this->startDate->format('Y-m-d'),
            ];
        }
        if ($this->endDate != null) {
            $arrays['EndDate'][] = [
                '_' => $this->endDate->format('Y-m-d'),
            ];
        }
        if ($this->description !== null) {
            $arrays['Description'][] = [
                '_' => $this->description,
            ];
        }

        return $arrays;
    }
}
