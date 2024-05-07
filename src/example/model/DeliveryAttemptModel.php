<?php

namespace klsheng\myinvois\example\model;

use klsheng\myinvois\model\BaseModel;

class DeliveryAttemptModel extends BaseModel
{
    public $attemptDateTime;
    public $status;
    public $statusDetails;
}
