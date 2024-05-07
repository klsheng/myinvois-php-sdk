<?php

namespace klsheng\myinvois\ubl\constant;

class TaxTypeCodes
{
    const CODE = 'Code';
    const DESCRIPTION = 'Description';

    public static function getItems()
    {
        return [
            [
                TaxTypeCodes::CODE => "01",
                TaxTypeCodes::DESCRIPTION => "Sales Tax"
            ],
            [
                TaxTypeCodes::CODE => "02",
                TaxTypeCodes::DESCRIPTION => "Service Tax"
            ],
            [
                TaxTypeCodes::CODE => "03",
                TaxTypeCodes::DESCRIPTION => "Tourism Tax"
            ],
            [
                TaxTypeCodes::CODE => "04",
                TaxTypeCodes::DESCRIPTION => "High-Value Goods Tax"
            ],
            [
                TaxTypeCodes::CODE => "05",
                TaxTypeCodes::DESCRIPTION => "Sales Tax on Low Value Goods"
            ],
            [
                TaxTypeCodes::CODE => "06",
                TaxTypeCodes::DESCRIPTION => "Not Applicable"
            ]
        ];
    }
}