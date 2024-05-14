<?php

namespace Klsheng\Myinvois\Ubl;

use InvalidArgumentException;
use DateTime;
use Sabre\Xml\Writer;

class PaymentMeans implements ISerializable, IValidator
{
    private $paymentMeansCode = '01';
    private $paymentDueDate;
    private $instructionId;
    private $instructionNote;
    private $paymentId;
    private $payeeFinancialAccount;

    /**
     * @return string
     */
    public function getPaymentMeansCode()
    {
        return $this->paymentMeansCode;
    }

    /**
     * @param string $paymentMeansCode
     * @return PaymentMeans
     */
    public function setPaymentMeansCode($paymentMeansCode)
    {
        $this->paymentMeansCode = $paymentMeansCode;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getPaymentDueDate()
    {
        return $this->paymentDueDate;
    }

    /**
     * @param DateTime $paymentDueDate
     * @return PaymentMeans
     */
    public function setPaymentDueDate($paymentDueDate)
    {
        $this->paymentDueDate = $paymentDueDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getInstructionId()
    {
        return $this->instructionId;
    }

    /**
     * @param string $instructionId
     * @return PaymentMeans
     */
    public function setInstructionId($instructionId)
    {
        $this->instructionId = $instructionId;
        return $this;
    }

    /**
     * @return string
     */
    public function getInstructionNote()
    {
        return $this->instructionNote;
    }

    /**
     * @param string $instructionNote
     * @return PaymentMeans
     */
    public function setInstructionNote($instructionNote)
    {
        $this->instructionNote = $instructionNote;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentId()
    {
        return $this->paymentId;
    }

    /**
     * @param string $paymentId
     * @return PaymentMeans
     */
    public function setPaymentId($paymentId)
    {
        $this->paymentId = $paymentId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPayeeFinancialAccount()
    {
        return $this->payeeFinancialAccount;
    }

    /**
     * @param mixed $payeeFinancialAccount
     * @return PaymentMeans
     */
    public function setPayeeFinancialAccount(PayeeFinancialAccount $payeeFinancialAccount)
    {
        $this->payeeFinancialAccount = $payeeFinancialAccount;
        return $this;
    }

    /**
     * validate function
     *
     * @throws InvalidArgumentException An error with information about required data that is missing
     */
    public function validate()
    {
        if (empty($this->paymentMeansCode)) {
            throw new InvalidArgumentException('Missing PaymentMeans paymentMeansCode');
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
            'name' => XmlSchema::CBC . 'PaymentMeansCode',
            'value' => $this->paymentMeansCode,
        ]);

        if ($this->paymentDueDate !== null) {
            $writer->write([
                XmlSchema::CBC . 'PaymentDueDate' => $this->paymentDueDate->format('Y-m-d')
            ]);
        }

        if ($this->instructionId !== null) {
            $writer->write([
                XmlSchema::CBC . 'InstructionID' => $this->instructionId
            ]);
        }

        if ($this->instructionNote !== null) {
            $writer->write([
                XmlSchema::CBC . 'InstructionNote' => $this->instructionNote
            ]);
        }

        if ($this->paymentId !== null) {
            $writer->write([
                XmlSchema::CBC . 'PaymentID' => $this->paymentId
            ]);
        }

        if ($this->payeeFinancialAccount !== null) {
            $writer->write([
                XmlSchema::CAC . 'PayeeFinancialAccount' => $this->payeeFinancialAccount
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

        $arrays['PaymentMeansCode'][] = [
            '_' => $this->paymentMeansCode,
        ];

        if ($this->paymentDueDate !== null) {
            $arrays['PaymentDueDate'][] = [
                '_' => $this->paymentDueDate->format('Y-m-d'),
            ];
        }

        if ($this->instructionId !== null) {
            $arrays['InstructionID'][] = [
                '_' => $this->instructionId,
            ];
        }

        if ($this->instructionNote !== null) {
            $arrays['InstructionNote'][] = [
                '_' => $this->instructionNote,
            ];
        }

        if ($this->paymentId !== null) {
            $arrays['PaymentID'][] = [
                '_' => $this->paymentId,
            ];
        }

        if ($this->payeeFinancialAccount !== null) {
            $arrays['PayeeFinancialAccount'][] = $this->payeeFinancialAccount;
        }

        return $arrays;
    }
}
