<?php
namespace  Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateAlbRuleGroupRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "AlbRuleGroupName" => null,
         /**String**/
        "AlbListenerId" => null,
         /**String**/
        "BackendServerGroupId" => null,
         /**String**/
        "Type" => null,
         /**Array**/
        "AlbRuleSet" => null,
         /**String**/
        "RedirectAlbListenerId" => null,
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
        if (array_key_exists("AlbRuleGroupName",$param) and $param["AlbRuleGroupName"] !== null) {
            if(is_bool($param["AlbRuleGroupName"])){
                $this->RequestParams["AlbRuleGroupName"] = $param["AlbRuleGroupName"] ? "true" : "false";
            } else {
                $this->RequestParams["AlbRuleGroupName"] = $param["AlbRuleGroupName"];
            }
        }
        if (array_key_exists("AlbListenerId",$param) and $param["AlbListenerId"] !== null) {
            if(is_bool($param["AlbListenerId"])){
                $this->RequestParams["AlbListenerId"] = $param["AlbListenerId"] ? "true" : "false";
            } else {
                $this->RequestParams["AlbListenerId"] = $param["AlbListenerId"];
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
        if (array_key_exists("AlbRuleSet",$param) and $param["AlbRuleSet"] !== null) {
            if(is_bool($param["AlbRuleSet"])){
                $this->RequestParams["AlbRuleSet"] = $param["AlbRuleSet"] ? "true" : "false";
            } else {
                $this->RequestParams["AlbRuleSet"] = $param["AlbRuleSet"];
            }
        }
        if (array_key_exists("RedirectAlbListenerId",$param) and $param["RedirectAlbListenerId"] !== null) {
            if(is_bool($param["RedirectAlbListenerId"])){
                $this->RequestParams["RedirectAlbListenerId"] = $param["RedirectAlbListenerId"] ? "true" : "false";
            } else {
                $this->RequestParams["RedirectAlbListenerId"] = $param["RedirectAlbListenerId"];
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