<?php

namespace Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyInstancesWithListenerRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "RegisterId" => null,
        /**Int**/
        "Weight" => null,
        /**Int**/
        "RealServerPort" => null,
        /**String**/
        "MasterSlaveType" => null,
        /**String**/
        "Tag" => null,
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
        if (array_key_exists("RegisterId", $param) and $param["RegisterId"] !== null) {
            if (is_bool($param["RegisterId"])) {
                $this->RequestParams["RegisterId"] = $param["RegisterId"] ? "true" : "false";
            } else {
                $this->RequestParams["RegisterId"] = $param["RegisterId"];
            }
        }
        if (array_key_exists("Weight", $param) and $param["Weight"] !== null) {
            if (is_bool($param["Weight"])) {
                $this->RequestParams["Weight"] = $param["Weight"] ? "true" : "false";
            } else {
                $this->RequestParams["Weight"] = $param["Weight"];
            }
        }
        if (array_key_exists("RealServerPort", $param) and $param["RealServerPort"] !== null) {
            if (is_bool($param["RealServerPort"])) {
                $this->RequestParams["RealServerPort"] = $param["RealServerPort"] ? "true" : "false";
            } else {
                $this->RequestParams["RealServerPort"] = $param["RealServerPort"];
            }
        }
        if (array_key_exists("MasterSlaveType", $param) and $param["MasterSlaveType"] !== null) {
            if (is_bool($param["MasterSlaveType"])) {
                $this->RequestParams["MasterSlaveType"] = $param["MasterSlaveType"] ? "true" : "false";
            } else {
                $this->RequestParams["MasterSlaveType"] = $param["MasterSlaveType"];
            }
        }
        if (array_key_exists("Tag", $param) and $param["Tag"] !== null) {
            if (is_bool($param["Tag"])) {
                $this->RequestParams["Tag"] = $param["Tag"] ? "true" : "false";
            } else {
                $this->RequestParams["Tag"] = $param["Tag"];
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