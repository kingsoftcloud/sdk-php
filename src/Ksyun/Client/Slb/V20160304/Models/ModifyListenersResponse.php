<?php

namespace Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyListenersResponse extends BaseModel
{
    /** 请求ID**/
    public $RequestId;

    /** 负载均衡的ID**/
    public $LoadBalancerId;

    /** 创建时间**/
    public $CreateTime;

    /** 监听器的名称**/
    public $ListenerName;

    /** 监听器的ID**/
    public $ListenerId;

    /** 监听器的状态**/
    public $ListenerState;

    /** 监听器的协议**/
    public $ListenerProtocol;

    /** 监听器的协议端口**/
    public $ListenerPort;

    /** 监听器的转发方式**/
    public $Method;

    /** 监听器的入带宽限速，单位Mbps，仅内网LB有此字段**/
    public $BandWidthIn;

    /** 监听器的出带宽限速，单位Mbps，仅内网LB有此字段**/
    public $BandWidthOut;

    /** LoadBalancerAcl的ID**/
    public $LoadBalancerAclId;

    /** 后端协议版本**/
    public $HttpProtocol;

    /** TLS安全策略**/
    public $TlsCipherPolicy;

    /** 是否启用HTTP/2**/
    public $EnableHttp2;

    /** 重定向监听器ID**/
    public $RedirectListenerId;

    /**Object 健康检查的信息**/
    public $HealthCheck;

    /**Object 会话保持的信息**/
    public $Session;

    /**Object 真实服务器的信息**/
    public $RealServer;

    /** 证书id**/
    public $CertificateId;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("RequestId", $param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
        if (array_key_exists("LoadBalancerId", $param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }
        if (array_key_exists("CreateTime", $param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
        if (array_key_exists("ListenerName", $param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }
        if (array_key_exists("ListenerId", $param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }
        if (array_key_exists("ListenerState", $param) and $param["ListenerState"] !== null) {
            $this->ListenerState = $param["ListenerState"];
        }
        if (array_key_exists("ListenerProtocol", $param) and $param["ListenerProtocol"] !== null) {
            $this->ListenerProtocol = $param["ListenerProtocol"];
        }
        if (array_key_exists("ListenerPort", $param) and $param["ListenerPort"] !== null) {
            $this->ListenerPort = $param["ListenerPort"];
        }
        if (array_key_exists("Method", $param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }
        if (array_key_exists("BandWidthIn", $param) and $param["BandWidthIn"] !== null) {
            $this->BandWidthIn = $param["BandWidthIn"];
        }
        if (array_key_exists("BandWidthOut", $param) and $param["BandWidthOut"] !== null) {
            $this->BandWidthOut = $param["BandWidthOut"];
        }
        if (array_key_exists("LoadBalancerAclId", $param) and $param["LoadBalancerAclId"] !== null) {
            $this->LoadBalancerAclId = $param["LoadBalancerAclId"];
        }
        if (array_key_exists("HttpProtocol", $param) and $param["HttpProtocol"] !== null) {
            $this->HttpProtocol = $param["HttpProtocol"];
        }
        if (array_key_exists("TlsCipherPolicy", $param) and $param["TlsCipherPolicy"] !== null) {
            $this->TlsCipherPolicy = $param["TlsCipherPolicy"];
        }
        if (array_key_exists("EnableHttp2", $param) and $param["EnableHttp2"] !== null) {
            $this->EnableHttp2 = $param["EnableHttp2"];
        }
        if (array_key_exists("RedirectListenerId", $param) and $param["RedirectListenerId"] !== null) {
            $this->RedirectListenerId = $param["RedirectListenerId"];
        }
        if (array_key_exists("HealthCheck", $param) and $param["HealthCheck"] !== null) {
            $this->HealthCheck = $param["HealthCheck"];
        }
        if (array_key_exists("Session", $param) and $param["Session"] !== null) {
            $this->Session = $param["Session"];
        }
        if (array_key_exists("RealServer", $param) and $param["RealServer"] !== null) {
            $this->RealServer = $param["RealServer"];
        }
        if (array_key_exists("CertificateId", $param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

    }
}