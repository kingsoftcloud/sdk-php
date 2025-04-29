<?php

namespace Ksyun\Client\Kce\V20230306\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeAssociateClusterListRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "InstanceId" => null,
        /**Int**/
        "Marker" => null,
        /**Int**/
        "MaxResults" => null,
    ];

    /**特殊参数类型:Filter**/
    public $ClusterId = [];

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
            if (is_bool($param["InstanceId"])) {
                $this->RequestParams["InstanceId"] = $param["InstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceId"] = $param["InstanceId"];
            }
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
        if (array_key_exists("ClusterId", $param) and $param["ClusterId"] !== null) {
            $res = $this->formatFilterParams("ClusterId", $param["ClusterId"]);
            $this->_unserialize("ClusterId", $res);
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