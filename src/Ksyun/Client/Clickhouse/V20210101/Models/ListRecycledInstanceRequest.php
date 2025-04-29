<?php

namespace Ksyun\Client\Clickhouse\V20210101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ListRecycledInstanceRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "ProductType" => null,
        /**String**/
        "FuzzySearch" => null,
        /**Int**/
        "Offset" => null,
        /**Int**/
        "Limit" => null,
    ];

    /**特殊参数类型:Filter**/
    public $ProjectIds = [];
    /**特殊参数类型:Filter**/
    public $OrderBy = [];

    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/json");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ProductType", $param) and $param["ProductType"] !== null) {
            if (is_bool($param["ProductType"])) {
                $this->RequestParams["ProductType"] = $param["ProductType"] ? "true" : "false";
            } else {
                $this->RequestParams["ProductType"] = $param["ProductType"];
            }
        }
        if (array_key_exists("ProjectIds", $param) and $param["ProjectIds"] !== null) {
            $res = $this->formatFilterParams("ProjectIds", $param["ProjectIds"]);
            $this->_unserialize("ProjectIds", $res);
        }
        if (array_key_exists("FuzzySearch", $param) and $param["FuzzySearch"] !== null) {
            if (is_bool($param["FuzzySearch"])) {
                $this->RequestParams["FuzzySearch"] = $param["FuzzySearch"] ? "true" : "false";
            } else {
                $this->RequestParams["FuzzySearch"] = $param["FuzzySearch"];
            }
        }
        if (array_key_exists("OrderBy", $param) and $param["OrderBy"] !== null) {
            $res = $this->formatFilterParams("OrderBy", $param["OrderBy"]);
            $this->_unserialize("OrderBy", $res);
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