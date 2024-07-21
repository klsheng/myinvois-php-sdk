<?php

/**
 * @copyright Copyright (c) 2024 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

namespace Klsheng\Myinvois\Ubl\Constant;

class PaymentMethodCodes
{
    const CODE = 'Code';
    const PAYMENT_METHOD = 'Payment Method';

    public static function getItems()
    {
        return [
            [
                PaymentMethodCodes::CODE => '01',
                PaymentMethodCodes::PAYMENT_METHOD => 'Cash'
            ],
            [
                PaymentMethodCodes::CODE => '02',
                PaymentMethodCodes::PAYMENT_METHOD => 'Cheque'
            ],
            [
                PaymentMethodCodes::CODE => '03',
                PaymentMethodCodes::PAYMENT_METHOD => 'Bank Transfer'
            ],
            [
                PaymentMethodCodes::CODE => '04',
                PaymentMethodCodes::PAYMENT_METHOD => 'Credit Card'
            ],
            [
                PaymentMethodCodes::CODE => '05',
                PaymentMethodCodes::PAYMENT_METHOD => 'Debit Card'
            ],
            [
                PaymentMethodCodes::CODE => '06',
                PaymentMethodCodes::PAYMENT_METHOD => 'e-Wallet / Digital Wallet'
            ],
            [
                PaymentMethodCodes::CODE => '07',
                PaymentMethodCodes::PAYMENT_METHOD => 'Digital Bank'
            ],
            [
                PaymentMethodCodes::CODE => '08',
                PaymentMethodCodes::PAYMENT_METHOD => 'Others'
            ]
        ];
    }
}