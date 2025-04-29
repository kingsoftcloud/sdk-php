<?php

namespace Ksyun\Client\Ebs\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ValidateAttachInstanceRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "VolumeType" => null,
        /**String**/
        "InstanceId" => null,
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
        if (array_key_exists("VolumeType", $param) and $param["VolumeType"] !== null) {
            if (is_bool($param["VolumeType"])) {
                $this->RequestParams["VolumeType"] = $param["VolumeType"] ? "true" : "false";
            } else {
                $this->RequestParams["VolumeType"] = $param["VolumeType"];
            }
        }
        if (array_key_exists("InstanceId", $param) and $param["InstanceId"] !== null) {
            if (is_bool($param["InstanceId"])) {
                $this->RequestParams["InstanceId"] = $param["InstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceId"] = $param["InstanceId"];
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