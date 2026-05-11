<?php
namespace  Ksyun\Client\Kscc\V1\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class UpdateQuotaGlobalConfigRequest extends BaseModel
{
    public $RequestParams = [
         /**Int**/
        "WarnThreshold" => null,
         /**Double**/
        "Discount" => null,
         /**String**/
        "ContactsJson" => null,
         /**Int**/
        "AccountEnabled" => null,
         /**Int**/
        "DeptEnabled" => null,
         /**Int**/
        "MemberEnabled" => null,
         /**Double**/
        "DefaultMemberQuota" => null,
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
        if (array_key_exists("WarnThreshold",$param) and $param["WarnThreshold"] !== null) {
            if(is_bool($param["WarnThreshold"])){
                $this->RequestParams["WarnThreshold"] = $param["WarnThreshold"] ? "true" : "false";
            } else {
                $this->RequestParams["WarnThreshold"] = $param["WarnThreshold"];
            }
        }
        if (array_key_exists("Discount",$param) and $param["Discount"] !== null) {
            if(is_bool($param["Discount"])){
                $this->RequestParams["Discount"] = $param["Discount"] ? "true" : "false";
            } else {
                $this->RequestParams["Discount"] = $param["Discount"];
            }
        }
        if (array_key_exists("ContactsJson",$param) and $param["ContactsJson"] !== null) {
            if(is_bool($param["ContactsJson"])){
                $this->RequestParams["ContactsJson"] = $param["ContactsJson"] ? "true" : "false";
            } else {
                $this->RequestParams["ContactsJson"] = $param["ContactsJson"];
            }
        }
        if (array_key_exists("AccountEnabled",$param) and $param["AccountEnabled"] !== null) {
            if(is_bool($param["AccountEnabled"])){
                $this->RequestParams["AccountEnabled"] = $param["AccountEnabled"] ? "true" : "false";
            } else {
                $this->RequestParams["AccountEnabled"] = $param["AccountEnabled"];
            }
        }
        if (array_key_exists("DeptEnabled",$param) and $param["DeptEnabled"] !== null) {
            if(is_bool($param["DeptEnabled"])){
                $this->RequestParams["DeptEnabled"] = $param["DeptEnabled"] ? "true" : "false";
            } else {
                $this->RequestParams["DeptEnabled"] = $param["DeptEnabled"];
            }
        }
        if (array_key_exists("MemberEnabled",$param) and $param["MemberEnabled"] !== null) {
            if(is_bool($param["MemberEnabled"])){
                $this->RequestParams["MemberEnabled"] = $param["MemberEnabled"] ? "true" : "false";
            } else {
                $this->RequestParams["MemberEnabled"] = $param["MemberEnabled"];
            }
        }
        if (array_key_exists("DefaultMemberQuota",$param) and $param["DefaultMemberQuota"] !== null) {
            if(is_bool($param["DefaultMemberQuota"])){
                $this->RequestParams["DefaultMemberQuota"] = $param["DefaultMemberQuota"] ? "true" : "false";
            } else {
                $this->RequestParams["DefaultMemberQuota"] = $param["DefaultMemberQuota"];
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