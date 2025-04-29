<?php

namespace Ksyun\Client\Ebs\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateVolumeResponse extends BaseModel
{
    /** 请求流水号**/
    public $RequestId;

    /** 硬盘ID**/
    public $VolumeId;

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
        if (array_key_exists("VolumeId", $param) and $param["VolumeId"] !== null) {
            $this->VolumeId = $param["VolumeId"];
        }

    }
}