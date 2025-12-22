<?php
namespace  Ksyun\Client\Slb\V20250430\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyListenerRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ListenerId" => null,
         /**String**/
        "ListenerName" => null,
         /**String**/
        "ListenerState" => null,
         /**String**/
        "CertificateId" => null,
         /**String**/
        "TlsCipherPolicy" => null,
         /**String**/
        "ListenerAclId" => null,
         /**String**/
        "HttpProtocol" => null,
         /**Boolean**/
        "EnableHttp2" => null,
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
        if (array_key_exists("ListenerState",$param) and $param["ListenerState"] !== null) {
            if(is_bool($param["ListenerState"])){
                $this->RequestParams["ListenerState"] = $param["ListenerState"] ? "true" : "false";
            } else {
                $this->RequestParams["ListenerState"] = $param["ListenerState"];
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
        if (array_key_exists("HttpProtocol",$param) and $param["HttpProtocol"] !== null) {
            if(is_bool($param["HttpProtocol"])){
                $this->RequestParams["HttpProtocol"] = $param["HttpProtocol"] ? "true" : "false";
            } else {
                $this->RequestParams["HttpProtocol"] = $param["HttpProtocol"];
            }
        }
        if (array_key_exists("EnableHttp2",$param) and $param["EnableHttp2"] !== null) {
            if(is_bool($param["EnableHttp2"])){
                $this->RequestParams["EnableHttp2"] = $param["EnableHttp2"] ? "true" : "false";
            } else {
                $this->RequestParams["EnableHttp2"] = $param["EnableHttp2"];
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