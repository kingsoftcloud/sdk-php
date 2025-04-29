<?php

namespace Ksyun\Client\Monitor\V20210101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeSysEventGroupListRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "Namespace" => null,
        /**Int**/
        "StartTime" => null,
        /**Int**/
        "EndTime" => null,
        /**String**/
        "EventName" => null,
        /**Array**/
        "InstanceId" => null,
        /**Boolean**/
        "Order" => null,
        /**Int**/
        "PageIndex" => null,
        /**Int**/
        "PageSize" => null,
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
        if (array_key_exists("EventName", $param) and $param["EventName"] !== null) {
            if (is_bool($param["EventName"])) {
                $this->RequestParams["EventName"] = $param["EventName"] ? "true" : "false";
            } else {
                $this->RequestParams["EventName"] = $param["EventName"];
            }
        }
        if (array_key_exists("InstanceId", $param) and $param["InstanceId"] !== null) {
            if (is_bool($param["InstanceId"])) {
                $this->RequestParams["InstanceId"] = $param["InstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceId"] = $param["InstanceId"];
            }
        }
        if (array_key_exists("Order", $param) and $param["Order"] !== null) {
            if (is_bool($param["Order"])) {
                $this->RequestParams["Order"] = $param["Order"] ? "true" : "false";
            } else {
                $this->RequestParams["Order"] = $param["Order"];
            }
        }
        if (array_key_exists("PageIndex", $param) and $param["PageIndex"] !== null) {
            if (is_bool($param["PageIndex"])) {
                $this->RequestParams["PageIndex"] = $param["PageIndex"] ? "true" : "false";
            } else {
                $this->RequestParams["PageIndex"] = $param["PageIndex"];
            }
        }
        if (array_key_exists("PageSize", $param) and $param["PageSize"] !== null) {
            if (is_bool($param["PageSize"])) {
                $this->RequestParams["PageSize"] = $param["PageSize"] ? "true" : "false";
            } else {
                $this->RequestParams["PageSize"] = $param["PageSize"];
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