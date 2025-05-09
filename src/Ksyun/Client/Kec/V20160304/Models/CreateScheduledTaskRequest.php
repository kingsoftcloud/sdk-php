<?php

namespace Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateScheduledTaskRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "ScalingGroupId" => null,
        /**String**/
        "ScalingScheduledTaskName" => null,
        /**Int**/
        "ReadjustMinSize" => null,
        /**Int**/
        "ReadjustMaxSize" => null,
        /**Int**/
        "ReadjustExpectSize" => null,
        /**String**/
        "StartTime" => null,
        /**String**/
        "EndTime" => null,
        /**String**/
        "Recurrence" => null,
        /**String**/
        "RepeatUnit" => null,
        /**String**/
        "RepeatCycle" => null,
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
        if (array_key_exists("ScalingGroupId", $param) and $param["ScalingGroupId"] !== null) {
            if (is_bool($param["ScalingGroupId"])) {
                $this->RequestParams["ScalingGroupId"] = $param["ScalingGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["ScalingGroupId"] = $param["ScalingGroupId"];
            }
        }
        if (array_key_exists("ScalingScheduledTaskName", $param) and $param["ScalingScheduledTaskName"] !== null) {
            if (is_bool($param["ScalingScheduledTaskName"])) {
                $this->RequestParams["ScalingScheduledTaskName"] = $param["ScalingScheduledTaskName"] ? "true" : "false";
            } else {
                $this->RequestParams["ScalingScheduledTaskName"] = $param["ScalingScheduledTaskName"];
            }
        }
        if (array_key_exists("ReadjustMinSize", $param) and $param["ReadjustMinSize"] !== null) {
            if (is_bool($param["ReadjustMinSize"])) {
                $this->RequestParams["ReadjustMinSize"] = $param["ReadjustMinSize"] ? "true" : "false";
            } else {
                $this->RequestParams["ReadjustMinSize"] = $param["ReadjustMinSize"];
            }
        }
        if (array_key_exists("ReadjustMaxSize", $param) and $param["ReadjustMaxSize"] !== null) {
            if (is_bool($param["ReadjustMaxSize"])) {
                $this->RequestParams["ReadjustMaxSize"] = $param["ReadjustMaxSize"] ? "true" : "false";
            } else {
                $this->RequestParams["ReadjustMaxSize"] = $param["ReadjustMaxSize"];
            }
        }
        if (array_key_exists("ReadjustExpectSize", $param) and $param["ReadjustExpectSize"] !== null) {
            if (is_bool($param["ReadjustExpectSize"])) {
                $this->RequestParams["ReadjustExpectSize"] = $param["ReadjustExpectSize"] ? "true" : "false";
            } else {
                $this->RequestParams["ReadjustExpectSize"] = $param["ReadjustExpectSize"];
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
        if (array_key_exists("Recurrence", $param) and $param["Recurrence"] !== null) {
            if (is_bool($param["Recurrence"])) {
                $this->RequestParams["Recurrence"] = $param["Recurrence"] ? "true" : "false";
            } else {
                $this->RequestParams["Recurrence"] = $param["Recurrence"];
            }
        }
        if (array_key_exists("RepeatUnit", $param) and $param["RepeatUnit"] !== null) {
            if (is_bool($param["RepeatUnit"])) {
                $this->RequestParams["RepeatUnit"] = $param["RepeatUnit"] ? "true" : "false";
            } else {
                $this->RequestParams["RepeatUnit"] = $param["RepeatUnit"];
            }
        }
        if (array_key_exists("RepeatCycle", $param) and $param["RepeatCycle"] !== null) {
            if (is_bool($param["RepeatCycle"])) {
                $this->RequestParams["RepeatCycle"] = $param["RepeatCycle"] ? "true" : "false";
            } else {
                $this->RequestParams["RepeatCycle"] = $param["RepeatCycle"];
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