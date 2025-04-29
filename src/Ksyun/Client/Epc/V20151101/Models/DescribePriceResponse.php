<?php

namespace Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;

class DescribePriceResponse extends BaseModel
{
    /** 请求ID**/
    public $RequestId;

    /**Object 价格信息**/
    public $PriceInfo;

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
        if (array_key_exists("PriceInfo", $param) and $param["PriceInfo"] !== null) {
            $this->PriceInfo = $param["PriceInfo"];
        }

    }
}