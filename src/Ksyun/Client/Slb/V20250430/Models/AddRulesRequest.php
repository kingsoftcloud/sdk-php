<?php
namespace  Ksyun\Client\Slb\V20250430\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class AddRulesRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "RuleGroupId" => null,
         /**String**/
        "RuleType" => null,
         /**String**/
        "RuleValue" => null,
         /**Array**/
        "MethodValue" => null,
         /**Array**/
        "SourceIpValue" => null,
         /**Array**/
        "HeaderValue" => null,
         /**Array**/
        "QueryValue" => null,
         /**Array**/
        "CookieValue" => null,
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
        if (array_key_exists("RuleGroupId",$param) and $param["RuleGroupId"] !== null) {
            if(is_bool($param["RuleGroupId"])){
                $this->RequestParams["RuleGroupId"] = $param["RuleGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["RuleGroupId"] = $param["RuleGroupId"];
            }
        }
        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            if(is_bool($param["RuleType"])){
                $this->RequestParams["RuleType"] = $param["RuleType"] ? "true" : "false";
            } else {
                $this->RequestParams["RuleType"] = $param["RuleType"];
            }
        }
        if (array_key_exists("RuleValue",$param) and $param["RuleValue"] !== null) {
            if(is_bool($param["RuleValue"])){
                $this->RequestParams["RuleValue"] = $param["RuleValue"] ? "true" : "false";
            } else {
                $this->RequestParams["RuleValue"] = $param["RuleValue"];
            }
        }
        if (array_key_exists("MethodValue",$param) and $param["MethodValue"] !== null) {
            if(is_bool($param["MethodValue"])){
                $this->RequestParams["MethodValue"] = $param["MethodValue"] ? "true" : "false";
            } else {
                $this->RequestParams["MethodValue"] = $param["MethodValue"];
            }
        }
        if (array_key_exists("SourceIpValue",$param) and $param["SourceIpValue"] !== null) {
            if(is_bool($param["SourceIpValue"])){
                $this->RequestParams["SourceIpValue"] = $param["SourceIpValue"] ? "true" : "false";
            } else {
                $this->RequestParams["SourceIpValue"] = $param["SourceIpValue"];
            }
        }
        if (array_key_exists("HeaderValue",$param) and $param["HeaderValue"] !== null) {
            if(is_bool($param["HeaderValue"])){
                $this->RequestParams["HeaderValue"] = $param["HeaderValue"] ? "true" : "false";
            } else {
                $this->RequestParams["HeaderValue"] = $param["HeaderValue"];
            }
        }
        if (array_key_exists("QueryValue",$param) and $param["QueryValue"] !== null) {
            if(is_bool($param["QueryValue"])){
                $this->RequestParams["QueryValue"] = $param["QueryValue"] ? "true" : "false";
            } else {
                $this->RequestParams["QueryValue"] = $param["QueryValue"];
            }
        }
        if (array_key_exists("CookieValue",$param) and $param["CookieValue"] !== null) {
            if(is_bool($param["CookieValue"])){
                $this->RequestParams["CookieValue"] = $param["CookieValue"] ? "true" : "false";
            } else {
                $this->RequestParams["CookieValue"] = $param["CookieValue"];
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