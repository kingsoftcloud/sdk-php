<?php

namespace Ksyun\Client\Krds\V20160701\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class SqlAuditReportRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "DBInstanceIdentifier" => null,
        /**String**/
        "TimeRange" => null,
        /**String**/
        "StartTime" => null,
        /**String**/
        "EndTime" => null,
        /**String**/
        "DbName" => null,
        /**String**/
        "SortBy" => null,
        /**Int**/
        "SortWay" => null,
        /**Int**/
        "Page" => null,
        /**Int**/
        "Size" => null,
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
        if (array_key_exists("TimeRange", $param) and $param["TimeRange"] !== null) {
            if (is_bool($param["TimeRange"])) {
                $this->RequestParams["TimeRange"] = $param["TimeRange"] ? "true" : "false";
            } else {
                $this->RequestParams["TimeRange"] = $param["TimeRange"];
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
        if (array_key_exists("DbName", $param) and $param["DbName"] !== null) {
            if (is_bool($param["DbName"])) {
                $this->RequestParams["DbName"] = $param["DbName"] ? "true" : "false";
            } else {
                $this->RequestParams["DbName"] = $param["DbName"];
            }
        }
        if (array_key_exists("SortBy", $param) and $param["SortBy"] !== null) {
            if (is_bool($param["SortBy"])) {
                $this->RequestParams["SortBy"] = $param["SortBy"] ? "true" : "false";
            } else {
                $this->RequestParams["SortBy"] = $param["SortBy"];
            }
        }
        if (array_key_exists("SortWay", $param) and $param["SortWay"] !== null) {
            if (is_bool($param["SortWay"])) {
                $this->RequestParams["SortWay"] = $param["SortWay"] ? "true" : "false";
            } else {
                $this->RequestParams["SortWay"] = $param["SortWay"];
            }
        }
        if (array_key_exists("Page", $param) and $param["Page"] !== null) {
            if (is_bool($param["Page"])) {
                $this->RequestParams["Page"] = $param["Page"] ? "true" : "false";
            } else {
                $this->RequestParams["Page"] = $param["Page"];
            }
        }
        if (array_key_exists("Size", $param) and $param["Size"] !== null) {
            if (is_bool($param["Size"])) {
                $this->RequestParams["Size"] = $param["Size"] ? "true" : "false";
            } else {
                $this->RequestParams["Size"] = $param["Size"];
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