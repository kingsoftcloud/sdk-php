<?php

namespace Ksyun\Client\Cdn\V20200630\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class GetDomainRequestPeriodRatioDataRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "CurrentPeriodStartTime" => null,
        /**String**/
        "CurrentPeriodEndTime" => null,
        /**String**/
        "PriorPeriodStartTime" => null,
        /**String**/
        "PriorPeriodEndTime" => null,
        /**String**/
        "Metric" => null,
        /**String**/
        "CdnType" => null,
        /**String**/
        "Interval" => null,
        /**String**/
        "Domains" => null,
        /**String**/
        "Areas" => null,
        /**String**/
        "Provinces" => null,
        /**String**/
        "Isps" => null,
        /**String**/
        "IpType" => null,
        /**String**/
        "Schema" => null,
        /**String**/
        "ResultType" => null,
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
        if (array_key_exists("CurrentPeriodStartTime", $param) and $param["CurrentPeriodStartTime"] !== null) {
            if (is_bool($param["CurrentPeriodStartTime"])) {
                $this->RequestParams["CurrentPeriodStartTime"] = $param["CurrentPeriodStartTime"] ? "true" : "false";
            } else {
                $this->RequestParams["CurrentPeriodStartTime"] = $param["CurrentPeriodStartTime"];
            }
        }
        if (array_key_exists("CurrentPeriodEndTime", $param) and $param["CurrentPeriodEndTime"] !== null) {
            if (is_bool($param["CurrentPeriodEndTime"])) {
                $this->RequestParams["CurrentPeriodEndTime"] = $param["CurrentPeriodEndTime"] ? "true" : "false";
            } else {
                $this->RequestParams["CurrentPeriodEndTime"] = $param["CurrentPeriodEndTime"];
            }
        }
        if (array_key_exists("PriorPeriodStartTime", $param) and $param["PriorPeriodStartTime"] !== null) {
            if (is_bool($param["PriorPeriodStartTime"])) {
                $this->RequestParams["PriorPeriodStartTime"] = $param["PriorPeriodStartTime"] ? "true" : "false";
            } else {
                $this->RequestParams["PriorPeriodStartTime"] = $param["PriorPeriodStartTime"];
            }
        }
        if (array_key_exists("PriorPeriodEndTime", $param) and $param["PriorPeriodEndTime"] !== null) {
            if (is_bool($param["PriorPeriodEndTime"])) {
                $this->RequestParams["PriorPeriodEndTime"] = $param["PriorPeriodEndTime"] ? "true" : "false";
            } else {
                $this->RequestParams["PriorPeriodEndTime"] = $param["PriorPeriodEndTime"];
            }
        }
        if (array_key_exists("Metric", $param) and $param["Metric"] !== null) {
            if (is_bool($param["Metric"])) {
                $this->RequestParams["Metric"] = $param["Metric"] ? "true" : "false";
            } else {
                $this->RequestParams["Metric"] = $param["Metric"];
            }
        }
        if (array_key_exists("CdnType", $param) and $param["CdnType"] !== null) {
            if (is_bool($param["CdnType"])) {
                $this->RequestParams["CdnType"] = $param["CdnType"] ? "true" : "false";
            } else {
                $this->RequestParams["CdnType"] = $param["CdnType"];
            }
        }
        if (array_key_exists("Interval", $param) and $param["Interval"] !== null) {
            if (is_bool($param["Interval"])) {
                $this->RequestParams["Interval"] = $param["Interval"] ? "true" : "false";
            } else {
                $this->RequestParams["Interval"] = $param["Interval"];
            }
        }
        if (array_key_exists("Domains", $param) and $param["Domains"] !== null) {
            if (is_bool($param["Domains"])) {
                $this->RequestParams["Domains"] = $param["Domains"] ? "true" : "false";
            } else {
                $this->RequestParams["Domains"] = $param["Domains"];
            }
        }
        if (array_key_exists("Areas", $param) and $param["Areas"] !== null) {
            if (is_bool($param["Areas"])) {
                $this->RequestParams["Areas"] = $param["Areas"] ? "true" : "false";
            } else {
                $this->RequestParams["Areas"] = $param["Areas"];
            }
        }
        if (array_key_exists("Provinces", $param) and $param["Provinces"] !== null) {
            if (is_bool($param["Provinces"])) {
                $this->RequestParams["Provinces"] = $param["Provinces"] ? "true" : "false";
            } else {
                $this->RequestParams["Provinces"] = $param["Provinces"];
            }
        }
        if (array_key_exists("Isps", $param) and $param["Isps"] !== null) {
            if (is_bool($param["Isps"])) {
                $this->RequestParams["Isps"] = $param["Isps"] ? "true" : "false";
            } else {
                $this->RequestParams["Isps"] = $param["Isps"];
            }
        }
        if (array_key_exists("IpType", $param) and $param["IpType"] !== null) {
            if (is_bool($param["IpType"])) {
                $this->RequestParams["IpType"] = $param["IpType"] ? "true" : "false";
            } else {
                $this->RequestParams["IpType"] = $param["IpType"];
            }
        }
        if (array_key_exists("Schema", $param) and $param["Schema"] !== null) {
            if (is_bool($param["Schema"])) {
                $this->RequestParams["Schema"] = $param["Schema"] ? "true" : "false";
            } else {
                $this->RequestParams["Schema"] = $param["Schema"];
            }
        }
        if (array_key_exists("ResultType", $param) and $param["ResultType"] !== null) {
            if (is_bool($param["ResultType"])) {
                $this->RequestParams["ResultType"] = $param["ResultType"] ? "true" : "false";
            } else {
                $this->RequestParams["ResultType"] = $param["ResultType"];
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