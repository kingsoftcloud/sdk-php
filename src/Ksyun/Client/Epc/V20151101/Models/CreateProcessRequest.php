<?php

namespace Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateProcessRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "ProcessId" => null,
        /**String**/
        "InstanceId" => null,
        /**String**/
        "Sn" => null,
        /**String**/
        "AvailabilityZone" => null,
        /**String**/
        "CreateTime" => null,
        /**String**/
        "Attribute" => null,
        /**String**/
        "Content" => null,
        /**Int**/
        "MachineCount" => null,
        /**String**/
        "Title" => null,
        /**String**/
        "Type" => null,
        /**String**/
        "Confirm" => null,
        /**Int**/
        "ProcessSource" => null,
        /**Int**/
        "autoNocCase" => null,
    ];


    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ProcessId", $param) and $param["ProcessId"] !== null) {
            if (is_bool($param["ProcessId"])) {
                $this->RequestParams["ProcessId"] = $param["ProcessId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProcessId"] = $param["ProcessId"];
            }
        }
        if (array_key_exists("InstanceId", $param) and $param["InstanceId"] !== null) {
            if (is_bool($param["InstanceId"])) {
                $this->RequestParams["InstanceId"] = $param["InstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceId"] = $param["InstanceId"];
            }
        }
        if (array_key_exists("Sn", $param) and $param["Sn"] !== null) {
            if (is_bool($param["Sn"])) {
                $this->RequestParams["Sn"] = $param["Sn"] ? "true" : "false";
            } else {
                $this->RequestParams["Sn"] = $param["Sn"];
            }
        }
        if (array_key_exists("AvailabilityZone", $param) and $param["AvailabilityZone"] !== null) {
            if (is_bool($param["AvailabilityZone"])) {
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"] ? "true" : "false";
            } else {
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"];
            }
        }
        if (array_key_exists("CreateTime", $param) and $param["CreateTime"] !== null) {
            if (is_bool($param["CreateTime"])) {
                $this->RequestParams["CreateTime"] = $param["CreateTime"] ? "true" : "false";
            } else {
                $this->RequestParams["CreateTime"] = $param["CreateTime"];
            }
        }
        if (array_key_exists("Attribute", $param) and $param["Attribute"] !== null) {
            if (is_bool($param["Attribute"])) {
                $this->RequestParams["Attribute"] = $param["Attribute"] ? "true" : "false";
            } else {
                $this->RequestParams["Attribute"] = $param["Attribute"];
            }
        }
        if (array_key_exists("Content", $param) and $param["Content"] !== null) {
            if (is_bool($param["Content"])) {
                $this->RequestParams["Content"] = $param["Content"] ? "true" : "false";
            } else {
                $this->RequestParams["Content"] = $param["Content"];
            }
        }
        if (array_key_exists("MachineCount", $param) and $param["MachineCount"] !== null) {
            if (is_bool($param["MachineCount"])) {
                $this->RequestParams["MachineCount"] = $param["MachineCount"] ? "true" : "false";
            } else {
                $this->RequestParams["MachineCount"] = $param["MachineCount"];
            }
        }
        if (array_key_exists("Title", $param) and $param["Title"] !== null) {
            if (is_bool($param["Title"])) {
                $this->RequestParams["Title"] = $param["Title"] ? "true" : "false";
            } else {
                $this->RequestParams["Title"] = $param["Title"];
            }
        }
        if (array_key_exists("Type", $param) and $param["Type"] !== null) {
            if (is_bool($param["Type"])) {
                $this->RequestParams["Type"] = $param["Type"] ? "true" : "false";
            } else {
                $this->RequestParams["Type"] = $param["Type"];
            }
        }
        if (array_key_exists("Confirm", $param) and $param["Confirm"] !== null) {
            if (is_bool($param["Confirm"])) {
                $this->RequestParams["Confirm"] = $param["Confirm"] ? "true" : "false";
            } else {
                $this->RequestParams["Confirm"] = $param["Confirm"];
            }
        }
        if (array_key_exists("ProcessSource", $param) and $param["ProcessSource"] !== null) {
            if (is_bool($param["ProcessSource"])) {
                $this->RequestParams["ProcessSource"] = $param["ProcessSource"] ? "true" : "false";
            } else {
                $this->RequestParams["ProcessSource"] = $param["ProcessSource"];
            }
        }
        if (array_key_exists("autoNocCase", $param) and $param["autoNocCase"] !== null) {
            if (is_bool($param["autoNocCase"])) {
                $this->RequestParams["autoNocCase"] = $param["autoNocCase"] ? "true" : "false";
            } else {
                $this->RequestParams["autoNocCase"] = $param["autoNocCase"];
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