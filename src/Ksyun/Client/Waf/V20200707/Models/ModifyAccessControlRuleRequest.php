<?php
namespace  Ksyun\Client\Waf\V20200707\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyAccessControlRuleRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "RuleId" => null,
         /**String**/
        "RuleName" => null,
         /**String**/
        "RuleType" => null,
         /**String**/
        "RuleData" => null,
         /**String**/
        "MatchRule" => null,
         /**String**/
        "ArgName" => null,
         /**Int**/
        "Level" => null,
         /**Int**/
        "RuleAction" => null,
         /**Boolean**/
        "Status" => null,
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            if(is_bool($param["RuleId"])){
                $this->RequestParams["RuleId"] = $param["RuleId"] ? "true" : "false";
            } else {
                $this->RequestParams["RuleId"] = $param["RuleId"];
            }
        }
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            if(is_bool($param["RuleName"])){
                $this->RequestParams["RuleName"] = $param["RuleName"] ? "true" : "false";
            } else {
                $this->RequestParams["RuleName"] = $param["RuleName"];
            }
        }
        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            if(is_bool($param["RuleType"])){
                $this->RequestParams["RuleType"] = $param["RuleType"] ? "true" : "false";
            } else {
                $this->RequestParams["RuleType"] = $param["RuleType"];
            }
        }
        if (array_key_exists("RuleData",$param) and $param["RuleData"] !== null) {
            if(is_bool($param["RuleData"])){
                $this->RequestParams["RuleData"] = $param["RuleData"] ? "true" : "false";
            } else {
                $this->RequestParams["RuleData"] = $param["RuleData"];
            }
        }
        if (array_key_exists("MatchRule",$param) and $param["MatchRule"] !== null) {
            if(is_bool($param["MatchRule"])){
                $this->RequestParams["MatchRule"] = $param["MatchRule"] ? "true" : "false";
            } else {
                $this->RequestParams["MatchRule"] = $param["MatchRule"];
            }
        }
        if (array_key_exists("ArgName",$param) and $param["ArgName"] !== null) {
            if(is_bool($param["ArgName"])){
                $this->RequestParams["ArgName"] = $param["ArgName"] ? "true" : "false";
            } else {
                $this->RequestParams["ArgName"] = $param["ArgName"];
            }
        }
        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            if(is_bool($param["Level"])){
                $this->RequestParams["Level"] = $param["Level"] ? "true" : "false";
            } else {
                $this->RequestParams["Level"] = $param["Level"];
            }
        }
        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            if(is_bool($param["RuleAction"])){
                $this->RequestParams["RuleAction"] = $param["RuleAction"] ? "true" : "false";
            } else {
                $this->RequestParams["RuleAction"] = $param["RuleAction"];
            }
        }
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            if(is_bool($param["Status"])){
                $this->RequestParams["Status"] = $param["Status"] ? "true" : "false";
            } else {
                $this->RequestParams["Status"] = $param["Status"];
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