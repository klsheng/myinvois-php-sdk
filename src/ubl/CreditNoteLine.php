<?php

namespace klsheng\myinvois\ubl;

class CreditNoteLine extends InvoiceLine
{
    public $xmlTagName = 'CreditNoteLine';
    protected $quantityLabel = 'CreditedQuantity';

    /**
     * @return float
     */
    public function getCreditedQuantity()
    {
        return $this->invoicedQuantity;
    }

    /**
     * @param float $creditedQuantity
     * @param string $unitCode Optional
     * @param array $attributes Optional
     * @return CreditNoteLine
     */
    public function setCreditedQuantity($creditedQuantity, $unitCode = null, $attributes = null)
    {
        $this->invoicedQuantity = $creditedQuantity;
        if (isset($unitCode)) {
            $this->invoicedQuantityAttributes[UblAttributes::UNIT_CODE] = $unitCode;
        }
        if (isset($attributes)) {
            $this->invoicedQuantityAttributes = array_merge($this->invoicedQuantityAttributes, $attributes);
        }
        return $this;
    }
}
