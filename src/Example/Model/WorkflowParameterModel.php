<?php

namespace Klsheng\Myinvois\Example\Model;

use Klsheng\Myinvois\Model\BaseModel;

class WorkflowParameterModel extends BaseModel
{
    public $id;
    public $parameter;
    public $value;
    public $activeFrom;
    public $activeTo;
}
