<?php

namespace Ksyun\Client\Mongodb\V20170101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateMongoDBShardInstanceRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "PayType" => null,
        /**String**/
        "Name" => null,
        /**String**/
        "DbVersion" => null,
        /**String**/
        "Storage" => null,
        /**Int**/
        "Duration" => null,
        /**String**/
        "IamProjectId" => null,
        /**String**/
        "VpcId" => null,
        /**String**/
        "VnetId" => null,
        /**String**/
        "InstancePassword" => null,
        /**String**/
        "ShardClass" => null,
        /**Int**/
        "ShardNum" => null,
        /**Int**/
        "MongosNum" => null,
        /**String**/
        "MongosClass" => null,
    ];

    /**特殊参数类型:Filter**/
    public $AvailabilityZone = [];

    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("PayType", $param) and $param["PayType"] !== null) {
            if (is_bool($param["PayType"])) {
                $this->RequestParams["PayType"] = $param["PayType"] ? "true" : "false";
            } else {
                $this->RequestParams["PayType"] = $param["PayType"];
            }
        }
        if (array_key_exists("AvailabilityZone", $param) and $param["AvailabilityZone"] !== null) {
            $res = $this->formatFilterParams("AvailabilityZone", $param["AvailabilityZone"]);
            $this->_unserialize("AvailabilityZone", $res);
        }
        if (array_key_exists("Name", $param) and $param["Name"] !== null) {
            if (is_bool($param["Name"])) {
                $this->RequestParams["Name"] = $param["Name"] ? "true" : "false";
            } else {
                $this->RequestParams["Name"] = $param["Name"];
            }
        }
        if (array_key_exists("DbVersion", $param) and $param["DbVersion"] !== null) {
            if (is_bool($param["DbVersion"])) {
                $this->RequestParams["DbVersion"] = $param["DbVersion"] ? "true" : "false";
            } else {
                $this->RequestParams["DbVersion"] = $param["DbVersion"];
            }
        }
        if (array_key_exists("Storage", $param) and $param["Storage"] !== null) {
            if (is_bool($param["Storage"])) {
                $this->RequestParams["Storage"] = $param["Storage"] ? "true" : "false";
            } else {
                $this->RequestParams["Storage"] = $param["Storage"];
            }
        }
        if (array_key_exists("Duration", $param) and $param["Duration"] !== null) {
            if (is_bool($param["Duration"])) {
                $this->RequestParams["Duration"] = $param["Duration"] ? "true" : "false";
            } else {
                $this->RequestParams["Duration"] = $param["Duration"];
            }
        }
        if (array_key_exists("IamProjectId", $param) and $param["IamProjectId"] !== null) {
            if (is_bool($param["IamProjectId"])) {
                $this->RequestParams["IamProjectId"] = $param["IamProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["IamProjectId"] = $param["IamProjectId"];
            }
        }
        if (array_key_exists("VpcId", $param) and $param["VpcId"] !== null) {
            if (is_bool($param["VpcId"])) {
                $this->RequestParams["VpcId"] = $param["VpcId"] ? "true" : "false";
            } else {
                $this->RequestParams["VpcId"] = $param["VpcId"];
            }
        }
        if (array_key_exists("VnetId", $param) and $param["VnetId"] !== null) {
            if (is_bool($param["VnetId"])) {
                $this->RequestParams["VnetId"] = $param["VnetId"] ? "true" : "false";
            } else {
                $this->RequestParams["VnetId"] = $param["VnetId"];
            }
        }
        if (array_key_exists("InstancePassword", $param) and $param["InstancePassword"] !== null) {
            if (is_bool($param["InstancePassword"])) {
                $this->RequestParams["InstancePassword"] = $param["InstancePassword"] ? "true" : "false";
            } else {
                $this->RequestParams["InstancePassword"] = $param["InstancePassword"];
            }
        }
        if (array_key_exists("ShardClass", $param) and $param["ShardClass"] !== null) {
            if (is_bool($param["ShardClass"])) {
                $this->RequestParams["ShardClass"] = $param["ShardClass"] ? "true" : "false";
            } else {
                $this->RequestParams["ShardClass"] = $param["ShardClass"];
            }
        }
        if (array_key_exists("ShardNum", $param) and $param["ShardNum"] !== null) {
            if (is_bool($param["ShardNum"])) {
                $this->RequestParams["ShardNum"] = $param["ShardNum"] ? "true" : "false";
            } else {
                $this->RequestParams["ShardNum"] = $param["ShardNum"];
            }
        }
        if (array_key_exists("MongosNum", $param) and $param["MongosNum"] !== null) {
            if (is_bool($param["MongosNum"])) {
                $this->RequestParams["MongosNum"] = $param["MongosNum"] ? "true" : "false";
            } else {
                $this->RequestParams["MongosNum"] = $param["MongosNum"];
            }
        }
        if (array_key_exists("MongosClass", $param) and $param["MongosClass"] !== null) {
            if (is_bool($param["MongosClass"])) {
                $this->RequestParams["MongosClass"] = $param["MongosClass"] ? "true" : "false";
            } else {
                $this->RequestParams["MongosClass"] = $param["MongosClass"];
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