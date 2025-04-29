<?php

namespace Ksyun\Client\Clickhouse\V20210101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescRegionRequest extends BaseModel
{
    public $RequestParams = [
        /**Int**/
        "ProductType" => null,
        /**String**/
        "RegionCode" => null,
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
        if (array_key_exists("ProductType", $param) and $param["ProductType"] !== null) {
            if (is_bool($param["ProductType"])) {
                $this->RequestParams["ProductType"] = $param["ProductType"] ? "true" : "false";
            } else {
                $this->RequestParams["ProductType"] = $param["ProductType"];
            }
        }
        if (array_key_exists("RegionCode", $param) and $param["RegionCode"] !== null) {
            if (is_bool($param["RegionCode"])) {
                $this->RequestParams["RegionCode"] = $param["RegionCode"] ? "true" : "false";
            } else {
                $this->RequestParams["RegionCode"] = $param["RegionCode"];
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