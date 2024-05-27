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
        "ListenerSync" => null,
         /**String**/
        "Method" => null,
         /**String**/
        "Type" => null,
         /**String**/
        "SessionState" => null,
         /**Int**/
        "SessionPersistencePeriod" => null,
         /**String**/
        "CookieType" => null,
         /**String**/
        "CookieName" => null,
         /**String**/
        "HealthCheckState" => null,
         /**Int**/
        "Timeout" => null,
         /**Int**/
        "Interval" => null,
         /**Int**/
        "HealthyThreshold" => null,
         /**Int**/
        "UnhealthyThreshold" => null,
         /**String**/
        "UrlPath" => null,
         /**String**/
        "HostName" => null,
         /**Array**/
        "AlbRuleSet" => null,
         /**String**/
        "RedirectAlbListenerId" => null,
         /**String**/
        "RedirectHttpCode" => null,
         /**Object**/
        "FixedResponseConfig" => null,
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
        if (array_key_exists("ListenerSync",$param) and $param["ListenerSync"] !== null) {
            if(is_bool($param["ListenerSync"])){
                $this->RequestParams["ListenerSync"] = $param["ListenerSync"] ? "true" : "false";
            } else {
                $this->RequestParams["ListenerSync"] = $param["ListenerSync"];
            }
        }
        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            if(is_bool($param["Method"])){
                $this->RequestParams["Method"] = $param["Method"] ? "true" : "false";
            } else {
                $this->RequestParams["Method"] = $param["Method"];
            }
        }
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            if(is_bool($param["Type"])){
                $this->RequestParams["Type"] = $param["Type"] ? "true" : "false";
            } else {
                $this->RequestParams["Type"] = $param["Type"];
            }
        }
        if (array_key_exists("SessionState",$param) and $param["SessionState"] !== null) {
            if(is_bool($param["SessionState"])){
                $this->RequestParams["SessionState"] = $param["SessionState"] ? "true" : "false";
            } else {
                $this->RequestParams["SessionState"] = $param["SessionState"];
            }
        }
        if (array_key_exists("SessionPersistencePeriod",$param) and $param["SessionPersistencePeriod"] !== null) {
            if(is_bool($param["SessionPersistencePeriod"])){
                $this->RequestParams["SessionPersistencePeriod"] = $param["SessionPersistencePeriod"] ? "true" : "false";
            } else {
                $this->RequestParams["SessionPersistencePeriod"] = $param["SessionPersistencePeriod"];
            }
        }
        if (array_key_exists("CookieType",$param) and $param["CookieType"] !== null) {
            if(is_bool($param["CookieType"])){
                $this->RequestParams["CookieType"] = $param["CookieType"] ? "true" : "false";
            } else {
                $this->RequestParams["CookieType"] = $param["CookieType"];
            }
        }
        if (array_key_exists("CookieName",$param) and $param["CookieName"] !== null) {
            if(is_bool($param["CookieName"])){
                $this->RequestParams["CookieName"] = $param["CookieName"] ? "true" : "false";
            } else {
                $this->RequestParams["CookieName"] = $param["CookieName"];
            }
        }
        if (array_key_exists("HealthCheckState",$param) and $param["HealthCheckState"] !== null) {
            if(is_bool($param["HealthCheckState"])){
                $this->RequestParams["HealthCheckState"] = $param["HealthCheckState"] ? "true" : "false";
            } else {
                $this->RequestParams["HealthCheckState"] = $param["HealthCheckState"];
            }
        }
        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            if(is_bool($param["Timeout"])){
                $this->RequestParams["Timeout"] = $param["Timeout"] ? "true" : "false";
            } else {
                $this->RequestParams["Timeout"] = $param["Timeout"];
            }
        }
        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            if(is_bool($param["Interval"])){
                $this->RequestParams["Interval"] = $param["Interval"] ? "true" : "false";
            } else {
                $this->RequestParams["Interval"] = $param["Interval"];
            }
        }
        if (array_key_exists("HealthyThreshold",$param) and $param["HealthyThreshold"] !== null) {
            if(is_bool($param["HealthyThreshold"])){
                $this->RequestParams["HealthyThreshold"] = $param["HealthyThreshold"] ? "true" : "false";
            } else {
                $this->RequestParams["HealthyThreshold"] = $param["HealthyThreshold"];
            }
        }
        if (array_key_exists("UnhealthyThreshold",$param) and $param["UnhealthyThreshold"] !== null) {
            if(is_bool($param["UnhealthyThreshold"])){
                $this->RequestParams["UnhealthyThreshold"] = $param["UnhealthyThreshold"] ? "true" : "false";
            } else {
                $this->RequestParams["UnhealthyThreshold"] = $param["UnhealthyThreshold"];
            }
        }
        if (array_key_exists("UrlPath",$param) and $param["UrlPath"] !== null) {
            if(is_bool($param["UrlPath"])){
                $this->RequestParams["UrlPath"] = $param["UrlPath"] ? "true" : "false";
            } else {
                $this->RequestParams["UrlPath"] = $param["UrlPath"];
            }
        }
        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            if(is_bool($param["HostName"])){
                $this->RequestParams["HostName"] = $param["HostName"] ? "true" : "false";
            } else {
                $this->RequestParams["HostName"] = $param["HostName"];
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