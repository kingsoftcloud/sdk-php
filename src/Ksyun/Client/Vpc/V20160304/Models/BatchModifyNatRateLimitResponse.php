<?php

namespace Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class BatchModifyNatRateLimitResponse extends BaseModel
{
    /** **/
    public $RequestId;

    /** **/
    public $NatRateLimit;

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
        if (array_key_exists("NatRateLimit", $param) and $param["NatRateLimit"] !== null) {
            $this->NatRateLimit = $param["NatRateLimit"];
        }

    }
}