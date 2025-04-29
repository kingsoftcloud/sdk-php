<?php

namespace Ksyun\Client\Ebs\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyVolumeRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "VolumeId" => null,
        /**String**/
        "VolumeName" => null,
        /**String**/
        "VolumeDesc" => null,
        /**String**/
        "DeleteWithInstance" => null,
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
        if (array_key_exists("VolumeId", $param) and $param["VolumeId"] !== null) {
            if (is_bool($param["VolumeId"])) {
                $this->RequestParams["VolumeId"] = $param["VolumeId"] ? "true" : "false";
            } else {
                $this->RequestParams["VolumeId"] = $param["VolumeId"];
            }
        }
        if (array_key_exists("VolumeName", $param) and $param["VolumeName"] !== null) {
            if (is_bool($param["VolumeName"])) {
                $this->RequestParams["VolumeName"] = $param["VolumeName"] ? "true" : "false";
            } else {
                $this->RequestParams["VolumeName"] = $param["VolumeName"];
            }
        }
        if (array_key_exists("VolumeDesc", $param) and $param["VolumeDesc"] !== null) {
            if (is_bool($param["VolumeDesc"])) {
                $this->RequestParams["VolumeDesc"] = $param["VolumeDesc"] ? "true" : "false";
            } else {
                $this->RequestParams["VolumeDesc"] = $param["VolumeDesc"];
            }
        }
        if (array_key_exists("DeleteWithInstance", $param) and $param["DeleteWithInstance"] !== null) {
            if (is_bool($param["DeleteWithInstance"])) {
                $this->RequestParams["DeleteWithInstance"] = $param["DeleteWithInstance"] ? "true" : "false";
            } else {
                $this->RequestParams["DeleteWithInstance"] = $param["DeleteWithInstance"];
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