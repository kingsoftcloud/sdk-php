<?php
namespace  Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateSlbRuleRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Path" => null,
         /**String**/
        "HostHeaderId" => null,
         /**String**/
        "BackendServerGroupId" => null,
         /**String**/
        "ListenerSync" => null,
         /**String**/
        "Method" => null,
         /**String**/
        "SessionState" => null,
         /**Int**/
        "SessionPersistencePeriod" => null,
         /**String**/
        "cookieType" => null,
         /**String**/
        "CookieName" => null,
         /**String**/
        "HealthCheckState" => null,
         /**String**/
        "HealthyThreshold" => null,
         /**Int**/
        "Interval" => null,
         /**Int**/
        "Timeout" => null,
         /**Int**/
        "UnhealthyThreshold" => null,
         /**String**/
        "UrlPath" => null,
         /**String**/
        "HostName" => null,
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
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            if(is_bool($param["Path"])){
                $this->RequestParams["Path"] = $param["Path"] ? "true" : "false";
            } else {
                $this->RequestParams["Path"] = $param["Path"];
            }
        }
        if (array_key_exists("HostHeaderId",$param) and $param["HostHeaderId"] !== null) {
            if(is_bool($param["HostHeaderId"])){
                $this->RequestParams["HostHeaderId"] = $param["HostHeaderId"] ? "true" : "false";
            } else {
                $this->RequestParams["HostHeaderId"] = $param["HostHeaderId"];
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
        if (array_key_exists("cookieType",$param) and $param["cookieType"] !== null) {
            if(is_bool($param["cookieType"])){
                $this->RequestParams["cookieType"] = $param["cookieType"] ? "true" : "false";
            } else {
                $this->RequestParams["cookieType"] = $param["cookieType"];
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
        if (array_key_exists("HealthyThreshold",$param) and $param["HealthyThreshold"] !== null) {
            if(is_bool($param["HealthyThreshold"])){
                $this->RequestParams["HealthyThreshold"] = $param["HealthyThreshold"] ? "true" : "false";
            } else {
                $this->RequestParams["HealthyThreshold"] = $param["HealthyThreshold"];
            }
        }
        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            if(is_bool($param["Interval"])){
                $this->RequestParams["Interval"] = $param["Interval"] ? "true" : "false";
            } else {
                $this->RequestParams["Interval"] = $param["Interval"];
            }
        }
        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            if(is_bool($param["Timeout"])){
                $this->RequestParams["Timeout"] = $param["Timeout"] ? "true" : "false";
            } else {
                $this->RequestParams["Timeout"] = $param["Timeout"];
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