<?php

/**
 * @copyright Copyright (c) 2024 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

namespace Klsheng\Myinvois\Ubl;

use JsonSerializable;
use Sabre\Xml\XmlSerializable;

/**
 * ISerializable interface
 * 
 * @author Sean Kau (kliensheng2020@gmail.com)
 * @since 1.0.0
 */
interface ISerializable extends XmlSerializable, JsonSerializable
{
}
