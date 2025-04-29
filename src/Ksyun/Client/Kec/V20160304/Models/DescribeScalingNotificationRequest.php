<?php

namespace Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeScalingNotificationRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "ScalingGroupId" => null,
        /**Int**/
        "Marker" => null,
        /**Int**/
        "MaxResults" => null,
    ];

    /**特殊参数类型:Filter**/
    public $ScalingNotificationId = [];

    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ScalingGroupId", $param) and $param["ScalingGroupId"] !== null) {
            if (is_bool($param["ScalingGroupId"])) {
                $this->RequestParams["ScalingGroupId"] = $param["ScalingGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["ScalingGroupId"] = $param["ScalingGroupId"];
            }
        }
        if (array_key_exists("ScalingNotificationId", $param) and $param["ScalingNotificationId"] !== null) {
            $res = $this->formatFilterParams("ScalingNotificationId", $param["ScalingNotificationId"]);
            $this->_unserialize("ScalingNotificationId", $res);
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