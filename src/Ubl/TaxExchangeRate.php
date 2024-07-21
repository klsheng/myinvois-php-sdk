<?php

/**
 * @copyright Copyright (c) 2024 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

namespace Klsheng\Myinvois\Ubl;

use InvalidArgumentException;
use Sabre\Xml\Writer;
use Klsheng\Myinvois\Ubl\Constant\CurrencyCodes;
use Klsheng\Myinvois\Ubl\Constant\UblAttributes;

class TaxExchangeRate implements ISerializable, IValidator
{
    private $sourceCurrencyCode;
    private $sourceCurrencyBaseRate;
    private $targetCurrencyCode;
    private $targetCurrencyBaseRate;
    private $calculationRate;

    /**
     * @return string
     */
    public function getSourceCurrencyCode()
    {
        return $this->sourceCurrencyCode;
    }

    /**
     * @param string $sourceCurrencyCode
     * @return TaxExchangeRate
     */
    public function setSourceCurrencyCode($sourceCurrencyCode)
    {
        $this->sourceCurrencyCode = $sourceCurrencyCode;
        return $this;
    }

    /**
     * @return float
     */
    public function getSourceCurrencyBaseRate()
    {
        return $this->sourceCurrencyBaseRate;
    }

    /**
     * @param float $sourceCurrencyBaseRate
     * @return TaxExchangeRate
     */
    public function setSourceCurrencyBaseRate($sourceCurrencyBaseRate)
    {
        $this->sourceCurrencyBaseRate = $sourceCurrencyBaseRate;
        return $this;
    }

    /**
     * @return string
     */
    public function getTargetCurrencyCode()
    {
        return $this->targetCurrencyCode;
    }

    /**
     * @param string $targetCurrencyCode
     * @return TaxExchangeRate
     */
    public function setTargetCurrencyCode($targetCurrencyCode)
    {
        $this->targetCurrencyCode = $targetCurrencyCode;
        return $this;
    }

    /**
     * @return float
     */
    public function getTargetCurrencyBaseRate()
    {
        return $this->targetCurrencyBaseRate;
    }

    /**
     * @param float $targetCurrencyBaseRate
     * @return TaxExchangeRate
     */
    public function setTargetCurrencyBaseRate($targetCurrencyBaseRate)
    {
        $this->targetCurrencyBaseRate = $targetCurrencyBaseRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getCalculationRate()
    {
        return $this->calculationRate;
    }

    /**
     * @param float $calculationRate
     * @return TaxExchangeRate
     */
    public function setCalculationRate($calculationRate)
    {
        $this->calculationRate = $calculationRate;
        return $this;
    }

    /**
     * validate function
     *
     * @throws InvalidArgumentException An error with information about required data that is missing
     */
    public function validate()
    {
        if ($this->calculationRate === null) {
            throw new InvalidArgumentException('Missing TaxExchangeRate calculationRate');
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

        if ($this->sourceCurrencyCode !== null) {
            $writer->write([
                XmlSchema::CBC . 'SourceCurrencyCode' => $this->sourceCurrencyCode
            ]);
        }

        if ($this->sourceCurrencyBaseRate !== null) {
            $writer->write([
                XmlSchema::CBC . 'SourceCurrencyBaseRate' => number_format($this->sourceCurrencyBaseRate, 2, '.', ''),
            ]);
        }

        if ($this->targetCurrencyCode !== null) {
            $writer->write([
                XmlSchema::CBC . 'TargetCurrencyCode' => $this->targetCurrencyCode
            ]);
        }

        if ($this->targetCurrencyBaseRate !== null) {
            $writer->write([
                XmlSchema::CBC . 'TargetCurrencyBaseRate' => number_format($this->targetCurrencyBaseRate, 2, '.', ''),
            ]);
        }

        if ($this->calculationRate !== null) {
            $writer->write([
                XmlSchema::CBC . 'CalculationRate' => number_format($this->calculationRate, 2, '.', ''),
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

        if ($this->sourceCurrencyCode !== null) {
            $arrays['SourceCurrencyCode'][] = [
                '_' => $this->sourceCurrencyCode,
            ];
        }

        if ($this->sourceCurrencyBaseRate !== null) {
            $arrays['SourceCurrencyBaseRate'][] = [
                '_' => (float)number_format($this->sourceCurrencyBaseRate, 2, '.', ''),
            ];
        }

        if ($this->targetCurrencyCode !== null) {
            $arrays['TargetCurrencyCode'][] = [
                '_' => $this->targetCurrencyCode,
            ];
        }

        if ($this->targetCurrencyBaseRate !== null) {
            $arrays['TargetCurrencyBaseRate'][] = [
                '_' => (float)number_format($this->targetCurrencyBaseRate, 2, '.', ''),
            ];
        }

        if ($this->calculationRate !== null) {
            $arrays['CalculationRate'][] = [
                '_' => (float)number_format($this->calculationRate, 2, '.', ''),
            ];
        }

        return $arrays;
    }
}
