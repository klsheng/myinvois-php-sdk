<?php

namespace klsheng\myinvois\example\model;

use klsheng\myinvois\model\BaseModel;

class WorkflowParameterModel extends BaseModel
{
    public $id;
    public $parameter;
    public $value;
    public $activeFrom;
    public $activeTo;
}
