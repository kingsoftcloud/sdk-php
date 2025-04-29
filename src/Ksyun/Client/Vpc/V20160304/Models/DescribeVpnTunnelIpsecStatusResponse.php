<?php

namespace Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeVpnTunnelIpsecStatusResponse extends BaseModel
{
    /** 请求ID**/
    public $RequestId;

    /**Object VPN通道状态信息**/
    public $VpnTunnelIpsecStatusList;

    /** 是否成功**/
    public $Return;

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
        if (array_key_exists("VpnTunnelIpsecStatusList", $param) and $param["VpnTunnelIpsecStatusList"] !== null) {
            $this->VpnTunnelIpsecStatusList = $param["VpnTunnelIpsecStatusList"];
        }
        if (array_key_exists("Return", $param) and $param["Return"] !== null) {
            $this->Return = $param["Return"];
        }

    }
}