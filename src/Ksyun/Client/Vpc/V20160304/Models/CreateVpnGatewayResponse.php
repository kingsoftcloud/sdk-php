<?php

namespace Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateVpnGatewayResponse extends BaseModel
{
    /** 请求ID**/
    public $RequestId;

    /**Object Vpn网关信息**/
    public $VpnGateway;

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
        if (array_key_exists("VpnGateway", $param) and $param["VpnGateway"] !== null) {
            $this->VpnGateway = $param["VpnGateway"];
        }

    }
}