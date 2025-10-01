<?php

/**
 * @copyright Copyright (c) 2024 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

namespace Klsheng\Myinvois\Ubl;

use Klsheng\Myinvois\Ubl\Configuration\NumberFormatConfiguration;

/**
 * Number formatting utility class
 * 
 * @author Sean Kau (kliensheng2020@gmail.com)
 * @since 1.0.13
 */
class NumberFormatter
{
    /**
     * Format number with configured precision
     *
     * @param float|int $number
     * @param int|null $precision Override default precision
     * @return string
     */
    public static function format($number, ?int $precision = null): string
    {
        $precision = $precision ?? NumberFormatConfiguration::getPrecision();
        return number_format($number, $precision, NumberFormatConfiguration::getDecimalSeparator(), NumberFormatConfiguration::getThousandsSeparator());
    }
    
    /**
     * Format number as float with configured precision
     *
     * @param float|int $number
     * @param int|null $precision Override default precision
     * @return float
     */
    public static function formatAsFloat($number, ?int $precision = null): float
    {
        return (float) self::format($number, $precision);
    }
}
