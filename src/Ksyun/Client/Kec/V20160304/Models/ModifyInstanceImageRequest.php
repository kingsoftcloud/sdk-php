<?php

namespace Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyInstanceImageRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "InstanceId" => null,
        /**String**/
        "ImageId" => null,
        /**Int**/
        "SystemDisk.DiskSize" => null,
        /**String**/
        "InstancePassword" => null,
        /**Boolean**/
        "KeepImageLogin" => null,
        /**String**/
        "SystemDisk.DiskType" => null,
        /**String**/
        "SystemDisk.ResizeType" => null,
        /**String**/
        "UserData" => null,
    ];

    /**特殊参数类型:Filter**/
    public $KeyId = [];

    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
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
        if (array_key_exists("ImageId", $param) and $param["ImageId"] !== null) {
            if (is_bool($param["ImageId"])) {
                $this->RequestParams["ImageId"] = $param["ImageId"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageId"] = $param["ImageId"];
            }
        }
        if (array_key_exists("SystemDisk.DiskSize", $param) and $param["SystemDisk.DiskSize"] !== null) {
            if (is_bool($param["SystemDisk.DiskSize"])) {
                $this->RequestParams["SystemDisk.DiskSize"] = $param["SystemDisk.DiskSize"] ? "true" : "false";
            } else {
                $this->RequestParams["SystemDisk.DiskSize"] = $param["SystemDisk.DiskSize"];
            }
        }
        if (array_key_exists("InstancePassword", $param) and $param["InstancePassword"] !== null) {
            if (is_bool($param["InstancePassword"])) {
                $this->RequestParams["InstancePassword"] = $param["InstancePassword"] ? "true" : "false";
            } else {
                $this->RequestParams["InstancePassword"] = $param["InstancePassword"];
            }
        }
        if (array_key_exists("KeyId", $param) and $param["KeyId"] !== null) {
            $res = $this->formatFilterParams("KeyId", $param["KeyId"]);
            $this->_unserialize("KeyId", $res);
        }
        if (array_key_exists("KeepImageLogin", $param) and $param["KeepImageLogin"] !== null) {
            if (is_bool($param["KeepImageLogin"])) {
                $this->RequestParams["KeepImageLogin"] = $param["KeepImageLogin"] ? "true" : "false";
            } else {
                $this->RequestParams["KeepImageLogin"] = $param["KeepImageLogin"];
            }
        }
        if (array_key_exists("SystemDisk.DiskType", $param) and $param["SystemDisk.DiskType"] !== null) {
            if (is_bool($param["SystemDisk.DiskType"])) {
                $this->RequestParams["SystemDisk.DiskType"] = $param["SystemDisk.DiskType"] ? "true" : "false";
            } else {
                $this->RequestParams["SystemDisk.DiskType"] = $param["SystemDisk.DiskType"];
            }
        }
        if (array_key_exists("SystemDisk.ResizeType", $param) and $param["SystemDisk.ResizeType"] !== null) {
            if (is_bool($param["SystemDisk.ResizeType"])) {
                $this->RequestParams["SystemDisk.ResizeType"] = $param["SystemDisk.ResizeType"] ? "true" : "false";
            } else {
                $this->RequestParams["SystemDisk.ResizeType"] = $param["SystemDisk.ResizeType"];
            }
        }
        if (array_key_exists("UserData", $param) and $param["UserData"] !== null) {
            if (is_bool($param["UserData"])) {
                $this->RequestParams["UserData"] = $param["UserData"] ? "true" : "false";
            } else {
                $this->RequestParams["UserData"] = $param["UserData"];
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