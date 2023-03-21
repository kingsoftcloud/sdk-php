<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyScalingPolicyRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ScalingPolicyId" => null,
         /**String**/
        "ScalingGroupId" => null,
         /**String**/
        "ScalingPolicyName" => null,
         /**String**/
        "Metric" => null,
         /**String**/
        "AdjustmentType" => null,
         /**Int**/
        "AdjustmentValue" => null,
         /**Int**/
        "CoolDown" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ScalingPolicyId",$param) and $param["ScalingPolicyId"] !== null) {
            if(is_bool($param["ScalingPolicyId"])){
                $this->RequestParams["ScalingPolicyId"] = $param["ScalingPolicyId"] ? "true" : "false";
            } else {
                $this->RequestParams["ScalingPolicyId"] = $param["ScalingPolicyId"];
            }
        }
        if (array_key_exists("ScalingGroupId",$param) and $param["ScalingGroupId"] !== null) {
            if(is_bool($param["ScalingGroupId"])){
                $this->RequestParams["ScalingGroupId"] = $param["ScalingGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["ScalingGroupId"] = $param["ScalingGroupId"];
            }
        }
        if (array_key_exists("ScalingPolicyName",$param) and $param["ScalingPolicyName"] !== null) {
            if(is_bool($param["ScalingPolicyName"])){
                $this->RequestParams["ScalingPolicyName"] = $param["ScalingPolicyName"] ? "true" : "false";
            } else {
                $this->RequestParams["ScalingPolicyName"] = $param["ScalingPolicyName"];
            }
        }
        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            if(is_bool($param["Metric"])){
                $this->RequestParams["Metric"] = $param["Metric"] ? "true" : "false";
            } else {
                $this->RequestParams["Metric"] = $param["Metric"];
            }
        }
        if (array_key_exists("AdjustmentType",$param) and $param["AdjustmentType"] !== null) {
            if(is_bool($param["AdjustmentType"])){
                $this->RequestParams["AdjustmentType"] = $param["AdjustmentType"] ? "true" : "false";
            } else {
                $this->RequestParams["AdjustmentType"] = $param["AdjustmentType"];
            }
        }
        if (array_key_exists("AdjustmentValue",$param) and $param["AdjustmentValue"] !== null) {
            if(is_bool($param["AdjustmentValue"])){
                $this->RequestParams["AdjustmentValue"] = $param["AdjustmentValue"] ? "true" : "false";
            } else {
                $this->RequestParams["AdjustmentValue"] = $param["AdjustmentValue"];
            }
        }
        if (array_key_exists("CoolDown",$param) and $param["CoolDown"] !== null) {
            if(is_bool($param["CoolDown"])){
                $this->RequestParams["CoolDown"] = $param["CoolDown"] ? "true" : "false";
            } else {
                $this->RequestParams["CoolDown"] = $param["CoolDown"];
            }
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