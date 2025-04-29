<?php

namespace Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateDedicatedHostsRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "DedicatedType" => null,
        /**Int**/
        "Number" => null,
        /**String**/
        "Name" => null,
        /**String**/
        "ChargeType" => null,
        /**Int**/
        "PurchaseTime" => null,
        /**String**/
        "InstanceNameSuffix" => null,
        /**String**/
        "DedicatedClusterId" => null,
    ];

    /**特殊参数类型:Filter**/
    public $Tag = [];

    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DedicatedType", $param) and $param["DedicatedType"] !== null) {
            if (is_bool($param["DedicatedType"])) {
                $this->RequestParams["DedicatedType"] = $param["DedicatedType"] ? "true" : "false";
            } else {
                $this->RequestParams["DedicatedType"] = $param["DedicatedType"];
            }
        }
        if (array_key_exists("Number", $param) and $param["Number"] !== null) {
            if (is_bool($param["Number"])) {
                $this->RequestParams["Number"] = $param["Number"] ? "true" : "false";
            } else {
                $this->RequestParams["Number"] = $param["Number"];
            }
        }
        if (array_key_exists("Name", $param) and $param["Name"] !== null) {
            if (is_bool($param["Name"])) {
                $this->RequestParams["Name"] = $param["Name"] ? "true" : "false";
            } else {
                $this->RequestParams["Name"] = $param["Name"];
            }
        }
        if (array_key_exists("ChargeType", $param) and $param["ChargeType"] !== null) {
            if (is_bool($param["ChargeType"])) {
                $this->RequestParams["ChargeType"] = $param["ChargeType"] ? "true" : "false";
            } else {
                $this->RequestParams["ChargeType"] = $param["ChargeType"];
            }
        }
        if (array_key_exists("PurchaseTime", $param) and $param["PurchaseTime"] !== null) {
            if (is_bool($param["PurchaseTime"])) {
                $this->RequestParams["PurchaseTime"] = $param["PurchaseTime"] ? "true" : "false";
            } else {
                $this->RequestParams["PurchaseTime"] = $param["PurchaseTime"];
            }
        }
        if (array_key_exists("InstanceNameSuffix", $param) and $param["InstanceNameSuffix"] !== null) {
            if (is_bool($param["InstanceNameSuffix"])) {
                $this->RequestParams["InstanceNameSuffix"] = $param["InstanceNameSuffix"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceNameSuffix"] = $param["InstanceNameSuffix"];
            }
        }
        if (array_key_exists("DedicatedClusterId", $param) and $param["DedicatedClusterId"] !== null) {
            if (is_bool($param["DedicatedClusterId"])) {
                $this->RequestParams["DedicatedClusterId"] = $param["DedicatedClusterId"] ? "true" : "false";
            } else {
                $this->RequestParams["DedicatedClusterId"] = $param["DedicatedClusterId"];
            }
        }
        if (array_key_exists("Tag", $param) and $param["Tag"] !== null) {
            $res = $this->formatFilterParams("Tag", $param["Tag"]);
            $this->_unserialize("Tag", $res);
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