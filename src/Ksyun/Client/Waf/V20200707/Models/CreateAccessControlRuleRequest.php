<?php
namespace  Ksyun\Client\Waf\V20200707\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateAccessControlRuleRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ResourceRecordId" => null,
         /**String**/
        "RuleName" => null,
         /**Int**/
        "Level" => null,
         /**Int**/
        "RuleAction" => null,
         /**Boolean**/
        "Status" => null,
         /**String**/
        "MatchRuleInfo" => null,
         /**Int**/
        "Priority" => null,
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
        if (array_key_exists("ResourceRecordId",$param) and $param["ResourceRecordId"] !== null) {
            if(is_bool($param["ResourceRecordId"])){
                $this->RequestParams["ResourceRecordId"] = $param["ResourceRecordId"] ? "true" : "false";
            } else {
                $this->RequestParams["ResourceRecordId"] = $param["ResourceRecordId"];
            }
        }
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            if(is_bool($param["RuleName"])){
                $this->RequestParams["RuleName"] = $param["RuleName"] ? "true" : "false";
            } else {
                $this->RequestParams["RuleName"] = $param["RuleName"];
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
        if (array_key_exists("MatchRuleInfo",$param) and $param["MatchRuleInfo"] !== null) {
            if(is_bool($param["MatchRuleInfo"])){
                $this->RequestParams["MatchRuleInfo"] = $param["MatchRuleInfo"] ? "true" : "false";
            } else {
                $this->RequestParams["MatchRuleInfo"] = $param["MatchRuleInfo"];
            }
        }
        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            if(is_bool($param["Priority"])){
                $this->RequestParams["Priority"] = $param["Priority"] ? "true" : "false";
            } else {
                $this->RequestParams["Priority"] = $param["Priority"];
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