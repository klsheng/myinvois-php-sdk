<?php

namespace Klsheng\Myinvois\Example\Model;

use Klsheng\Myinvois\Model\BaseModel;

class DocumentTypeVersionModel extends BaseModel
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
