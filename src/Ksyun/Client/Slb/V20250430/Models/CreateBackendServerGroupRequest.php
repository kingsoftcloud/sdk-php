<?php
namespace  Ksyun\Client\Slb\V20250430\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateBackendServerGroupRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "VpcId" => null,
         /**String**/
        "Name" => null,
         /**String**/
        "BackendServerType" => null,
         /**String**/
        "Method" => null,
         /**String**/
        "SessionState" => null,
         /**Int**/
        "SessionPersistencePeriod" => null,
         /**String**/
        "CookieType" => null,
         /**String**/
        "CookieName" => null,
         /**String**/
        "UpstreamKeepalive" => null,
         /**String**/
        "Protocol" => null,
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
         /**Int**/
        "HealthCheckConnectPort" => null,
         /**String**/
        "HealthProtocol" => null,
         /**Boolean**/
        "SlowStartEnabled" => null,
         /**Int**/
        "SlowStartDuration" => null,
         /**String**/
        "HttpMethod" => null,
         /**String**/
        "HealthCheckReq" => null,
         /**String**/
        "HealthCheckExp" => null,
         /**String**/
        "HealthCode" => null,
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            if(is_bool($param["VpcId"])){
                $this->RequestParams["VpcId"] = $param["VpcId"] ? "true" : "false";
            } else {
                $this->RequestParams["VpcId"] = $param["VpcId"];
            }
        }
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            if(is_bool($param["Name"])){
                $this->RequestParams["Name"] = $param["Name"] ? "true" : "false";
            } else {
                $this->RequestParams["Name"] = $param["Name"];
            }
        }
        if (array_key_exists("BackendServerType",$param) and $param["BackendServerType"] !== null) {
            if(is_bool($param["BackendServerType"])){
                $this->RequestParams["BackendServerType"] = $param["BackendServerType"] ? "true" : "false";
            } else {
                $this->RequestParams["BackendServerType"] = $param["BackendServerType"];
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
        if (array_key_exists("UpstreamKeepalive",$param) and $param["UpstreamKeepalive"] !== null) {
            if(is_bool($param["UpstreamKeepalive"])){
                $this->RequestParams["UpstreamKeepalive"] = $param["UpstreamKeepalive"] ? "true" : "false";
            } else {
                $this->RequestParams["UpstreamKeepalive"] = $param["UpstreamKeepalive"];
            }
        }
        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            if(is_bool($param["Protocol"])){
                $this->RequestParams["Protocol"] = $param["Protocol"] ? "true" : "false";
            } else {
                $this->RequestParams["Protocol"] = $param["Protocol"];
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
        if (array_key_exists("HealthCheckConnectPort",$param) and $param["HealthCheckConnectPort"] !== null) {
            if(is_bool($param["HealthCheckConnectPort"])){
                $this->RequestParams["HealthCheckConnectPort"] = $param["HealthCheckConnectPort"] ? "true" : "false";
            } else {
                $this->RequestParams["HealthCheckConnectPort"] = $param["HealthCheckConnectPort"];
            }
        }
        if (array_key_exists("HealthProtocol",$param) and $param["HealthProtocol"] !== null) {
            if(is_bool($param["HealthProtocol"])){
                $this->RequestParams["HealthProtocol"] = $param["HealthProtocol"] ? "true" : "false";
            } else {
                $this->RequestParams["HealthProtocol"] = $param["HealthProtocol"];
            }
        }
        if (array_key_exists("SlowStartEnabled",$param) and $param["SlowStartEnabled"] !== null) {
            if(is_bool($param["SlowStartEnabled"])){
                $this->RequestParams["SlowStartEnabled"] = $param["SlowStartEnabled"] ? "true" : "false";
            } else {
                $this->RequestParams["SlowStartEnabled"] = $param["SlowStartEnabled"];
            }
        }
        if (array_key_exists("SlowStartDuration",$param) and $param["SlowStartDuration"] !== null) {
            if(is_bool($param["SlowStartDuration"])){
                $this->RequestParams["SlowStartDuration"] = $param["SlowStartDuration"] ? "true" : "false";
            } else {
                $this->RequestParams["SlowStartDuration"] = $param["SlowStartDuration"];
            }
        }
        if (array_key_exists("HttpMethod",$param) and $param["HttpMethod"] !== null) {
            if(is_bool($param["HttpMethod"])){
                $this->RequestParams["HttpMethod"] = $param["HttpMethod"] ? "true" : "false";
            } else {
                $this->RequestParams["HttpMethod"] = $param["HttpMethod"];
            }
        }
        if (array_key_exists("HealthCheckReq",$param) and $param["HealthCheckReq"] !== null) {
            if(is_bool($param["HealthCheckReq"])){
                $this->RequestParams["HealthCheckReq"] = $param["HealthCheckReq"] ? "true" : "false";
            } else {
                $this->RequestParams["HealthCheckReq"] = $param["HealthCheckReq"];
            }
        }
        if (array_key_exists("HealthCheckExp",$param) and $param["HealthCheckExp"] !== null) {
            if(is_bool($param["HealthCheckExp"])){
                $this->RequestParams["HealthCheckExp"] = $param["HealthCheckExp"] ? "true" : "false";
            } else {
                $this->RequestParams["HealthCheckExp"] = $param["HealthCheckExp"];
            }
        }
        if (array_key_exists("HealthCode",$param) and $param["HealthCode"] !== null) {
            if(is_bool($param["HealthCode"])){
                $this->RequestParams["HealthCode"] = $param["HealthCode"] ? "true" : "false";
            } else {
                $this->RequestParams["HealthCode"] = $param["HealthCode"];
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