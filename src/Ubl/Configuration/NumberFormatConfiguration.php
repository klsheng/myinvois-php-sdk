<?php

/**
 * @copyright Copyright (c) 2024 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

namespace Klsheng\Myinvois\Ubl\Configuration;

/**
 * Number formatting configuration class
 * 
 * @author Sean Kau (kliensheng2020@gmail.com)
 * @since 1.0.13
 */
class NumberFormatConfiguration
{
    /**
     * Default decimal precision
     */
    private const DEFAULT_PRECISION = 2;
    
    /**
     * Decimal precision for formatting
     *
     * @var int
     */
    private static $precision = self::DEFAULT_PRECISION;
    
    /**
     * Decimal separator
     *
     * @var string
     */
    private static $decimalSeparator = '.';
    
    /**
     * Thousands separator
     *
     * @var string
     */
    private static $thousandsSeparator = '';
    
    /**
     * Set decimal precision
     *
     * @param int $precision
     * @return void
     */
    public static function setPrecision(int $precision): void
    {
        self::$precision = $precision;
    }
    
    /**
     * Get current decimal precision
     *
     * @return int
     */
    public static function getPrecision(): int
    {
        return self::$precision;
    }
    
    /**
     * Set decimal separator
     *
     * @param string $separator
     * @return void
     */
    public static function setDecimalSeparator(string $separator): void
    {
        self::$decimalSeparator = $separator;
    }

    /**
     * Get current decimal separator
     *
     * @return string
     */
    public static function getDecimalSeparator(): string
    {
        return self::$decimalSeparator;
    }
    
    /**
     * Set thousands separator
     *
     * @param string $separator
     * @return void
     */
    public static function setThousandsSeparator(string $separator): void
    {
        self::$thousandsSeparator = $separator;
    }

    /**
     * Get current thousands separator
     *
     * @return string
     */
    public static function getThousandsSeparator(): string
    {
        return self::$thousandsSeparator;
    }
    
    /**
     * Reset to default settings
     *
     * @return void
     */
    public static function reset(): void
    {
        self::$precision = self::DEFAULT_PRECISION;
        self::$decimalSeparator = '.';
        self::$thousandsSeparator = '';
    }
}
