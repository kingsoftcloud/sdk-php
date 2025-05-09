<?php

namespace Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class CreateUserResponse extends BaseModel
{
    /** **/
    public $CreateUserResult;

    /** **/
    public $RequestId;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("CreateUserResult", $param) and $param["CreateUserResult"] !== null) {
            $this->CreateUserResult = $param["CreateUserResult"];
        }
        if (array_key_exists("RequestId", $param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }

    }
}