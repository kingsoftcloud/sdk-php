<?php

namespace Ksyun\Client\Monitor\V20181114\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class GetMetricStatisticsBatchRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "Namespace" => null,
        /**String**/
        "StartTime" => null,
        /**String**/
        "EndTime" => null,
        /**Array**/
        "Aggregate" => null,
        /**Int**/
        "Period" => null,
        /**Array**/
        "Metrics" => null,
    ];


    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/json");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Namespace", $param) and $param["Namespace"] !== null) {
            if (is_bool($param["Namespace"])) {
                $this->RequestParams["Namespace"] = $param["Namespace"] ? "true" : "false";
            } else {
                $this->RequestParams["Namespace"] = $param["Namespace"];
            }
        }
        if (array_key_exists("StartTime", $param) and $param["StartTime"] !== null) {
            if (is_bool($param["StartTime"])) {
                $this->RequestParams["StartTime"] = $param["StartTime"] ? "true" : "false";
            } else {
                $this->RequestParams["StartTime"] = $param["StartTime"];
            }
        }
        if (array_key_exists("EndTime", $param) and $param["EndTime"] !== null) {
            if (is_bool($param["EndTime"])) {
                $this->RequestParams["EndTime"] = $param["EndTime"] ? "true" : "false";
            } else {
                $this->RequestParams["EndTime"] = $param["EndTime"];
            }
        }
        if (array_key_exists("Aggregate", $param) and $param["Aggregate"] !== null) {
            if (is_bool($param["Aggregate"])) {
                $this->RequestParams["Aggregate"] = $param["Aggregate"] ? "true" : "false";
            } else {
                $this->RequestParams["Aggregate"] = $param["Aggregate"];
            }
        }
        if (array_key_exists("Period", $param) and $param["Period"] !== null) {
            if (is_bool($param["Period"])) {
                $this->RequestParams["Period"] = $param["Period"] ? "true" : "false";
            } else {
                $this->RequestParams["Period"] = $param["Period"];
            }
        }
        if (array_key_exists("Metrics", $param) and $param["Metrics"] !== null) {
            if (is_bool($param["Metrics"])) {
                $this->RequestParams["Metrics"] = $param["Metrics"] ? "true" : "false";
            } else {
                $this->RequestParams["Metrics"] = $param["Metrics"];
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