<?php

namespace Ksyun\Client\Cen\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class AttachCenInstanceRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "CenId" => null,
        /**String**/
        "InstanceType" => null,
        /**String**/
        "CenRegion" => null,
        /**String**/
        "CenInstanceId" => null,
        /**String**/
        "InstanceAccountId" => null,
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
        if (array_key_exists("CenId", $param) and $param["CenId"] !== null) {
            if (is_bool($param["CenId"])) {
                $this->RequestParams["CenId"] = $param["CenId"] ? "true" : "false";
            } else {
                $this->RequestParams["CenId"] = $param["CenId"];
            }
        }
        if (array_key_exists("InstanceType", $param) and $param["InstanceType"] !== null) {
            if (is_bool($param["InstanceType"])) {
                $this->RequestParams["InstanceType"] = $param["InstanceType"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceType"] = $param["InstanceType"];
            }
        }
        if (array_key_exists("CenRegion", $param) and $param["CenRegion"] !== null) {
            if (is_bool($param["CenRegion"])) {
                $this->RequestParams["CenRegion"] = $param["CenRegion"] ? "true" : "false";
            } else {
                $this->RequestParams["CenRegion"] = $param["CenRegion"];
            }
        }
        if (array_key_exists("CenInstanceId", $param) and $param["CenInstanceId"] !== null) {
            if (is_bool($param["CenInstanceId"])) {
                $this->RequestParams["CenInstanceId"] = $param["CenInstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["CenInstanceId"] = $param["CenInstanceId"];
            }
        }
        if (array_key_exists("InstanceAccountId", $param) and $param["InstanceAccountId"] !== null) {
            if (is_bool($param["InstanceAccountId"])) {
                $this->RequestParams["InstanceAccountId"] = $param["InstanceAccountId"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceAccountId"] = $param["InstanceAccountId"];
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