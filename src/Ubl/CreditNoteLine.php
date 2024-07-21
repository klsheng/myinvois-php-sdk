<?php

/**
 * @copyright Copyright (c) 2024 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

namespace Klsheng\Myinvois\Ubl;

/**
 * Credit note line
 * 
 * @author Sean Kau (kliensheng2020@gmail.com)
 * @since 1.0.0
 */
class CreditNoteLine extends InvoiceLine
{
    public $xmlTagName = 'InvoiceLine'; //'CreditNoteLine'; // MyInvois System re-use back same tag name
    protected $quantityLabel = 'InvoicedQuantity'; //'CreditedQuantity'; // MyInvois System re-use back same tag name

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
