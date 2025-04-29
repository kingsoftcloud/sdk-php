<?php

namespace Ksyun\Client\Kcs\V20160701\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeCacheParameterGroupsRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "AvailableZone" => null,
        /**String**/
        "Name" => null,
        /**String**/
        "CacheParameterGroupId" => null,
        /**String**/
        "ParamVersion" => null,
        /**String**/
        "Offset" => null,
        /**String**/
        "Limit" => null,
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
        if (array_key_exists("Name", $param) and $param["Name"] !== null) {
            if (is_bool($param["Name"])) {
                $this->RequestParams["Name"] = $param["Name"] ? "true" : "false";
            } else {
                $this->RequestParams["Name"] = $param["Name"];
            }
        }
        if (array_key_exists("CacheParameterGroupId", $param) and $param["CacheParameterGroupId"] !== null) {
            if (is_bool($param["CacheParameterGroupId"])) {
                $this->RequestParams["CacheParameterGroupId"] = $param["CacheParameterGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["CacheParameterGroupId"] = $param["CacheParameterGroupId"];
            }
        }
        if (array_key_exists("ParamVersion", $param) and $param["ParamVersion"] !== null) {
            if (is_bool($param["ParamVersion"])) {
                $this->RequestParams["ParamVersion"] = $param["ParamVersion"] ? "true" : "false";
            } else {
                $this->RequestParams["ParamVersion"] = $param["ParamVersion"];
            }
        }
        if (array_key_exists("Offset", $param) and $param["Offset"] !== null) {
            if (is_bool($param["Offset"])) {
                $this->RequestParams["Offset"] = $param["Offset"] ? "true" : "false";
            } else {
                $this->RequestParams["Offset"] = $param["Offset"];
            }
        }
        if (array_key_exists("Limit", $param) and $param["Limit"] !== null) {
            if (is_bool($param["Limit"])) {
                $this->RequestParams["Limit"] = $param["Limit"] ? "true" : "false";
            } else {
                $this->RequestParams["Limit"] = $param["Limit"];
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