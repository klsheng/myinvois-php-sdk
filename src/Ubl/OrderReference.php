<?php

/**
 * @copyright Copyright (c) 2024 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

namespace Klsheng\Myinvois\Ubl;

use InvalidArgumentException;
use DateTime;
use Sabre\Xml\Writer;

/**
 * Order reference
 * 
 * @author Sean Kau (kliensheng2020@gmail.com)
 * @since 1.0.0
 */
class OrderReference implements ISerializable, IValidator
{
    private $id;
    private $salesOrderId;
    private $issueDate;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return OrderReference
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getSalesOrderId()
    {
        return $this->salesOrderId;
    }

    /**
     * @return DateTime
     */
    public function getIssueDate()
    {
        return $this->issueDate;
    }

    /**
     * @param DateTime $issueDate
     * @return OrderReference
     */
    public function setIssueDate($issueDate)
    {
        $this->issueDate = $issueDate;
        return $this;
    }

    /**
     * @param string $salesOrderId
     * @return OrderReference
     */
    public function setSalesOrderId($salesOrderId)
    {
        $this->salesOrderId = $salesOrderId;
        return $this;
    }

    /**
     * validate function
     *
     * @throws InvalidArgumentException An error with information about required data that is missing
     */
    public function validate()
    {
        if (empty($this->id)) {
            throw new InvalidArgumentException('Missing OrderReference id');
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

        if ($this->id !== null) {
            $writer->write([XmlSchema::CBC . 'ID' => $this->id]);
        }
        if ($this->salesOrderId !== null) {
            $writer->write([XmlSchema::CBC . 'SalesOrderID' => $this->salesOrderId]);
        }
        if ($this->issueDate !== null) {
            $writer->write([
                XmlSchema::CBC . 'IssueDate' => $this->issueDate->format('Y-m-d'),
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

        if ($this->id !== null) {
            $arrays['ID'][] = [
                '_' => $this->id,
            ];
        }
        if ($this->salesOrderId !== null) {
            $arrays['SalesOrderID'][] = [
                '_' => $this->salesOrderId,
            ];
        }
        if ($this->issueDate !== null) {
            $arrays['IssueDate'][] = [
                '_' => $this->issueDate->format('Y-m-d'),
            ];
        }

        return $arrays;
    }
}
