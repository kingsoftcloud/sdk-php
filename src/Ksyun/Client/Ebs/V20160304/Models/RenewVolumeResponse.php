<?php

namespace Ksyun\Client\Ebs\V20160304\Models;

use Ksyun\Common\BaseModel;

class RenewVolumeResponse extends BaseModel
{
    /** 唯一请求ID，每次请求都会返回**/
    public $RequestId;

    /** 支付的费用**/
    public $PaidMoney;

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
        if (array_key_exists("PaidMoney", $param) and $param["PaidMoney"] !== null) {
            $this->PaidMoney = $param["PaidMoney"];
        }

    }
}