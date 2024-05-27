<?php
namespace  Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateAlbListenerRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "AlbId" => null,
         /**String**/
        "AlbListenerName" => null,
         /**String**/
        "Method" => null,
         /**String**/
        "Protocol" => null,
         /**Int**/
        "Port" => null,
         /**String**/
        "CertificateId" => null,
         /**String**/
        "TlsCipherPolicy" => null,
         /**String**/
        "AlbListenerAclId" => null,
         /**String**/
        "AlbListenerState" => null,
         /**String**/
        "RedirectAlbListenerId" => null,
         /**String**/
        "RedirectHttpCode" => null,
         /**String**/
        "SessionState" => null,
         /**Int**/
        "SessionPersistencePeriod" => null,
         /**String**/
        "CookieType" => null,
         /**String**/
        "CookieName" => null,
         /**Boolean**/
        "EnableHttp2" => null,
         /**String**/
        "BackendServerGroupId" => null,
         /**Object**/
        "FixedResponseConfig" => null,
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
        if (array_key_exists("AlbId",$param) and $param["AlbId"] !== null) {
            if(is_bool($param["AlbId"])){
                $this->RequestParams["AlbId"] = $param["AlbId"] ? "true" : "false";
            } else {
                $this->RequestParams["AlbId"] = $param["AlbId"];
            }
        }
        if (array_key_exists("AlbListenerName",$param) and $param["AlbListenerName"] !== null) {
            if(is_bool($param["AlbListenerName"])){
                $this->RequestParams["AlbListenerName"] = $param["AlbListenerName"] ? "true" : "false";
            } else {
                $this->RequestParams["AlbListenerName"] = $param["AlbListenerName"];
            }
        }
        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            if(is_bool($param["Method"])){
                $this->RequestParams["Method"] = $param["Method"] ? "true" : "false";
            } else {
                $this->RequestParams["Method"] = $param["Method"];
            }
        }
        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            if(is_bool($param["Protocol"])){
                $this->RequestParams["Protocol"] = $param["Protocol"] ? "true" : "false";
            } else {
                $this->RequestParams["Protocol"] = $param["Protocol"];
            }
        }
        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            if(is_bool($param["Port"])){
                $this->RequestParams["Port"] = $param["Port"] ? "true" : "false";
            } else {
                $this->RequestParams["Port"] = $param["Port"];
            }
        }
        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            if(is_bool($param["CertificateId"])){
                $this->RequestParams["CertificateId"] = $param["CertificateId"] ? "true" : "false";
            } else {
                $this->RequestParams["CertificateId"] = $param["CertificateId"];
            }
        }
        if (array_key_exists("TlsCipherPolicy",$param) and $param["TlsCipherPolicy"] !== null) {
            if(is_bool($param["TlsCipherPolicy"])){
                $this->RequestParams["TlsCipherPolicy"] = $param["TlsCipherPolicy"] ? "true" : "false";
            } else {
                $this->RequestParams["TlsCipherPolicy"] = $param["TlsCipherPolicy"];
            }
        }
        if (array_key_exists("AlbListenerAclId",$param) and $param["AlbListenerAclId"] !== null) {
            if(is_bool($param["AlbListenerAclId"])){
                $this->RequestParams["AlbListenerAclId"] = $param["AlbListenerAclId"] ? "true" : "false";
            } else {
                $this->RequestParams["AlbListenerAclId"] = $param["AlbListenerAclId"];
            }
        }
        if (array_key_exists("AlbListenerState",$param) and $param["AlbListenerState"] !== null) {
            if(is_bool($param["AlbListenerState"])){
                $this->RequestParams["AlbListenerState"] = $param["AlbListenerState"] ? "true" : "false";
            } else {
                $this->RequestParams["AlbListenerState"] = $param["AlbListenerState"];
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
        if (array_key_exists("EnableHttp2",$param) and $param["EnableHttp2"] !== null) {
            if(is_bool($param["EnableHttp2"])){
                $this->RequestParams["EnableHttp2"] = $param["EnableHttp2"] ? "true" : "false";
            } else {
                $this->RequestParams["EnableHttp2"] = $param["EnableHttp2"];
            }
        }
        if (array_key_exists("BackendServerGroupId",$param) and $param["BackendServerGroupId"] !== null) {
            if(is_bool($param["BackendServerGroupId"])){
                $this->RequestParams["BackendServerGroupId"] = $param["BackendServerGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["BackendServerGroupId"] = $param["BackendServerGroupId"];
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