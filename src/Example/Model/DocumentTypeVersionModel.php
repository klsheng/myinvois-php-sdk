<?php

namespace Klsheng\Myinvois\Example\Model;

use Klsheng\Myinvois\Model\AbstractModel;

class DocumentTypeVersionModel extends AbstractModel
{
    public $id;
    public $invoiceTypeCode;
    public $name;
    public $description;
    public $activeFrom;
    public $activeTo;
    public $versionNumber;
    public $status;
    public $jsonschema;
    public $xmlschema;
}
