<?php

namespace Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateDirectConnectGatewayRouteResponse extends BaseModel
{
    /** 请求ID**/
    public $RequestId;

    /**Object 边界网关路由的信息**/
    public $DirectConnectGatewayRoute;

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
        if (array_key_exists("DirectConnectGatewayRoute", $param) and $param["DirectConnectGatewayRoute"] !== null) {
            $this->DirectConnectGatewayRoute = $param["DirectConnectGatewayRoute"];
        }

    }
}