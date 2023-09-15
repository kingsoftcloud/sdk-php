<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeScalingGroupRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ScalingGroupName" => null,
         /**String**/
        "ScalingConfigurationId" => null,
         /**String**/
        "VpcId" => null,
         /**Int**/
        "Marker" => null,
         /**Int**/
        "MaxResults" => null,
    ];

     /**特殊参数类型:Filter**/
    public $ScalingGroupId = [];
      /**特殊参数类型:Filter**/
    public $ScalingActivityId = [];
 
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
            $res = $this->formatFilterParams("ScalingGroupId",$param["ScalingGroupId"]);
            $this->_unserialize("ScalingGroupId",$res);
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            if(is_bool($param["VpcId"])){
                $this->RequestParams["VpcId"] = $param["VpcId"] ? "true" : "false";
            } else {
                $this->RequestParams["VpcId"] = $param["VpcId"];
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
        if (array_key_exists("ScalingActivityId",$param) and $param["ScalingActivityId"] !== null) {
            $res = $this->formatFilterParams("ScalingActivityId",$param["ScalingActivityId"]);
            $this->_unserialize("ScalingActivityId",$res);
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