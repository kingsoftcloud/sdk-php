<?php

namespace Ksyun\Client\Memcached\V20180627\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateCacheClusterRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "Name" => null,
        /**String**/
        "Capacity" => null,
        /**String**/
        "SlaveNum" => null,
        /**String**/
        "NetType" => null,
        /**String**/
        "VpcId" => null,
        /**String**/
        "VnetId" => null,
        /**String**/
        "BillType" => null,
        /**String**/
        "Duration" => null,
        /**String**/
        "DurationUnit" => null,
        /**String**/
        "PassWord" => null,
        /**String**/
        "IamProjectId" => null,
        /**String**/
        "Engine" => null,
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
        if (array_key_exists("Name", $param) and $param["Name"] !== null) {
            if (is_bool($param["Name"])) {
                $this->RequestParams["Name"] = $param["Name"] ? "true" : "false";
            } else {
                $this->RequestParams["Name"] = $param["Name"];
            }
        }
        if (array_key_exists("Capacity", $param) and $param["Capacity"] !== null) {
            if (is_bool($param["Capacity"])) {
                $this->RequestParams["Capacity"] = $param["Capacity"] ? "true" : "false";
            } else {
                $this->RequestParams["Capacity"] = $param["Capacity"];
            }
        }
        if (array_key_exists("SlaveNum", $param) and $param["SlaveNum"] !== null) {
            if (is_bool($param["SlaveNum"])) {
                $this->RequestParams["SlaveNum"] = $param["SlaveNum"] ? "true" : "false";
            } else {
                $this->RequestParams["SlaveNum"] = $param["SlaveNum"];
            }
        }
        if (array_key_exists("NetType", $param) and $param["NetType"] !== null) {
            if (is_bool($param["NetType"])) {
                $this->RequestParams["NetType"] = $param["NetType"] ? "true" : "false";
            } else {
                $this->RequestParams["NetType"] = $param["NetType"];
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
        if (array_key_exists("DurationUnit", $param) and $param["DurationUnit"] !== null) {
            if (is_bool($param["DurationUnit"])) {
                $this->RequestParams["DurationUnit"] = $param["DurationUnit"] ? "true" : "false";
            } else {
                $this->RequestParams["DurationUnit"] = $param["DurationUnit"];
            }
        }
        if (array_key_exists("PassWord", $param) and $param["PassWord"] !== null) {
            if (is_bool($param["PassWord"])) {
                $this->RequestParams["PassWord"] = $param["PassWord"] ? "true" : "false";
            } else {
                $this->RequestParams["PassWord"] = $param["PassWord"];
            }
        }
        if (array_key_exists("IamProjectId", $param) and $param["IamProjectId"] !== null) {
            if (is_bool($param["IamProjectId"])) {
                $this->RequestParams["IamProjectId"] = $param["IamProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["IamProjectId"] = $param["IamProjectId"];
            }
        }
        if (array_key_exists("Engine", $param) and $param["Engine"] !== null) {
            if (is_bool($param["Engine"])) {
                $this->RequestParams["Engine"] = $param["Engine"] ? "true" : "false";
            } else {
                $this->RequestParams["Engine"] = $param["Engine"];
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