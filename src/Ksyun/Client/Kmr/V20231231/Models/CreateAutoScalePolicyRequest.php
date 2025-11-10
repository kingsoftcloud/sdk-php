<?php
namespace  Ksyun\Client\Kmr\V20231231\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateAutoScalePolicyRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "InstanceId" => null,
         /**String**/
        "PolicyName" => null,
         /**String**/
        "ChargeType" => null,
         /**String**/
        "ExecuteCycle" => null,
         /**Object**/
        "ExecuteRules" => null,
    ];


    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            if(is_bool($param["InstanceId"])){
                $this->RequestParams["InstanceId"] = $param["InstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceId"] = $param["InstanceId"];
            }
        }
        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            if(is_bool($param["PolicyName"])){
                $this->RequestParams["PolicyName"] = $param["PolicyName"] ? "true" : "false";
            } else {
                $this->RequestParams["PolicyName"] = $param["PolicyName"];
            }
        }
        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            if(is_bool($param["ChargeType"])){
                $this->RequestParams["ChargeType"] = $param["ChargeType"] ? "true" : "false";
            } else {
                $this->RequestParams["ChargeType"] = $param["ChargeType"];
            }
        }
        if (array_key_exists("ExecuteCycle",$param) and $param["ExecuteCycle"] !== null) {
            if(is_bool($param["ExecuteCycle"])){
                $this->RequestParams["ExecuteCycle"] = $param["ExecuteCycle"] ? "true" : "false";
            } else {
                $this->RequestParams["ExecuteCycle"] = $param["ExecuteCycle"];
            }
        }
        if (array_key_exists("ExecuteRules",$param) and $param["ExecuteRules"] !== null) {
            if(is_bool($param["ExecuteRules"])){
                $this->RequestParams["ExecuteRules"] = $param["ExecuteRules"] ? "true" : "false";
            } else {
                $this->RequestParams["ExecuteRules"] = $param["ExecuteRules"];
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