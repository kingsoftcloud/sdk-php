<?php

namespace Ksyun\Client\Postgresql\V20181225\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeDBLogFilesRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "DBInstanceIdentifier" => null,
        /**String**/
        "DBLogType" => null,
        /**String**/
        "StartTime" => null,
        /**String**/
        "EndTime" => null,
        /**Int**/
        "MaxFileSize" => null,
        /**Int**/
        "Marker" => null,
        /**Int**/
        "MaxRecords" => null,
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
        if (array_key_exists("DBInstanceIdentifier", $param) and $param["DBInstanceIdentifier"] !== null) {
            if (is_bool($param["DBInstanceIdentifier"])) {
                $this->RequestParams["DBInstanceIdentifier"] = $param["DBInstanceIdentifier"] ? "true" : "false";
            } else {
                $this->RequestParams["DBInstanceIdentifier"] = $param["DBInstanceIdentifier"];
            }
        }
        if (array_key_exists("DBLogType", $param) and $param["DBLogType"] !== null) {
            if (is_bool($param["DBLogType"])) {
                $this->RequestParams["DBLogType"] = $param["DBLogType"] ? "true" : "false";
            } else {
                $this->RequestParams["DBLogType"] = $param["DBLogType"];
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
        if (array_key_exists("MaxFileSize", $param) and $param["MaxFileSize"] !== null) {
            if (is_bool($param["MaxFileSize"])) {
                $this->RequestParams["MaxFileSize"] = $param["MaxFileSize"] ? "true" : "false";
            } else {
                $this->RequestParams["MaxFileSize"] = $param["MaxFileSize"];
            }
        }
        if (array_key_exists("Marker", $param) and $param["Marker"] !== null) {
            if (is_bool($param["Marker"])) {
                $this->RequestParams["Marker"] = $param["Marker"] ? "true" : "false";
            } else {
                $this->RequestParams["Marker"] = $param["Marker"];
            }
        }
        if (array_key_exists("MaxRecords", $param) and $param["MaxRecords"] !== null) {
            if (is_bool($param["MaxRecords"])) {
                $this->RequestParams["MaxRecords"] = $param["MaxRecords"] ? "true" : "false";
            } else {
                $this->RequestParams["MaxRecords"] = $param["MaxRecords"];
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