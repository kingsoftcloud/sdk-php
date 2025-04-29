<?php

namespace Ksyun\Client\Kcs\V20160701\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ResizeCacheClusterRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "AvailableZone" => null,
        /**String**/
        "CacheId" => null,
        /**Int**/
        "Capacity" => null,
        /**Int**/
        "ShardSize" => null,
        /**Int**/
        "ShardNum" => null,
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
        if (array_key_exists("Capacity", $param) and $param["Capacity"] !== null) {
            if (is_bool($param["Capacity"])) {
                $this->RequestParams["Capacity"] = $param["Capacity"] ? "true" : "false";
            } else {
                $this->RequestParams["Capacity"] = $param["Capacity"];
            }
        }
        if (array_key_exists("ShardSize", $param) and $param["ShardSize"] !== null) {
            if (is_bool($param["ShardSize"])) {
                $this->RequestParams["ShardSize"] = $param["ShardSize"] ? "true" : "false";
            } else {
                $this->RequestParams["ShardSize"] = $param["ShardSize"];
            }
        }
        if (array_key_exists("ShardNum", $param) and $param["ShardNum"] !== null) {
            if (is_bool($param["ShardNum"])) {
                $this->RequestParams["ShardNum"] = $param["ShardNum"] ? "true" : "false";
            } else {
                $this->RequestParams["ShardNum"] = $param["ShardNum"];
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