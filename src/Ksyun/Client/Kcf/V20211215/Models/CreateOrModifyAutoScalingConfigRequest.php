<?php
namespace  Ksyun\Client\Kcf\V20211215\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateOrModifyAutoScalingConfigRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "FunctionId" => null,
         /**Int**/
        "IdleReplicaCount" => null,
         /**Int**/
        "MaxReplicaCount" => null,
         /**Int**/
        "MinReplicaCount" => null,
         /**Int**/
        "CooldownPeriod" => null,
         /**Int**/
        "StabilizationWindowSeconds" => null,
    ];


    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/json");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("FunctionId",$param) and $param["FunctionId"] !== null) {
            if(is_bool($param["FunctionId"])){
                $this->RequestParams["FunctionId"] = $param["FunctionId"] ? "true" : "false";
            } else {
                $this->RequestParams["FunctionId"] = $param["FunctionId"];
            }
        }
        if (array_key_exists("IdleReplicaCount",$param) and $param["IdleReplicaCount"] !== null) {
            if(is_bool($param["IdleReplicaCount"])){
                $this->RequestParams["IdleReplicaCount"] = $param["IdleReplicaCount"] ? "true" : "false";
            } else {
                $this->RequestParams["IdleReplicaCount"] = $param["IdleReplicaCount"];
            }
        }
        if (array_key_exists("MaxReplicaCount",$param) and $param["MaxReplicaCount"] !== null) {
            if(is_bool($param["MaxReplicaCount"])){
                $this->RequestParams["MaxReplicaCount"] = $param["MaxReplicaCount"] ? "true" : "false";
            } else {
                $this->RequestParams["MaxReplicaCount"] = $param["MaxReplicaCount"];
            }
        }
        if (array_key_exists("MinReplicaCount",$param) and $param["MinReplicaCount"] !== null) {
            if(is_bool($param["MinReplicaCount"])){
                $this->RequestParams["MinReplicaCount"] = $param["MinReplicaCount"] ? "true" : "false";
            } else {
                $this->RequestParams["MinReplicaCount"] = $param["MinReplicaCount"];
            }
        }
        if (array_key_exists("CooldownPeriod",$param) and $param["CooldownPeriod"] !== null) {
            if(is_bool($param["CooldownPeriod"])){
                $this->RequestParams["CooldownPeriod"] = $param["CooldownPeriod"] ? "true" : "false";
            } else {
                $this->RequestParams["CooldownPeriod"] = $param["CooldownPeriod"];
            }
        }
        if (array_key_exists("StabilizationWindowSeconds",$param) and $param["StabilizationWindowSeconds"] !== null) {
            if(is_bool($param["StabilizationWindowSeconds"])){
                $this->RequestParams["StabilizationWindowSeconds"] = $param["StabilizationWindowSeconds"] ? "true" : "false";
            } else {
                $this->RequestParams["StabilizationWindowSeconds"] = $param["StabilizationWindowSeconds"];
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