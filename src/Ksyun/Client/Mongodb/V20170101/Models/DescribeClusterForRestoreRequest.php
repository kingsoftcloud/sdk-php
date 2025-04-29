<?php

namespace Ksyun\Client\Mongodb\V20170101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeClusterForRestoreRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "InstanceId" => null,
        /**String**/
        "ResetTimePoint" => null,
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
        if (array_key_exists("InstanceId", $param) and $param["InstanceId"] !== null) {
            if (is_bool($param["InstanceId"])) {
                $this->RequestParams["InstanceId"] = $param["InstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceId"] = $param["InstanceId"];
            }
        }
        if (array_key_exists("ResetTimePoint", $param) and $param["ResetTimePoint"] !== null) {
            if (is_bool($param["ResetTimePoint"])) {
                $this->RequestParams["ResetTimePoint"] = $param["ResetTimePoint"] ? "true" : "false";
            } else {
                $this->RequestParams["ResetTimePoint"] = $param["ResetTimePoint"];
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