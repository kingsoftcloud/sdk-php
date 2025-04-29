<?php

namespace Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class RegisterInstancesWithListenerRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "RealServerType" => null,
        /**String**/
        "ListenerId" => null,
        /**Int**/
        "Weight" => null,
        /**String**/
        "RealServerIp" => null,
        /**Int**/
        "RealServerPort" => null,
        /**String**/
        "InstanceId" => null,
        /**String**/
        "Tag" => null,
        /**String**/
        "MasterSlaveType" => null,
        /**String**/
        "NetworkInterfaceId" => null,
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
        if (array_key_exists("RealServerType", $param) and $param["RealServerType"] !== null) {
            if (is_bool($param["RealServerType"])) {
                $this->RequestParams["RealServerType"] = $param["RealServerType"] ? "true" : "false";
            } else {
                $this->RequestParams["RealServerType"] = $param["RealServerType"];
            }
        }
        if (array_key_exists("ListenerId", $param) and $param["ListenerId"] !== null) {
            if (is_bool($param["ListenerId"])) {
                $this->RequestParams["ListenerId"] = $param["ListenerId"] ? "true" : "false";
            } else {
                $this->RequestParams["ListenerId"] = $param["ListenerId"];
            }
        }
        if (array_key_exists("Weight", $param) and $param["Weight"] !== null) {
            if (is_bool($param["Weight"])) {
                $this->RequestParams["Weight"] = $param["Weight"] ? "true" : "false";
            } else {
                $this->RequestParams["Weight"] = $param["Weight"];
            }
        }
        if (array_key_exists("RealServerIp", $param) and $param["RealServerIp"] !== null) {
            if (is_bool($param["RealServerIp"])) {
                $this->RequestParams["RealServerIp"] = $param["RealServerIp"] ? "true" : "false";
            } else {
                $this->RequestParams["RealServerIp"] = $param["RealServerIp"];
            }
        }
        if (array_key_exists("RealServerPort", $param) and $param["RealServerPort"] !== null) {
            if (is_bool($param["RealServerPort"])) {
                $this->RequestParams["RealServerPort"] = $param["RealServerPort"] ? "true" : "false";
            } else {
                $this->RequestParams["RealServerPort"] = $param["RealServerPort"];
            }
        }
        if (array_key_exists("InstanceId", $param) and $param["InstanceId"] !== null) {
            if (is_bool($param["InstanceId"])) {
                $this->RequestParams["InstanceId"] = $param["InstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceId"] = $param["InstanceId"];
            }
        }
        if (array_key_exists("Tag", $param) and $param["Tag"] !== null) {
            if (is_bool($param["Tag"])) {
                $this->RequestParams["Tag"] = $param["Tag"] ? "true" : "false";
            } else {
                $this->RequestParams["Tag"] = $param["Tag"];
            }
        }
        if (array_key_exists("MasterSlaveType", $param) and $param["MasterSlaveType"] !== null) {
            if (is_bool($param["MasterSlaveType"])) {
                $this->RequestParams["MasterSlaveType"] = $param["MasterSlaveType"] ? "true" : "false";
            } else {
                $this->RequestParams["MasterSlaveType"] = $param["MasterSlaveType"];
            }
        }
        if (array_key_exists("NetworkInterfaceId", $param) and $param["NetworkInterfaceId"] !== null) {
            if (is_bool($param["NetworkInterfaceId"])) {
                $this->RequestParams["NetworkInterfaceId"] = $param["NetworkInterfaceId"] ? "true" : "false";
            } else {
                $this->RequestParams["NetworkInterfaceId"] = $param["NetworkInterfaceId"];
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