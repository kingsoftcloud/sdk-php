<?php

namespace Ksyun\Client\Cdn\V20200901\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateUserUsageDataExportTaskRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "StartTime" => null,
        /**String**/
        "EndTime" => null,
        /**String**/
        "CdnType" => null,
        /**String**/
        "TaskName" => null,
        /**String**/
        "Language" => null,
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
        if (array_key_exists("CdnType", $param) and $param["CdnType"] !== null) {
            if (is_bool($param["CdnType"])) {
                $this->RequestParams["CdnType"] = $param["CdnType"] ? "true" : "false";
            } else {
                $this->RequestParams["CdnType"] = $param["CdnType"];
            }
        }
        if (array_key_exists("TaskName", $param) and $param["TaskName"] !== null) {
            if (is_bool($param["TaskName"])) {
                $this->RequestParams["TaskName"] = $param["TaskName"] ? "true" : "false";
            } else {
                $this->RequestParams["TaskName"] = $param["TaskName"];
            }
        }
        if (array_key_exists("Language", $param) and $param["Language"] !== null) {
            if (is_bool($param["Language"])) {
                $this->RequestParams["Language"] = $param["Language"] ? "true" : "false";
            } else {
                $this->RequestParams["Language"] = $param["Language"];
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