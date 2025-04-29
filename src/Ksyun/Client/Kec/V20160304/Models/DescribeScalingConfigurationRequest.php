<?php

namespace Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeScalingConfigurationRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "ScalingConfigurationName" => null,
        /**Int**/
        "Marker" => null,
        /**Int**/
        "MaxResults" => null,
    ];

    /**特殊参数类型:Filter**/
    public $ScalingConfigurationId = [];
    /**特殊参数类型:Filter**/
    public $ProjectId = [];

    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ScalingConfigurationName", $param) and $param["ScalingConfigurationName"] !== null) {
            if (is_bool($param["ScalingConfigurationName"])) {
                $this->RequestParams["ScalingConfigurationName"] = $param["ScalingConfigurationName"] ? "true" : "false";
            } else {
                $this->RequestParams["ScalingConfigurationName"] = $param["ScalingConfigurationName"];
            }
        }
        if (array_key_exists("ScalingConfigurationId", $param) and $param["ScalingConfigurationId"] !== null) {
            $res = $this->formatFilterParams("ScalingConfigurationId", $param["ScalingConfigurationId"]);
            $this->_unserialize("ScalingConfigurationId", $res);
        }
        if (array_key_exists("Marker", $param) and $param["Marker"] !== null) {
            if (is_bool($param["Marker"])) {
                $this->RequestParams["Marker"] = $param["Marker"] ? "true" : "false";
            } else {
                $this->RequestParams["Marker"] = $param["Marker"];
            }
        }
        if (array_key_exists("ProjectId", $param) and $param["ProjectId"] !== null) {
            $res = $this->formatFilterParams("ProjectId", $param["ProjectId"]);
            $this->_unserialize("ProjectId", $res);
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