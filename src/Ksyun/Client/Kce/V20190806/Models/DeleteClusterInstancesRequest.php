<?php

namespace Ksyun\Client\Kce\V20190806\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteClusterInstancesRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "ClusterId" => null,
        /**String**/
        "InstanceDeleteMode" => null,
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
        if (array_key_exists("InstanceDeleteMode", $param) and $param["InstanceDeleteMode"] !== null) {
            if (is_bool($param["InstanceDeleteMode"])) {
                $this->RequestParams["InstanceDeleteMode"] = $param["InstanceDeleteMode"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceDeleteMode"] = $param["InstanceDeleteMode"];
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