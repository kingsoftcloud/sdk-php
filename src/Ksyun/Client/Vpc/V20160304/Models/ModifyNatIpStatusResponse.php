<?php

namespace Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyNatIpStatusResponse extends BaseModel
{
    /** 请求ID**/
    public $RequestId;

    /**Object Nat Ip的信息**/
    public $NatIp;

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
        if (array_key_exists("NatIp", $param) and $param["NatIp"] !== null) {
            $this->NatIp = $param["NatIp"];
        }

    }
}