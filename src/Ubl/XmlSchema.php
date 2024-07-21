<?php

/**
 * @copyright Copyright (c) 2024 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

namespace Klsheng\Myinvois\Ubl;

use Klsheng\Myinvois\Ubl\Constant\UblSpecifications;

/**
 * XML schema
 * 
 * @author Sean Kau (kliensheng2020@gmail.com)
 * @since 1.0.0
 */
class XmlSchema
{
    const CBC = '{' . UblSpecifications::CBC . '}';
    const CAC = '{' . UblSpecifications::CAC . '}';
    const EXT = '{' . UblSpecifications::EXT . '}';

    const SIG = '{' . UblSpecifications::SIG . '}';
    const SAC = '{' . UblSpecifications::SAC . '}';
    const SBC = '{' . UblSpecifications::SBC . '}';

    const DS = '{http://www.w3.org/2000/09/xmldsig#}';
    const XADES = '{http://uri.etsi.org/01903/v1.3.2#}';
}
