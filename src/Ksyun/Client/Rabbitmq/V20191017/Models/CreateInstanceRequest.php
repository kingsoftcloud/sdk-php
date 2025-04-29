<?php

namespace Ksyun\Client\Rabbitmq\V20191017\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateInstanceRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "ProjectId" => null,
        /**String**/
        "InstanceName" => null,
        /**String**/
        "InstancePassword" => null,
        /**String**/
        "VpcId" => null,
        /**String**/
        "SubnetId" => null,
        /**String**/
        "EngineVersion" => null,
        /**Int**/
        "BillType" => null,
        /**Int**/
        "Duration" => null,
        /**String**/
        "Mode" => null,
        /**String**/
        "InstanceType" => null,
        /**Int**/
        "SsdDisk" => null,
        /**Int**/
        "NodeNum" => null,
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
        if (array_key_exists("ProjectId", $param) and $param["ProjectId"] !== null) {
            if (is_bool($param["ProjectId"])) {
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
            }
        }
        if (array_key_exists("InstanceName", $param) and $param["InstanceName"] !== null) {
            if (is_bool($param["InstanceName"])) {
                $this->RequestParams["InstanceName"] = $param["InstanceName"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceName"] = $param["InstanceName"];
            }
        }
        if (array_key_exists("InstancePassword", $param) and $param["InstancePassword"] !== null) {
            if (is_bool($param["InstancePassword"])) {
                $this->RequestParams["InstancePassword"] = $param["InstancePassword"] ? "true" : "false";
            } else {
                $this->RequestParams["InstancePassword"] = $param["InstancePassword"];
            }
        }
        if (array_key_exists("VpcId", $param) and $param["VpcId"] !== null) {
            if (is_bool($param["VpcId"])) {
                $this->RequestParams["VpcId"] = $param["VpcId"] ? "true" : "false";
            } else {
                $this->RequestParams["VpcId"] = $param["VpcId"];
            }
        }
        if (array_key_exists("SubnetId", $param) and $param["SubnetId"] !== null) {
            if (is_bool($param["SubnetId"])) {
                $this->RequestParams["SubnetId"] = $param["SubnetId"] ? "true" : "false";
            } else {
                $this->RequestParams["SubnetId"] = $param["SubnetId"];
            }
        }
        if (array_key_exists("EngineVersion", $param) and $param["EngineVersion"] !== null) {
            if (is_bool($param["EngineVersion"])) {
                $this->RequestParams["EngineVersion"] = $param["EngineVersion"] ? "true" : "false";
            } else {
                $this->RequestParams["EngineVersion"] = $param["EngineVersion"];
            }
        }
        if (array_key_exists("BillType", $param) and $param["BillType"] !== null) {
            if (is_bool($param["BillType"])) {
                $this->RequestParams["BillType"] = $param["BillType"] ? "true" : "false";
            } else {
                $this->RequestParams["BillType"] = $param["BillType"];
            }
        }
        if (array_key_exists("Duration", $param) and $param["Duration"] !== null) {
            if (is_bool($param["Duration"])) {
                $this->RequestParams["Duration"] = $param["Duration"] ? "true" : "false";
            } else {
                $this->RequestParams["Duration"] = $param["Duration"];
            }
        }
        if (array_key_exists("Mode", $param) and $param["Mode"] !== null) {
            if (is_bool($param["Mode"])) {
                $this->RequestParams["Mode"] = $param["Mode"] ? "true" : "false";
            } else {
                $this->RequestParams["Mode"] = $param["Mode"];
            }
        }
        if (array_key_exists("InstanceType", $param) and $param["InstanceType"] !== null) {
            if (is_bool($param["InstanceType"])) {
                $this->RequestParams["InstanceType"] = $param["InstanceType"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceType"] = $param["InstanceType"];
            }
        }
        if (array_key_exists("SsdDisk", $param) and $param["SsdDisk"] !== null) {
            if (is_bool($param["SsdDisk"])) {
                $this->RequestParams["SsdDisk"] = $param["SsdDisk"] ? "true" : "false";
            } else {
                $this->RequestParams["SsdDisk"] = $param["SsdDisk"];
            }
        }
        if (array_key_exists("NodeNum", $param) and $param["NodeNum"] !== null) {
            if (is_bool($param["NodeNum"])) {
                $this->RequestParams["NodeNum"] = $param["NodeNum"] ? "true" : "false";
            } else {
                $this->RequestParams["NodeNum"] = $param["NodeNum"];
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