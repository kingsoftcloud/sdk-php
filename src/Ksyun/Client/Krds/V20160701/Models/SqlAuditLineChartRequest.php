<?php

namespace Ksyun\Client\Krds\V20160701\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class SqlAuditLineChartRequest extends BaseModel
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