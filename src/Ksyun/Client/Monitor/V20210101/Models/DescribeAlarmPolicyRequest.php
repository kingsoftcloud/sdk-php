<?php

namespace Ksyun\Client\Monitor\V20210101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeAlarmPolicyRequest extends BaseModel
{
    public $RequestParams = [
        /**Int**/
        "PolicyId" => null,
    ];


    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/json");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("PolicyId", $param) and $param["PolicyId"] !== null) {
            if (is_bool($param["PolicyId"])) {
                $this->RequestParams["PolicyId"] = $param["PolicyId"] ? "true" : "false";
            } else {
                $this->RequestParams["PolicyId"] = $param["PolicyId"];
            }
        }

    }

    private function _unserialize($name, $params)
    {
        if ($params === null) {
            return;
        }
        foreach ($params as $key => $value) {
            $this->$name[$key] = $value;
        }

    }
}