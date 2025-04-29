<?php

namespace Ksyun\Client\Krds\V20160701\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ListAuditRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "DBInstanceIdentifier" => null,
        /**String**/
        "AccessSqlStatement" => null,
        /**String**/
        "AccessSqlLanguage" => null,
        /**String**/
        "AccessDBName" => null,
        /**String**/
        "SourceIp" => null,
        /**String**/
        "AccessUsername" => null,
        /**String**/
        "AuditBeginTime" => null,
        /**String**/
        "AuditEndTime" => null,
        /**String**/
        "RunResult" => null,
        /**String**/
        "KeyWord" => null,
        /**String**/
        "SortBy" => null,
        /**String**/
        "SortWay" => null,
        /**String**/
        "Marker" => null,
        /**String**/
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
        if (array_key_exists("AccessSqlStatement", $param) and $param["AccessSqlStatement"] !== null) {
            if (is_bool($param["AccessSqlStatement"])) {
                $this->RequestParams["AccessSqlStatement"] = $param["AccessSqlStatement"] ? "true" : "false";
            } else {
                $this->RequestParams["AccessSqlStatement"] = $param["AccessSqlStatement"];
            }
        }
        if (array_key_exists("AccessSqlLanguage", $param) and $param["AccessSqlLanguage"] !== null) {
            if (is_bool($param["AccessSqlLanguage"])) {
                $this->RequestParams["AccessSqlLanguage"] = $param["AccessSqlLanguage"] ? "true" : "false";
            } else {
                $this->RequestParams["AccessSqlLanguage"] = $param["AccessSqlLanguage"];
            }
        }
        if (array_key_exists("AccessDBName", $param) and $param["AccessDBName"] !== null) {
            if (is_bool($param["AccessDBName"])) {
                $this->RequestParams["AccessDBName"] = $param["AccessDBName"] ? "true" : "false";
            } else {
                $this->RequestParams["AccessDBName"] = $param["AccessDBName"];
            }
        }
        if (array_key_exists("SourceIp", $param) and $param["SourceIp"] !== null) {
            if (is_bool($param["SourceIp"])) {
                $this->RequestParams["SourceIp"] = $param["SourceIp"] ? "true" : "false";
            } else {
                $this->RequestParams["SourceIp"] = $param["SourceIp"];
            }
        }
        if (array_key_exists("AccessUsername", $param) and $param["AccessUsername"] !== null) {
            if (is_bool($param["AccessUsername"])) {
                $this->RequestParams["AccessUsername"] = $param["AccessUsername"] ? "true" : "false";
            } else {
                $this->RequestParams["AccessUsername"] = $param["AccessUsername"];
            }
        }
        if (array_key_exists("AuditBeginTime", $param) and $param["AuditBeginTime"] !== null) {
            if (is_bool($param["AuditBeginTime"])) {
                $this->RequestParams["AuditBeginTime"] = $param["AuditBeginTime"] ? "true" : "false";
            } else {
                $this->RequestParams["AuditBeginTime"] = $param["AuditBeginTime"];
            }
        }
        if (array_key_exists("AuditEndTime", $param) and $param["AuditEndTime"] !== null) {
            if (is_bool($param["AuditEndTime"])) {
                $this->RequestParams["AuditEndTime"] = $param["AuditEndTime"] ? "true" : "false";
            } else {
                $this->RequestParams["AuditEndTime"] = $param["AuditEndTime"];
            }
        }
        if (array_key_exists("RunResult", $param) and $param["RunResult"] !== null) {
            if (is_bool($param["RunResult"])) {
                $this->RequestParams["RunResult"] = $param["RunResult"] ? "true" : "false";
            } else {
                $this->RequestParams["RunResult"] = $param["RunResult"];
            }
        }
        if (array_key_exists("KeyWord", $param) and $param["KeyWord"] !== null) {
            if (is_bool($param["KeyWord"])) {
                $this->RequestParams["KeyWord"] = $param["KeyWord"] ? "true" : "false";
            } else {
                $this->RequestParams["KeyWord"] = $param["KeyWord"];
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