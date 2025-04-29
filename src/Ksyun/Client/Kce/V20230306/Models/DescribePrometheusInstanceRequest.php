<?php

namespace Ksyun\Client\Kce\V20230306\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribePrometheusInstanceRequest extends BaseModel
{
    public $RequestParams = [
        /**Int**/
        "Marker" => null,
        /**Int**/
        "MaxResults" => null,
        /**String**/
        "Search" => null,
    ];

    /**特殊参数类型:Filter**/
    public $InstanceId = [];

    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceId", $param) and $param["InstanceId"] !== null) {
            $res = $this->formatFilterParams("InstanceId", $param["InstanceId"]);
            $this->_unserialize("InstanceId", $res);
        }
        if (array_key_exists("Marker", $param) and $param["Marker"] !== null) {
            if (is_bool($param["Marker"])) {
                $this->RequestParams["Marker"] = $param["Marker"] ? "true" : "false";
            } else {
                $this->RequestParams["Marker"] = $param["Marker"];
            }
        }
        if (array_key_exists("MaxResults", $param) and $param["MaxResults"] !== null) {
            if (is_bool($param["MaxResults"])) {
                $this->RequestParams["MaxResults"] = $param["MaxResults"] ? "true" : "false";
            } else {
                $this->RequestParams["MaxResults"] = $param["MaxResults"];
            }
        }
        if (array_key_exists("Search", $param) and $param["Search"] !== null) {
            if (is_bool($param["Search"])) {
                $this->RequestParams["Search"] = $param["Search"] ? "true" : "false";
            } else {
                $this->RequestParams["Search"] = $param["Search"];
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