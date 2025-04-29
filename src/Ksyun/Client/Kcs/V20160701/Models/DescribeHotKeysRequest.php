<?php

namespace Ksyun\Client\Kcs\V20160701\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeHotKeysRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "AvailableZone" => null,
        /**String**/
        "CacheId" => null,
        /**Int**/
        "Limit" => null,
        /**Int**/
        "Offset" => null,
        /**String**/
        "SortKey" => null,
        /**String**/
        "SortDir" => null,
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
        if (array_key_exists("AvailableZone", $param) and $param["AvailableZone"] !== null) {
            if (is_bool($param["AvailableZone"])) {
                $this->RequestParams["AvailableZone"] = $param["AvailableZone"] ? "true" : "false";
            } else {
                $this->RequestParams["AvailableZone"] = $param["AvailableZone"];
            }
        }
        if (array_key_exists("CacheId", $param) and $param["CacheId"] !== null) {
            if (is_bool($param["CacheId"])) {
                $this->RequestParams["CacheId"] = $param["CacheId"] ? "true" : "false";
            } else {
                $this->RequestParams["CacheId"] = $param["CacheId"];
            }
        }
        if (array_key_exists("Limit", $param) and $param["Limit"] !== null) {
            if (is_bool($param["Limit"])) {
                $this->RequestParams["Limit"] = $param["Limit"] ? "true" : "false";
            } else {
                $this->RequestParams["Limit"] = $param["Limit"];
            }
        }
        if (array_key_exists("Offset", $param) and $param["Offset"] !== null) {
            if (is_bool($param["Offset"])) {
                $this->RequestParams["Offset"] = $param["Offset"] ? "true" : "false";
            } else {
                $this->RequestParams["Offset"] = $param["Offset"];
            }
        }
        if (array_key_exists("SortKey", $param) and $param["SortKey"] !== null) {
            if (is_bool($param["SortKey"])) {
                $this->RequestParams["SortKey"] = $param["SortKey"] ? "true" : "false";
            } else {
                $this->RequestParams["SortKey"] = $param["SortKey"];
            }
        }
        if (array_key_exists("SortDir", $param) and $param["SortDir"] !== null) {
            if (is_bool($param["SortDir"])) {
                $this->RequestParams["SortDir"] = $param["SortDir"] ? "true" : "false";
            } else {
                $this->RequestParams["SortDir"] = $param["SortDir"];
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