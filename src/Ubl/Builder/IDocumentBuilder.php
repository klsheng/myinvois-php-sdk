<?php

/**
 * @copyright Copyright (c) 2024 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

namespace Klsheng\Myinvois\Ubl\Builder;

use DateTime;
use Klsheng\Myinvois\Ubl\Invoice;

interface IDocumentBuilder
{
    /**
     * @param Invoice $invoice Invoice is base model of all documents
     * @return IDocumentBuilder
     */
    public function setDocument(Invoice $invoice);

    /**
     * Create signature and apply into Invoice object
     * 
     * @param string $certFilePath Certificate file path
     * @param string $certPrivateKeyFilePath Private key file path
     * @param string $passphrase Password to decrypt Certificate
     * @return IDocumentBuilder
     */
    public function createSignature($certFilePath, $certPrivateKeyFilePath, $passphrase = null);

    /**
     * Build Invoice object into string
     * 
     * @return string
     */
    public function build();
}
