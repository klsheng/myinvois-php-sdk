<?php

/**
 * @copyright Copyright (c) 2024 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

namespace Klsheng\Myinvois\Ubl;

class DebitNoteLine extends InvoiceLine
{
    public $xmlTagName = 'InvoiceLine'; //'DebitNoteLine'; // MyInvois System re-use back same tag name
    protected $quantityLabel = 'InvoicedQuantity'; //'DebitedQuantity'; // MyInvois System re-use back same tag name

    /**
     * @return float
     */
    public function getDebitedQuantity()
    {
        return $this->invoicedQuantity;
    }

    /**
     * @param float $debitedQuantity
     * @param string $unitCode Optional
     * @param array $attributes Optional
     * @return DebitNoteLine
     */
    public function setDebitedQuantity($debitedQuantity, $unitCode = null, $attributes = null)
    {
        $this->invoicedQuantity = $debitedQuantity;
        if (isset($unitCode)) {
            $this->invoicedQuantityAttributes[UblAttributes::UNIT_CODE] = $unitCode;
        }
        if (isset($attributes)) {
            $this->invoicedQuantityAttributes = array_merge($this->invoicedQuantityAttributes, $attributes);
        }
        return $this;
    }
}
