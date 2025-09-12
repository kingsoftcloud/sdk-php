<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class AuthorizeSecurityGroupEntryRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Description" => null,
         /**String**/
        "SecurityGroupId" => null,
         /**String**/
        "CidrBlock" => null,
         /**String**/
        "Direction" => null,
         /**String**/
        "Protocol" => null,
         /**Int**/
        "IcmpType" => null,
         /**Int**/
        "IcmpCode" => null,
         /**Int**/
        "PortRangeFrom" => null,
         /**Int**/
        "PortRangeTo" => null,
         /**String**/
        "RuleTag" => null,
         /**Int**/
        "Priority" => null,
         /**String**/
        "Policy" => null,
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
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            if(is_bool($param["Description"])){
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
            }
        }
        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            if(is_bool($param["SecurityGroupId"])){
                $this->RequestParams["SecurityGroupId"] = $param["SecurityGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupId"] = $param["SecurityGroupId"];
            }
        }
        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            if(is_bool($param["CidrBlock"])){
                $this->RequestParams["CidrBlock"] = $param["CidrBlock"] ? "true" : "false";
            } else {
                $this->RequestParams["CidrBlock"] = $param["CidrBlock"];
            }
        }
        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            if(is_bool($param["Direction"])){
                $this->RequestParams["Direction"] = $param["Direction"] ? "true" : "false";
            } else {
                $this->RequestParams["Direction"] = $param["Direction"];
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
        if (array_key_exists("RuleTag",$param) and $param["RuleTag"] !== null) {
            if(is_bool($param["RuleTag"])){
                $this->RequestParams["RuleTag"] = $param["RuleTag"] ? "true" : "false";
            } else {
                $this->RequestParams["RuleTag"] = $param["RuleTag"];
            }
        }
        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            if(is_bool($param["Priority"])){
                $this->RequestParams["Priority"] = $param["Priority"] ? "true" : "false";
            } else {
                $this->RequestParams["Priority"] = $param["Priority"];
            }
        }
        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            if(is_bool($param["Policy"])){
                $this->RequestParams["Policy"] = $param["Policy"] ? "true" : "false";
            } else {
                $this->RequestParams["Policy"] = $param["Policy"];
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