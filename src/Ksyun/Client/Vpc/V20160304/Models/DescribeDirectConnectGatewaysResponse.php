<?php

namespace Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeDirectConnectGatewaysResponse extends BaseModel
{
    /** 请求ID**/
    public $RequestId;

    /** 获取另一页返回结果的 token.**/
    public $NextToken;

    /**Object 边界网关的信息**/
    public $DirectConnectGatewaySet;

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
        if (array_key_exists("DirectConnectGatewaySet", $param) and $param["DirectConnectGatewaySet"] !== null) {
            $this->DirectConnectGatewaySet = $param["DirectConnectGatewaySet"];
        }

    }
}