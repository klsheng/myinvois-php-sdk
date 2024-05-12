<?php

namespace Klsheng\Myinvois\Example\Model;

use Klsheng\Myinvois\Model\AbstractModel;

class WorkflowParameterModel extends AbstractModel
{
    public $id;
    public $parameter;
    public $value;
    public $activeFrom;
    public $activeTo;
}
