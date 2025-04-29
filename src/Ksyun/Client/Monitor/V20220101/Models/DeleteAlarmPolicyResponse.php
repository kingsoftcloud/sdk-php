<?php

namespace Ksyun\Client\Monitor\V20220101\Models;

use Ksyun\Common\BaseModel;

class DeleteAlarmPolicyResponse extends BaseModel
{
    /** 请求ID**/
    public $requestId;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("requestId", $param) and $param["requestId"] !== null) {
            $this->requestId = $param["requestId"];
        }

    }
}