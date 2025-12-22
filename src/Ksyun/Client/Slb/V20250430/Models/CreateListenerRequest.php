<?php
namespace  Ksyun\Client\Slb\V20250430\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateListenerRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "LoadBalancerId" => null,
         /**String**/
        "ListenerName" => null,
         /**String**/
        "Protocol" => null,
         /**Int**/
        "Port" => null,
         /**String**/
        "CertificateId" => null,
         /**String**/
        "TlsCipherPolicy" => null,
         /**String**/
        "ListenerAclId" => null,
         /**String**/
        "ListenerState" => null,
         /**String**/
        "RedirectListenerId" => null,
         /**String**/
        "RedirectHttpCode" => null,
         /**Boolean**/
        "EnableHttp2" => null,
         /**String**/
        "BackendServerGroupId" => null,
         /**Object**/
        "FixedResponseConfig" => null,
         /**Object**/
        "RewriteConfig" => null,
         /**Boolean**/
        "CaEnabled" => null,
         /**String**/
        "CaCertificateId" => null,
         /**Boolean**/
        "EnableQuicUpgrade" => null,
         /**String**/
        "QuicListenerId" => null,
         /**Int**/
        "IdleTimeout" => null,
         /**String**/
        "ServerGroupId" => null,
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
        if (array_key_exists("ListenerAclId",$param) and $param["ListenerAclId"] !== null) {
            if(is_bool($param["ListenerAclId"])){
                $this->RequestParams["ListenerAclId"] = $param["ListenerAclId"] ? "true" : "false";
            } else {
                $this->RequestParams["ListenerAclId"] = $param["ListenerAclId"];
            }
        }
        if (array_key_exists("ListenerState",$param) and $param["ListenerState"] !== null) {
            if(is_bool($param["ListenerState"])){
                $this->RequestParams["ListenerState"] = $param["ListenerState"] ? "true" : "false";
            } else {
                $this->RequestParams["ListenerState"] = $param["ListenerState"];
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
        if (array_key_exists("RewriteConfig",$param) and $param["RewriteConfig"] !== null) {
            if(is_bool($param["RewriteConfig"])){
                $this->RequestParams["RewriteConfig"] = $param["RewriteConfig"] ? "true" : "false";
            } else {
                $this->RequestParams["RewriteConfig"] = $param["RewriteConfig"];
            }
        }
        if (array_key_exists("CaEnabled",$param) and $param["CaEnabled"] !== null) {
            if(is_bool($param["CaEnabled"])){
                $this->RequestParams["CaEnabled"] = $param["CaEnabled"] ? "true" : "false";
            } else {
                $this->RequestParams["CaEnabled"] = $param["CaEnabled"];
            }
        }
        if (array_key_exists("CaCertificateId",$param) and $param["CaCertificateId"] !== null) {
            if(is_bool($param["CaCertificateId"])){
                $this->RequestParams["CaCertificateId"] = $param["CaCertificateId"] ? "true" : "false";
            } else {
                $this->RequestParams["CaCertificateId"] = $param["CaCertificateId"];
            }
        }
        if (array_key_exists("EnableQuicUpgrade",$param) and $param["EnableQuicUpgrade"] !== null) {
            if(is_bool($param["EnableQuicUpgrade"])){
                $this->RequestParams["EnableQuicUpgrade"] = $param["EnableQuicUpgrade"] ? "true" : "false";
            } else {
                $this->RequestParams["EnableQuicUpgrade"] = $param["EnableQuicUpgrade"];
            }
        }
        if (array_key_exists("QuicListenerId",$param) and $param["QuicListenerId"] !== null) {
            if(is_bool($param["QuicListenerId"])){
                $this->RequestParams["QuicListenerId"] = $param["QuicListenerId"] ? "true" : "false";
            } else {
                $this->RequestParams["QuicListenerId"] = $param["QuicListenerId"];
            }
        }
        if (array_key_exists("IdleTimeout",$param) and $param["IdleTimeout"] !== null) {
            if(is_bool($param["IdleTimeout"])){
                $this->RequestParams["IdleTimeout"] = $param["IdleTimeout"] ? "true" : "false";
            } else {
                $this->RequestParams["IdleTimeout"] = $param["IdleTimeout"];
            }
        }
        if (array_key_exists("ServerGroupId",$param) and $param["ServerGroupId"] !== null) {
            if(is_bool($param["ServerGroupId"])){
                $this->RequestParams["ServerGroupId"] = $param["ServerGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["ServerGroupId"] = $param["ServerGroupId"];
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