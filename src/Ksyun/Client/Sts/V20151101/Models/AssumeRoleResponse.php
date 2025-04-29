<?php

namespace Ksyun\Client\Sts\V20151101\Models;

use Ksyun\Common\BaseModel;

class AssumeRoleResponse extends BaseModel
{
    /** **/
    public $AssumeRoleResult;

    /** 请求ID**/
    public $RequestId;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("AssumeRoleResult", $param) and $param["AssumeRoleResult"] !== null) {
            $this->AssumeRoleResult = $param["AssumeRoleResult"];
        }
        if (array_key_exists("RequestId", $param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }

    }
}