<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateScalingGroupRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ScalingGroupName" => null,
         /**String**/
        "ScalingConfigurationId" => null,
         /**String**/
        "MinSize" => null,
         /**Int**/
        "DesiredCapacity" => null,
         /**String**/
        "RemovePolicy" => null,
         /**String**/
        "SubnetStrategy" => null,
         /**String**/
        "SecurityGroupId" => null,
    ];

     /**特殊参数类型:Filter**/
    public $SubnetId = [];
      /**特殊参数类型:Filter**/
    public $Slb = [];
 
    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ScalingGroupName",$param) and $param["ScalingGroupName"] !== null) {
            if(is_bool($param["ScalingGroupName"])){
                $this->RequestParams["ScalingGroupName"] = $param["ScalingGroupName"] ? "true" : "false";
            } else {
                $this->RequestParams["ScalingGroupName"] = $param["ScalingGroupName"];
            }
        }
        if (array_key_exists("ScalingConfigurationId",$param) and $param["ScalingConfigurationId"] !== null) {
            if(is_bool($param["ScalingConfigurationId"])){
                $this->RequestParams["ScalingConfigurationId"] = $param["ScalingConfigurationId"] ? "true" : "false";
            } else {
                $this->RequestParams["ScalingConfigurationId"] = $param["ScalingConfigurationId"];
            }
        }
        if (array_key_exists("MinSize",$param) and $param["MinSize"] !== null) {
            if(is_bool($param["MinSize"])){
                $this->RequestParams["MinSize"] = $param["MinSize"] ? "true" : "false";
            } else {
                $this->RequestParams["MinSize"] = $param["MinSize"];
            }
        }
        if (array_key_exists("DesiredCapacity",$param) and $param["DesiredCapacity"] !== null) {
            if(is_bool($param["DesiredCapacity"])){
                $this->RequestParams["DesiredCapacity"] = $param["DesiredCapacity"] ? "true" : "false";
            } else {
                $this->RequestParams["DesiredCapacity"] = $param["DesiredCapacity"];
            }
        }
        if (array_key_exists("RemovePolicy",$param) and $param["RemovePolicy"] !== null) {
            if(is_bool($param["RemovePolicy"])){
                $this->RequestParams["RemovePolicy"] = $param["RemovePolicy"] ? "true" : "false";
            } else {
                $this->RequestParams["RemovePolicy"] = $param["RemovePolicy"];
            }
        }
        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $res = $this->formatFilterParams("SubnetId",$param["SubnetId"]);
            $this->_unserialize("SubnetId",$res);
        }
        if (array_key_exists("SubnetStrategy",$param) and $param["SubnetStrategy"] !== null) {
            if(is_bool($param["SubnetStrategy"])){
                $this->RequestParams["SubnetStrategy"] = $param["SubnetStrategy"] ? "true" : "false";
            } else {
                $this->RequestParams["SubnetStrategy"] = $param["SubnetStrategy"];
            }
        }
        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            if(is_bool($param["SecurityGroupId"])){
                $this->RequestParams["SecurityGroupId"] = $param["SecurityGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupId"] = $param["SecurityGroupId"];
            }
        }
        if (array_key_exists("Slb",$param) and $param["Slb"] !== null) {
            $res = $this->formatFilterParams("Slb",$param["Slb"]);
            $this->_unserialize("Slb",$res);
        }

    }

    private function _unserialize($name,$params)
    {
        if ($params === null) {
            return;
        }
        foreach ($params as $key => $value){
            $this->$name[$key] = $value;
        }

    }
}