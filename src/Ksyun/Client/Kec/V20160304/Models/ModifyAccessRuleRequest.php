<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyAccessRuleRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "AccessGroupId" => null,
         /**String**/
        "AccessRuleId" => null,
         /**String**/
        "SourceCidrIp" => null,
         /**String**/
        "RwAccessType" => null,
         /**String**/
        "UserAccessType" => null,
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
        if (array_key_exists("AccessGroupId",$param) and $param["AccessGroupId"] !== null) {
            if(is_bool($param["AccessGroupId"])){
                $this->RequestParams["AccessGroupId"] = $param["AccessGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["AccessGroupId"] = $param["AccessGroupId"];
            }
        }
        if (array_key_exists("AccessRuleId",$param) and $param["AccessRuleId"] !== null) {
            if(is_bool($param["AccessRuleId"])){
                $this->RequestParams["AccessRuleId"] = $param["AccessRuleId"] ? "true" : "false";
            } else {
                $this->RequestParams["AccessRuleId"] = $param["AccessRuleId"];
            }
        }
        if (array_key_exists("SourceCidrIp",$param) and $param["SourceCidrIp"] !== null) {
            if(is_bool($param["SourceCidrIp"])){
                $this->RequestParams["SourceCidrIp"] = $param["SourceCidrIp"] ? "true" : "false";
            } else {
                $this->RequestParams["SourceCidrIp"] = $param["SourceCidrIp"];
            }
        }
        if (array_key_exists("RwAccessType",$param) and $param["RwAccessType"] !== null) {
            if(is_bool($param["RwAccessType"])){
                $this->RequestParams["RwAccessType"] = $param["RwAccessType"] ? "true" : "false";
            } else {
                $this->RequestParams["RwAccessType"] = $param["RwAccessType"];
            }
        }
        if (array_key_exists("UserAccessType",$param) and $param["UserAccessType"] !== null) {
            if(is_bool($param["UserAccessType"])){
                $this->RequestParams["UserAccessType"] = $param["UserAccessType"] ? "true" : "false";
            } else {
                $this->RequestParams["UserAccessType"] = $param["UserAccessType"];
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