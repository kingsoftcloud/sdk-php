<?php

namespace Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;

class ReinstallCustomerEpcResponse extends BaseModel
{
    /** 请求ID**/
    public $RequestId;

    /** 操作是否成功**/
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
        if (array_key_exists("Return", $param) and $param["Return"] !== null) {
            $this->Return = $param["Return"];
        }

    }
}