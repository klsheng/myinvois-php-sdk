<?php

namespace klsheng\myinvois\example\model;

use klsheng\myinvois\model\BaseModel;

class AccessTokenModel extends BaseModel
{
    public $access_token;
    public $expires_in;
    public $token_type;
    public $scope;
}
