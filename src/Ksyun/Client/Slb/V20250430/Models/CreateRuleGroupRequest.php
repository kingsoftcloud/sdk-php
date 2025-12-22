<?php
namespace  Ksyun\Client\Slb\V20250430\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateRuleGroupRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "RuleGroupName" => null,
         /**String**/
        "ListenerId" => null,
         /**String**/
        "BackendServerGroupId" => null,
         /**String**/
        "Type" => null,
         /**Array**/
        "RuleSet" => null,
         /**String**/
        "RedirectListenerId" => null,
         /**String**/
        "RedirectHttpCode" => null,
         /**Object**/
        "FixedResponseConfig" => null,
         /**Object**/
        "RewriteConfig" => null,
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
        if (array_key_exists("RuleGroupName",$param) and $param["RuleGroupName"] !== null) {
            if(is_bool($param["RuleGroupName"])){
                $this->RequestParams["RuleGroupName"] = $param["RuleGroupName"] ? "true" : "false";
            } else {
                $this->RequestParams["RuleGroupName"] = $param["RuleGroupName"];
            }
        }
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            if(is_bool($param["ListenerId"])){
                $this->RequestParams["ListenerId"] = $param["ListenerId"] ? "true" : "false";
            } else {
                $this->RequestParams["ListenerId"] = $param["ListenerId"];
            }
        }
        if (array_key_exists("BackendServerGroupId",$param) and $param["BackendServerGroupId"] !== null) {
            if(is_bool($param["BackendServerGroupId"])){
                $this->RequestParams["BackendServerGroupId"] = $param["BackendServerGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["BackendServerGroupId"] = $param["BackendServerGroupId"];
            }
        }
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            if(is_bool($param["Type"])){
                $this->RequestParams["Type"] = $param["Type"] ? "true" : "false";
            } else {
                $this->RequestParams["Type"] = $param["Type"];
            }
        }
        if (array_key_exists("RuleSet",$param) and $param["RuleSet"] !== null) {
            if(is_bool($param["RuleSet"])){
                $this->RequestParams["RuleSet"] = $param["RuleSet"] ? "true" : "false";
            } else {
                $this->RequestParams["RuleSet"] = $param["RuleSet"];
            }
        }
        if (array_key_exists("RedirectListenerId",$param) and $param["RedirectListenerId"] !== null) {
            if(is_bool($param["RedirectListenerId"])){
                $this->RequestParams["RedirectListenerId"] = $param["RedirectListenerId"] ? "true" : "false";
            } else {
                $this->RequestParams["RedirectListenerId"] = $param["RedirectListenerId"];
            }
        }
        if (array_key_exists("RedirectHttpCode",$param) and $param["RedirectHttpCode"] !== null) {
            if(is_bool($param["RedirectHttpCode"])){
                $this->RequestParams["RedirectHttpCode"] = $param["RedirectHttpCode"] ? "true" : "false";
            } else {
                $this->RequestParams["RedirectHttpCode"] = $param["RedirectHttpCode"];
            }
        }
        if (array_key_exists("FixedResponseConfig",$param) and $param["FixedResponseConfig"] !== null) {
            if(is_bool($param["FixedResponseConfig"])){
                $this->RequestParams["FixedResponseConfig"] = $param["FixedResponseConfig"] ? "true" : "false";
            } else {
                $this->RequestParams["FixedResponseConfig"] = $param["FixedResponseConfig"];
            }
        }
        if (array_key_exists("RewriteConfig",$param) and $param["RewriteConfig"] !== null) {
            if(is_bool($param["RewriteConfig"])){
                $this->RequestParams["RewriteConfig"] = $param["RewriteConfig"] ? "true" : "false";
            } else {
                $this->RequestParams["RewriteConfig"] = $param["RewriteConfig"];
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