<?php
namespace  Ksyun\Client\Monitor\V20220101\Models;

use Ksyun\Common\BaseModel;

class CreateAlarmPolicyRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "PolicyName" => null,
         /**Int**/
        "ProductType" => null,
         /**Int**/
        "PolicyType" => null,
         /**Int**/
        "ResourceBindType" => null,
         /**Int**/
        "ProjectId" => null,
         /**Array**/
        "InstanceIds" => null,
         /**Array**/
        "TriggerRules" => null,
         /**Array**/
        "UserNotice" => null,
         /**Array**/
        "URLNotice" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            if(is_bool($param["PolicyName"])){
                $this->RequestParams["PolicyName"] = $param["PolicyName"] ? "true" : "false";
            } else {
                $this->RequestParams["PolicyName"] = $param["PolicyName"];
            }
        }
        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            if(is_bool($param["ProductType"])){
                $this->RequestParams["ProductType"] = $param["ProductType"] ? "true" : "false";
            } else {
                $this->RequestParams["ProductType"] = $param["ProductType"];
            }
        }
        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            if(is_bool($param["PolicyType"])){
                $this->RequestParams["PolicyType"] = $param["PolicyType"] ? "true" : "false";
            } else {
                $this->RequestParams["PolicyType"] = $param["PolicyType"];
            }
        }
        if (array_key_exists("ResourceBindType",$param) and $param["ResourceBindType"] !== null) {
            if(is_bool($param["ResourceBindType"])){
                $this->RequestParams["ResourceBindType"] = $param["ResourceBindType"] ? "true" : "false";
            } else {
                $this->RequestParams["ResourceBindType"] = $param["ResourceBindType"];
            }
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            if(is_bool($param["ProjectId"])){
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
            }
        }
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            if(is_bool($param["InstanceIds"])){
                $this->RequestParams["InstanceIds"] = $param["InstanceIds"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceIds"] = $param["InstanceIds"];
            }
        }
        if (array_key_exists("TriggerRules",$param) and $param["TriggerRules"] !== null) {
            if(is_bool($param["TriggerRules"])){
                $this->RequestParams["TriggerRules"] = $param["TriggerRules"] ? "true" : "false";
            } else {
                $this->RequestParams["TriggerRules"] = $param["TriggerRules"];
            }
        }
        if (array_key_exists("UserNotice",$param) and $param["UserNotice"] !== null) {
            if(is_bool($param["UserNotice"])){
                $this->RequestParams["UserNotice"] = $param["UserNotice"] ? "true" : "false";
            } else {
                $this->RequestParams["UserNotice"] = $param["UserNotice"];
            }
        }
        if (array_key_exists("URLNotice",$param) and $param["URLNotice"] !== null) {
            if(is_bool($param["URLNotice"])){
                $this->RequestParams["URLNotice"] = $param["URLNotice"] ? "true" : "false";
            } else {
                $this->RequestParams["URLNotice"] = $param["URLNotice"];
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