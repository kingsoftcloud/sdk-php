<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DeleteScalingPolicyRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ScalingGroupId" => null,
         /**String**/
        "ScalingPolicyId" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ScalingGroupId",$param) and $param["ScalingGroupId"] !== null) {
            if(is_bool($param["ScalingGroupId"])){
                $this->RequestParams["ScalingGroupId"] = $param["ScalingGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["ScalingGroupId"] = $param["ScalingGroupId"];
            }
        }
        if (array_key_exists("ScalingPolicyId",$param) and $param["ScalingPolicyId"] !== null) {
            if(is_bool($param["ScalingPolicyId"])){
                $this->RequestParams["ScalingPolicyId"] = $param["ScalingPolicyId"] ? "true" : "false";
            } else {
                $this->RequestParams["ScalingPolicyId"] = $param["ScalingPolicyId"];
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