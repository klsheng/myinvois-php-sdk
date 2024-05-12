<?php

namespace Klsheng\Myinvois\Example\Model;

use Klsheng\Myinvois\Model\AbstractModel;

class AccessTokenModel extends AbstractModel
{
    public $access_token;
    public $expires_in;
    public $token_type;
    public $scope;
}
