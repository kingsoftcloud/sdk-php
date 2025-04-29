<?php

namespace Ksyun\Client\Kci\V20200702\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeKciPackagesRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "ChargeType" => null,
        /**String**/
        "AvailabilityZone" => null,
        /**String**/
        "KciType" => null,
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
        if (array_key_exists("ChargeType", $param) and $param["ChargeType"] !== null) {
            if (is_bool($param["ChargeType"])) {
                $this->RequestParams["ChargeType"] = $param["ChargeType"] ? "true" : "false";
            } else {
                $this->RequestParams["ChargeType"] = $param["ChargeType"];
            }
        }
        if (array_key_exists("AvailabilityZone", $param) and $param["AvailabilityZone"] !== null) {
            if (is_bool($param["AvailabilityZone"])) {
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"] ? "true" : "false";
            } else {
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"];
            }
        }
        if (array_key_exists("KciType", $param) and $param["KciType"] !== null) {
            if (is_bool($param["KciType"])) {
                $this->RequestParams["KciType"] = $param["KciType"] ? "true" : "false";
            } else {
                $this->RequestParams["KciType"] = $param["KciType"];
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