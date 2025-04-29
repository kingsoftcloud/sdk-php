<?php

namespace Ksyun\Client\Kcs\V20160701\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class AnalyzeSlowDailyRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "CacheId" => null,
        /**String**/
        "StartQueryTime" => null,
        /**String**/
        "EndQueryTime" => null,
        /**Int**/
        "PageNum" => null,
        /**Int**/
        "PageSize" => null,
        /**String**/
        "ShardId" => null,
        /**Boolean**/
        "IsProxy" => null,
        /**String**/
        "OperationType" => null,
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
        if (array_key_exists("CacheId", $param) and $param["CacheId"] !== null) {
            if (is_bool($param["CacheId"])) {
                $this->RequestParams["CacheId"] = $param["CacheId"] ? "true" : "false";
            } else {
                $this->RequestParams["CacheId"] = $param["CacheId"];
            }
        }
        if (array_key_exists("StartQueryTime", $param) and $param["StartQueryTime"] !== null) {
            if (is_bool($param["StartQueryTime"])) {
                $this->RequestParams["StartQueryTime"] = $param["StartQueryTime"] ? "true" : "false";
            } else {
                $this->RequestParams["StartQueryTime"] = $param["StartQueryTime"];
            }
        }
        if (array_key_exists("EndQueryTime", $param) and $param["EndQueryTime"] !== null) {
            if (is_bool($param["EndQueryTime"])) {
                $this->RequestParams["EndQueryTime"] = $param["EndQueryTime"] ? "true" : "false";
            } else {
                $this->RequestParams["EndQueryTime"] = $param["EndQueryTime"];
            }
        }
        if (array_key_exists("PageNum", $param) and $param["PageNum"] !== null) {
            if (is_bool($param["PageNum"])) {
                $this->RequestParams["PageNum"] = $param["PageNum"] ? "true" : "false";
            } else {
                $this->RequestParams["PageNum"] = $param["PageNum"];
            }
        }
        if (array_key_exists("PageSize", $param) and $param["PageSize"] !== null) {
            if (is_bool($param["PageSize"])) {
                $this->RequestParams["PageSize"] = $param["PageSize"] ? "true" : "false";
            } else {
                $this->RequestParams["PageSize"] = $param["PageSize"];
            }
        }
        if (array_key_exists("ShardId", $param) and $param["ShardId"] !== null) {
            if (is_bool($param["ShardId"])) {
                $this->RequestParams["ShardId"] = $param["ShardId"] ? "true" : "false";
            } else {
                $this->RequestParams["ShardId"] = $param["ShardId"];
            }
        }
        if (array_key_exists("IsProxy", $param) and $param["IsProxy"] !== null) {
            if (is_bool($param["IsProxy"])) {
                $this->RequestParams["IsProxy"] = $param["IsProxy"] ? "true" : "false";
            } else {
                $this->RequestParams["IsProxy"] = $param["IsProxy"];
            }
        }
        if (array_key_exists("OperationType", $param) and $param["OperationType"] !== null) {
            if (is_bool($param["OperationType"])) {
                $this->RequestParams["OperationType"] = $param["OperationType"] ? "true" : "false";
            } else {
                $this->RequestParams["OperationType"] = $param["OperationType"];
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