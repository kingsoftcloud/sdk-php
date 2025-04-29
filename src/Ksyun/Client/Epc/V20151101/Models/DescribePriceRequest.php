<?php

namespace Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribePriceRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "ChargeType" => null,
        /**String**/
        "HostType" => null,
        /**String**/
        "AvailabilityZone" => null,
        /**Int**/
        "PurchaseTime" => null,
        /**Int**/
        "Amount" => null,
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
        if (array_key_exists("HostType", $param) and $param["HostType"] !== null) {
            if (is_bool($param["HostType"])) {
                $this->RequestParams["HostType"] = $param["HostType"] ? "true" : "false";
            } else {
                $this->RequestParams["HostType"] = $param["HostType"];
            }
        }
        if (array_key_exists("AvailabilityZone", $param) and $param["AvailabilityZone"] !== null) {
            if (is_bool($param["AvailabilityZone"])) {
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"] ? "true" : "false";
            } else {
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"];
            }
        }
        if (array_key_exists("PurchaseTime", $param) and $param["PurchaseTime"] !== null) {
            if (is_bool($param["PurchaseTime"])) {
                $this->RequestParams["PurchaseTime"] = $param["PurchaseTime"] ? "true" : "false";
            } else {
                $this->RequestParams["PurchaseTime"] = $param["PurchaseTime"];
            }
        }
        if (array_key_exists("Amount", $param) and $param["Amount"] !== null) {
            if (is_bool($param["Amount"])) {
                $this->RequestParams["Amount"] = $param["Amount"] ? "true" : "false";
            } else {
                $this->RequestParams["Amount"] = $param["Amount"];
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