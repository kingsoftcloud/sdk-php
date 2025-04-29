<?php

namespace Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeDirectConnectGatewayRouteResponse extends BaseModel
{
    /** 请求ID**/
    public $RequestId;

    /** 获取另一页返回结果的 token.**/
    public $NextToken;

    /**Object 边界网关路由的信息**/
    public $DirectConnectGatewayRouteSet;

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
        if (array_key_exists("NextToken", $param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }
        if (array_key_exists("DirectConnectGatewayRouteSet", $param) and $param["DirectConnectGatewayRouteSet"] !== null) {
            $this->DirectConnectGatewayRouteSet = $param["DirectConnectGatewayRouteSet"];
        }

    }
}