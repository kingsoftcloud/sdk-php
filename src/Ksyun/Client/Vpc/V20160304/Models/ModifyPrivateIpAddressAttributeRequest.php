<?php

namespace Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyPrivateIpAddressAttributeRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "SubnetId" => null,
        /**String**/
        "PrivateIpAddress" => null,
        /**String**/
        "Status" => null,
        /**String**/
        "AllocateStatus" => null,
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
        if (array_key_exists("SubnetId", $param) and $param["SubnetId"] !== null) {
            if (is_bool($param["SubnetId"])) {
                $this->RequestParams["SubnetId"] = $param["SubnetId"] ? "true" : "false";
            } else {
                $this->RequestParams["SubnetId"] = $param["SubnetId"];
            }
        }
        if (array_key_exists("PrivateIpAddress", $param) and $param["PrivateIpAddress"] !== null) {
            if (is_bool($param["PrivateIpAddress"])) {
                $this->RequestParams["PrivateIpAddress"] = $param["PrivateIpAddress"] ? "true" : "false";
            } else {
                $this->RequestParams["PrivateIpAddress"] = $param["PrivateIpAddress"];
            }
        }
        if (array_key_exists("Status", $param) and $param["Status"] !== null) {
            if (is_bool($param["Status"])) {
                $this->RequestParams["Status"] = $param["Status"] ? "true" : "false";
            } else {
                $this->RequestParams["Status"] = $param["Status"];
            }
        }
        if (array_key_exists("AllocateStatus", $param) and $param["AllocateStatus"] !== null) {
            if (is_bool($param["AllocateStatus"])) {
                $this->RequestParams["AllocateStatus"] = $param["AllocateStatus"] ? "true" : "false";
            } else {
                $this->RequestParams["AllocateStatus"] = $param["AllocateStatus"];
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