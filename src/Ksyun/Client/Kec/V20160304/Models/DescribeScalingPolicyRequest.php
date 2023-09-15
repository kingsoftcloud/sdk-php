<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeScalingPolicyRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ScalingGroupId" => null,
         /**String**/
        "ScalingPolicyName" => null,
         /**Int**/
        "Marker" => null,
         /**Int**/
        "MaxResults" => null,
    ];

     /**特殊参数类型:Filter**/
    public $ScalingPolicyId = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
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
            $res = $this->formatFilterParams("ScalingPolicyId",$param["ScalingPolicyId"]);
            $this->_unserialize("ScalingPolicyId",$res);
        }
        if (array_key_exists("ScalingPolicyName",$param) and $param["ScalingPolicyName"] !== null) {
            if(is_bool($param["ScalingPolicyName"])){
                $this->RequestParams["ScalingPolicyName"] = $param["ScalingPolicyName"] ? "true" : "false";
            } else {
                $this->RequestParams["ScalingPolicyName"] = $param["ScalingPolicyName"];
            }
        }
        if (array_key_exists("Marker",$param) and $param["Marker"] !== null) {
            if(is_bool($param["Marker"])){
                $this->RequestParams["Marker"] = $param["Marker"] ? "true" : "false";
            } else {
                $this->RequestParams["Marker"] = $param["Marker"];
            }
        }
        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            if(is_bool($param["MaxResults"])){
                $this->RequestParams["MaxResults"] = $param["MaxResults"] ? "true" : "false";
            } else {
                $this->RequestParams["MaxResults"] = $param["MaxResults"];
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