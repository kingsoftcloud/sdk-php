<?php

namespace Ksyun\Client\Monitor\V20220101\Models;

use Ksyun\Common\BaseModel;

class CreateAlarmPolicyResponse extends BaseModel
{
    /** **/
    public $requestId;

    /** **/
    public $data;

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
        if (array_key_exists("data", $param) and $param["data"] !== null) {
            $this->data = $param["data"];
        }

    }
}