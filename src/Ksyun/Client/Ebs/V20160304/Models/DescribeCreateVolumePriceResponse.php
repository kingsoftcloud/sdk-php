<?php

namespace Ksyun\Client\Ebs\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeCreateVolumePriceResponse extends BaseModel
{
    /** 唯一请求ID**/
    public $RequestId;

    /** **/
    public $VolumePrice;

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
        if (array_key_exists("VolumePrice", $param) and $param["VolumePrice"] !== null) {
            $this->VolumePrice = $param["VolumePrice"];
        }

    }
}