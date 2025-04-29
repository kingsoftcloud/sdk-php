<?php

namespace Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class UpdateProjectInfoResponse extends BaseModel
{
    /** 成功：true
     * 失败：false**/
    public $Result;

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
        if (array_key_exists("Result", $param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }
        if (array_key_exists("RequestId", $param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }

    }
}