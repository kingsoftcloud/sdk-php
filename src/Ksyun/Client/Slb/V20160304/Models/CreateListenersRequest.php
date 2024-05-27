<?php
namespace  Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateListenersRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "LoadBalancerId" => null,
         /**String**/
        "ListenerName" => null,
         /**String**/
        "ListenerState" => null,
         /**String**/
        "ListenerProtocol" => null,
         /**String**/
        "BindType" => null,
         /**Int**/
        "ListenerPort" => null,
         /**String**/
        "Method" => null,
         /**Int**/
        "BandWidthIn" => null,
         /**Int**/
        "BandWidthOut" => null,
         /**String**/
        "LoadBalancerAclId" => null,
         /**String**/
        "HttpProtocol" => null,
         /**String**/
        "TlsCipherPolicy" => null,
         /**Boolean**/
        "EnableHttp2" => null,
         /**String**/
        "RedirectListenerId" => null,
         /**String**/
        "SessionState" => null,
         /**Int**/
        "SessionPersistencePeriod" => null,
         /**String**/
        "CookieType" => null,
         /**String**/
        "CookieName" => null,
         /**String**/
        "CertificateId" => null,
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            if(is_bool($param["LoadBalancerId"])){
                $this->RequestParams["LoadBalancerId"] = $param["LoadBalancerId"] ? "true" : "false";
            } else {
                $this->RequestParams["LoadBalancerId"] = $param["LoadBalancerId"];
            }
        }
        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            if(is_bool($param["ListenerName"])){
                $this->RequestParams["ListenerName"] = $param["ListenerName"] ? "true" : "false";
            } else {
                $this->RequestParams["ListenerName"] = $param["ListenerName"];
            }
        }
        if (array_key_exists("ListenerState",$param) and $param["ListenerState"] !== null) {
            if(is_bool($param["ListenerState"])){
                $this->RequestParams["ListenerState"] = $param["ListenerState"] ? "true" : "false";
            } else {
                $this->RequestParams["ListenerState"] = $param["ListenerState"];
            }
        }
        if (array_key_exists("ListenerProtocol",$param) and $param["ListenerProtocol"] !== null) {
            if(is_bool($param["ListenerProtocol"])){
                $this->RequestParams["ListenerProtocol"] = $param["ListenerProtocol"] ? "true" : "false";
            } else {
                $this->RequestParams["ListenerProtocol"] = $param["ListenerProtocol"];
            }
        }
        if (array_key_exists("BindType",$param) and $param["BindType"] !== null) {
            if(is_bool($param["BindType"])){
                $this->RequestParams["BindType"] = $param["BindType"] ? "true" : "false";
            } else {
                $this->RequestParams["BindType"] = $param["BindType"];
            }
        }
        if (array_key_exists("ListenerPort",$param) and $param["ListenerPort"] !== null) {
            if(is_bool($param["ListenerPort"])){
                $this->RequestParams["ListenerPort"] = $param["ListenerPort"] ? "true" : "false";
            } else {
                $this->RequestParams["ListenerPort"] = $param["ListenerPort"];
            }
        }
        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            if(is_bool($param["Method"])){
                $this->RequestParams["Method"] = $param["Method"] ? "true" : "false";
            } else {
                $this->RequestParams["Method"] = $param["Method"];
            }
        }
        if (array_key_exists("BandWidthIn",$param) and $param["BandWidthIn"] !== null) {
            if(is_bool($param["BandWidthIn"])){
                $this->RequestParams["BandWidthIn"] = $param["BandWidthIn"] ? "true" : "false";
            } else {
                $this->RequestParams["BandWidthIn"] = $param["BandWidthIn"];
            }
        }
        if (array_key_exists("BandWidthOut",$param) and $param["BandWidthOut"] !== null) {
            if(is_bool($param["BandWidthOut"])){
                $this->RequestParams["BandWidthOut"] = $param["BandWidthOut"] ? "true" : "false";
            } else {
                $this->RequestParams["BandWidthOut"] = $param["BandWidthOut"];
            }
        }
        if (array_key_exists("LoadBalancerAclId",$param) and $param["LoadBalancerAclId"] !== null) {
            if(is_bool($param["LoadBalancerAclId"])){
                $this->RequestParams["LoadBalancerAclId"] = $param["LoadBalancerAclId"] ? "true" : "false";
            } else {
                $this->RequestParams["LoadBalancerAclId"] = $param["LoadBalancerAclId"];
            }
        }
        if (array_key_exists("HttpProtocol",$param) and $param["HttpProtocol"] !== null) {
            if(is_bool($param["HttpProtocol"])){
                $this->RequestParams["HttpProtocol"] = $param["HttpProtocol"] ? "true" : "false";
            } else {
                $this->RequestParams["HttpProtocol"] = $param["HttpProtocol"];
            }
        }
        if (array_key_exists("TlsCipherPolicy",$param) and $param["TlsCipherPolicy"] !== null) {
            if(is_bool($param["TlsCipherPolicy"])){
                $this->RequestParams["TlsCipherPolicy"] = $param["TlsCipherPolicy"] ? "true" : "false";
            } else {
                $this->RequestParams["TlsCipherPolicy"] = $param["TlsCipherPolicy"];
            }
        }
        if (array_key_exists("EnableHttp2",$param) and $param["EnableHttp2"] !== null) {
            if(is_bool($param["EnableHttp2"])){
                $this->RequestParams["EnableHttp2"] = $param["EnableHttp2"] ? "true" : "false";
            } else {
                $this->RequestParams["EnableHttp2"] = $param["EnableHttp2"];
            }
        }
        if (array_key_exists("RedirectListenerId",$param) and $param["RedirectListenerId"] !== null) {
            if(is_bool($param["RedirectListenerId"])){
                $this->RequestParams["RedirectListenerId"] = $param["RedirectListenerId"] ? "true" : "false";
            } else {
                $this->RequestParams["RedirectListenerId"] = $param["RedirectListenerId"];
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
        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            if(is_bool($param["CertificateId"])){
                $this->RequestParams["CertificateId"] = $param["CertificateId"] ? "true" : "false";
            } else {
                $this->RequestParams["CertificateId"] = $param["CertificateId"];
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