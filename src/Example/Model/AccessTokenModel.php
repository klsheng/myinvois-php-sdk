<?php

namespace Klsheng\Myinvois\Example\Model;

use Klsheng\Myinvois\Model\BaseModel;

class AccessTokenModel extends BaseModel
{
    public $access_token;
    public $expires_in;
    public $token_type;
    public $scope;
}
