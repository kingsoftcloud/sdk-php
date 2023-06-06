<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateNetworkAclEntryRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "NetworkAclId" => null,
         /**String**/
        "Direction" => null,
         /**Int**/
        "RuleNumber" => null,
         /**String**/
        "Protocol" => null,
         /**Int**/
        "IcmpType" => null,
         /**Int**/
        "IcmpCode" => null,
         /**String**/
        "RuleAction" => null,
         /**Int**/
        "PortRangeFrom" => null,
         /**Int**/
        "PortRangeTo" => null,
         /**String**/
        "CidrBlock" => null,
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
        if (array_key_exists("NetworkAclId",$param) and $param["NetworkAclId"] !== null) {
            if(is_bool($param["NetworkAclId"])){
                $this->RequestParams["NetworkAclId"] = $param["NetworkAclId"] ? "true" : "false";
            } else {
                $this->RequestParams["NetworkAclId"] = $param["NetworkAclId"];
            }
        }
        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            if(is_bool($param["Direction"])){
                $this->RequestParams["Direction"] = $param["Direction"] ? "true" : "false";
            } else {
                $this->RequestParams["Direction"] = $param["Direction"];
            }
        }
        if (array_key_exists("RuleNumber",$param) and $param["RuleNumber"] !== null) {
            if(is_bool($param["RuleNumber"])){
                $this->RequestParams["RuleNumber"] = $param["RuleNumber"] ? "true" : "false";
            } else {
                $this->RequestParams["RuleNumber"] = $param["RuleNumber"];
            }
        }
        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            if(is_bool($param["Protocol"])){
                $this->RequestParams["Protocol"] = $param["Protocol"] ? "true" : "false";
            } else {
                $this->RequestParams["Protocol"] = $param["Protocol"];
            }
        }
        if (array_key_exists("IcmpType",$param) and $param["IcmpType"] !== null) {
            if(is_bool($param["IcmpType"])){
                $this->RequestParams["IcmpType"] = $param["IcmpType"] ? "true" : "false";
            } else {
                $this->RequestParams["IcmpType"] = $param["IcmpType"];
            }
        }
        if (array_key_exists("IcmpCode",$param) and $param["IcmpCode"] !== null) {
            if(is_bool($param["IcmpCode"])){
                $this->RequestParams["IcmpCode"] = $param["IcmpCode"] ? "true" : "false";
            } else {
                $this->RequestParams["IcmpCode"] = $param["IcmpCode"];
            }
        }
        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            if(is_bool($param["RuleAction"])){
                $this->RequestParams["RuleAction"] = $param["RuleAction"] ? "true" : "false";
            } else {
                $this->RequestParams["RuleAction"] = $param["RuleAction"];
            }
        }
        if (array_key_exists("PortRangeFrom",$param) and $param["PortRangeFrom"] !== null) {
            if(is_bool($param["PortRangeFrom"])){
                $this->RequestParams["PortRangeFrom"] = $param["PortRangeFrom"] ? "true" : "false";
            } else {
                $this->RequestParams["PortRangeFrom"] = $param["PortRangeFrom"];
            }
        }
        if (array_key_exists("PortRangeTo",$param) and $param["PortRangeTo"] !== null) {
            if(is_bool($param["PortRangeTo"])){
                $this->RequestParams["PortRangeTo"] = $param["PortRangeTo"] ? "true" : "false";
            } else {
                $this->RequestParams["PortRangeTo"] = $param["PortRangeTo"];
            }
        }
        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            if(is_bool($param["CidrBlock"])){
                $this->RequestParams["CidrBlock"] = $param["CidrBlock"] ? "true" : "false";
            } else {
                $this->RequestParams["CidrBlock"] = $param["CidrBlock"];
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