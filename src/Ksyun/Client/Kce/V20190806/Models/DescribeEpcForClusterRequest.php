<?php

namespace Ksyun\Client\Kce\V20190806\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeEpcForClusterRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "ClusterId" => null,
        /**Int**/
        "Marker" => null,
        /**Int**/
        "MaxResults" => null,
    ];

    /**特殊参数类型:Filter**/
    public $InstanceId = [];
    /**特殊参数类型:Filter**/
    public $Filter = [];

    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ClusterId", $param) and $param["ClusterId"] !== null) {
            if (is_bool($param["ClusterId"])) {
                $this->RequestParams["ClusterId"] = $param["ClusterId"] ? "true" : "false";
            } else {
                $this->RequestParams["ClusterId"] = $param["ClusterId"];
            }
        }
        if (array_key_exists("InstanceId", $param) and $param["InstanceId"] !== null) {
            $res = $this->formatFilterParams("InstanceId", $param["InstanceId"]);
            $this->_unserialize("InstanceId", $res);
        }
        if (array_key_exists("Filter", $param) and $param["Filter"] !== null) {
            $res = $this->formatFilterParams("Filter", $param["Filter"]);
            $this->_unserialize("Filter", $res);
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