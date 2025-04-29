<?php

namespace Ksyun\Client\Memcached\V20180627\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeCacheClustersRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "Engine" => null,
        /**String**/
        "CacheId" => null,
        /**String**/
        "Name" => null,
        /**String**/
        "Vip" => null,
        /**String**/
        "VpcId" => null,
        /**String**/
        "VnetId" => null,
        /**String**/
        "Offset" => null,
        /**String**/
        "Limit" => null,
        /**String**/
        "OrderBy" => null,
        /**String**/
        "IamProjectId" => null,
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
        if (array_key_exists("Engine", $param) and $param["Engine"] !== null) {
            if (is_bool($param["Engine"])) {
                $this->RequestParams["Engine"] = $param["Engine"] ? "true" : "false";
            } else {
                $this->RequestParams["Engine"] = $param["Engine"];
            }
        }
        if (array_key_exists("CacheId", $param) and $param["CacheId"] !== null) {
            if (is_bool($param["CacheId"])) {
                $this->RequestParams["CacheId"] = $param["CacheId"] ? "true" : "false";
            } else {
                $this->RequestParams["CacheId"] = $param["CacheId"];
            }
        }
        if (array_key_exists("Name", $param) and $param["Name"] !== null) {
            if (is_bool($param["Name"])) {
                $this->RequestParams["Name"] = $param["Name"] ? "true" : "false";
            } else {
                $this->RequestParams["Name"] = $param["Name"];
            }
        }
        if (array_key_exists("Vip", $param) and $param["Vip"] !== null) {
            if (is_bool($param["Vip"])) {
                $this->RequestParams["Vip"] = $param["Vip"] ? "true" : "false";
            } else {
                $this->RequestParams["Vip"] = $param["Vip"];
            }
        }
        if (array_key_exists("VpcId", $param) and $param["VpcId"] !== null) {
            if (is_bool($param["VpcId"])) {
                $this->RequestParams["VpcId"] = $param["VpcId"] ? "true" : "false";
            } else {
                $this->RequestParams["VpcId"] = $param["VpcId"];
            }
        }
        if (array_key_exists("VnetId", $param) and $param["VnetId"] !== null) {
            if (is_bool($param["VnetId"])) {
                $this->RequestParams["VnetId"] = $param["VnetId"] ? "true" : "false";
            } else {
                $this->RequestParams["VnetId"] = $param["VnetId"];
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
        if (array_key_exists("OrderBy", $param) and $param["OrderBy"] !== null) {
            if (is_bool($param["OrderBy"])) {
                $this->RequestParams["OrderBy"] = $param["OrderBy"] ? "true" : "false";
            } else {
                $this->RequestParams["OrderBy"] = $param["OrderBy"];
            }
        }
        if (array_key_exists("IamProjectId", $param) and $param["IamProjectId"] !== null) {
            if (is_bool($param["IamProjectId"])) {
                $this->RequestParams["IamProjectId"] = $param["IamProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["IamProjectId"] = $param["IamProjectId"];
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