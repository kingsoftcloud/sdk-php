<?php
namespace  Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateLoadBalancerAclEntryRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "LoadBalancerAclId" => null,
         /**String**/
        "CidrBlock" => null,
         /**Int**/
        "RuleNumber" => null,
         /**String**/
        "RuleAction" => null,
         /**String**/
        "Protocol" => null,
         /**String**/
        "Description" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("LoadBalancerAclId",$param) and $param["LoadBalancerAclId"] !== null) {
            if(is_bool($param["LoadBalancerAclId"])){
                $this->RequestParams["LoadBalancerAclId"] = $param["LoadBalancerAclId"] ? "true" : "false";
            } else {
                $this->RequestParams["LoadBalancerAclId"] = $param["LoadBalancerAclId"];
            }
        }
        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            if(is_bool($param["CidrBlock"])){
                $this->RequestParams["CidrBlock"] = $param["CidrBlock"] ? "true" : "false";
            } else {
                $this->RequestParams["CidrBlock"] = $param["CidrBlock"];
            }
        }
        if (array_key_exists("RuleNumber",$param) and $param["RuleNumber"] !== null) {
            if(is_bool($param["RuleNumber"])){
                $this->RequestParams["RuleNumber"] = $param["RuleNumber"] ? "true" : "false";
            } else {
                $this->RequestParams["RuleNumber"] = $param["RuleNumber"];
            }
        }
        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            if(is_bool($param["RuleAction"])){
                $this->RequestParams["RuleAction"] = $param["RuleAction"] ? "true" : "false";
            } else {
                $this->RequestParams["RuleAction"] = $param["RuleAction"];
            }
        }
        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            if(is_bool($param["Protocol"])){
                $this->RequestParams["Protocol"] = $param["Protocol"] ? "true" : "false";
            } else {
                $this->RequestParams["Protocol"] = $param["Protocol"];
            }
        }
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            if(is_bool($param["Description"])){
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
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