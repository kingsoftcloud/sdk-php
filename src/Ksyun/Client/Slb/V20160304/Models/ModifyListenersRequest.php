<?php
namespace  Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyListenersRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ListenerId" => null,
         /**String**/
        "ListenerName" => null,
         /**String**/
        "BindType" => null,
         /**String**/
        "ListenerState" => null,
         /**String**/
        "Method" => null,
         /**Int**/
        "BandWidthIn" => null,
         /**Int**/
        "BandWidthOut" => null,
         /**String**/
        "HttpProtocol" => null,
         /**String**/
        "TlsCipherPolicy" => null,
         /**Boolean**/
        "EnableHttp2" => null,
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
         /**String**/
        "RedirectListenerId" => null,
         /**String**/
        "CaCertificateId" => null,
         /**Boolean**/
        "CaEnabled" => null,
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
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            if(is_bool($param["ListenerId"])){
                $this->RequestParams["ListenerId"] = $param["ListenerId"] ? "true" : "false";
            } else {
                $this->RequestParams["ListenerId"] = $param["ListenerId"];
            }
        }
        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            if(is_bool($param["ListenerName"])){
                $this->RequestParams["ListenerName"] = $param["ListenerName"] ? "true" : "false";
            } else {
                $this->RequestParams["ListenerName"] = $param["ListenerName"];
            }
        }
        if (array_key_exists("BindType",$param) and $param["BindType"] !== null) {
            if(is_bool($param["BindType"])){
                $this->RequestParams["BindType"] = $param["BindType"] ? "true" : "false";
            } else {
                $this->RequestParams["BindType"] = $param["BindType"];
            }
        }
        if (array_key_exists("ListenerState",$param) and $param["ListenerState"] !== null) {
            if(is_bool($param["ListenerState"])){
                $this->RequestParams["ListenerState"] = $param["ListenerState"] ? "true" : "false";
            } else {
                $this->RequestParams["ListenerState"] = $param["ListenerState"];
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
        if (array_key_exists("RedirectListenerId",$param) and $param["RedirectListenerId"] !== null) {
            if(is_bool($param["RedirectListenerId"])){
                $this->RequestParams["RedirectListenerId"] = $param["RedirectListenerId"] ? "true" : "false";
            } else {
                $this->RequestParams["RedirectListenerId"] = $param["RedirectListenerId"];
            }
        }
        if (array_key_exists("CaCertificateId",$param) and $param["CaCertificateId"] !== null) {
            if(is_bool($param["CaCertificateId"])){
                $this->RequestParams["CaCertificateId"] = $param["CaCertificateId"] ? "true" : "false";
            } else {
                $this->RequestParams["CaCertificateId"] = $param["CaCertificateId"];
            }
        }
        if (array_key_exists("CaEnabled",$param) and $param["CaEnabled"] !== null) {
            if(is_bool($param["CaEnabled"])){
                $this->RequestParams["CaEnabled"] = $param["CaEnabled"] ? "true" : "false";
            } else {
                $this->RequestParams["CaEnabled"] = $param["CaEnabled"];
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