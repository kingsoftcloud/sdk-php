<?php

namespace Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyScalingGroupRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "ScalingGroupId" => null,
        /**Int**/
        "MinSize" => null,
        /**Int**/
        "MaxSize" => null,
        /**Int**/
        "DesiredCapacity" => null,
        /**String**/
        "RemovePolicy" => null,
        /**String**/
        "ScalingGroupName" => null,
        /**String**/
        "ScalingConfigurationId" => null,
        /**String**/
        "SubnetStrategy" => null,
    ];

    /**特殊参数类型:Filter**/
    public $SubnetId = [];
    /**特殊参数类型:Filter**/
    public $Slb = [];
    /**特殊参数类型:Filter**/
    public $ContainerSubnetId = [];

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
        if (array_key_exists("MinSize", $param) and $param["MinSize"] !== null) {
            if (is_bool($param["MinSize"])) {
                $this->RequestParams["MinSize"] = $param["MinSize"] ? "true" : "false";
            } else {
                $this->RequestParams["MinSize"] = $param["MinSize"];
            }
        }
        if (array_key_exists("MaxSize", $param) and $param["MaxSize"] !== null) {
            if (is_bool($param["MaxSize"])) {
                $this->RequestParams["MaxSize"] = $param["MaxSize"] ? "true" : "false";
            } else {
                $this->RequestParams["MaxSize"] = $param["MaxSize"];
            }
        }
        if (array_key_exists("DesiredCapacity", $param) and $param["DesiredCapacity"] !== null) {
            if (is_bool($param["DesiredCapacity"])) {
                $this->RequestParams["DesiredCapacity"] = $param["DesiredCapacity"] ? "true" : "false";
            } else {
                $this->RequestParams["DesiredCapacity"] = $param["DesiredCapacity"];
            }
        }
        if (array_key_exists("RemovePolicy", $param) and $param["RemovePolicy"] !== null) {
            if (is_bool($param["RemovePolicy"])) {
                $this->RequestParams["RemovePolicy"] = $param["RemovePolicy"] ? "true" : "false";
            } else {
                $this->RequestParams["RemovePolicy"] = $param["RemovePolicy"];
            }
        }
        if (array_key_exists("ScalingGroupName", $param) and $param["ScalingGroupName"] !== null) {
            if (is_bool($param["ScalingGroupName"])) {
                $this->RequestParams["ScalingGroupName"] = $param["ScalingGroupName"] ? "true" : "false";
            } else {
                $this->RequestParams["ScalingGroupName"] = $param["ScalingGroupName"];
            }
        }
        if (array_key_exists("ScalingConfigurationId", $param) and $param["ScalingConfigurationId"] !== null) {
            if (is_bool($param["ScalingConfigurationId"])) {
                $this->RequestParams["ScalingConfigurationId"] = $param["ScalingConfigurationId"] ? "true" : "false";
            } else {
                $this->RequestParams["ScalingConfigurationId"] = $param["ScalingConfigurationId"];
            }
        }
        if (array_key_exists("SubnetId", $param) and $param["SubnetId"] !== null) {
            $res = $this->formatFilterParams("SubnetId", $param["SubnetId"]);
            $this->_unserialize("SubnetId", $res);
        }
        if (array_key_exists("SubnetStrategy", $param) and $param["SubnetStrategy"] !== null) {
            if (is_bool($param["SubnetStrategy"])) {
                $this->RequestParams["SubnetStrategy"] = $param["SubnetStrategy"] ? "true" : "false";
            } else {
                $this->RequestParams["SubnetStrategy"] = $param["SubnetStrategy"];
            }
        }
        if (array_key_exists("Slb", $param) and $param["Slb"] !== null) {
            $res = $this->formatFilterParams("Slb", $param["Slb"]);
            $this->_unserialize("Slb", $res);
        }
        if (array_key_exists("ContainerSubnetId", $param) and $param["ContainerSubnetId"] !== null) {
            $res = $this->formatFilterParams("ContainerSubnetId", $param["ContainerSubnetId"]);
            $this->_unserialize("ContainerSubnetId", $res);
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