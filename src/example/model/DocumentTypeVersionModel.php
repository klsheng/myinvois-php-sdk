<?php

namespace klsheng\myinvois\example\model;

use klsheng\myinvois\model\BaseModel;

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
