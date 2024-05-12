<?php

namespace Klsheng\Myinvois\Example\Model;

use Klsheng\Myinvois\Model\AbstractModel;

class DeliveryAttemptModel extends AbstractModel
{
    public $attemptDateTime;
    public $status;
    public $statusDetails;
}
