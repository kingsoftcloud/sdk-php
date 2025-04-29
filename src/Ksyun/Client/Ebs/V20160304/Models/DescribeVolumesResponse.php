<?php

namespace Ksyun\Client\Ebs\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeVolumesResponse extends BaseModel
{
    /** 唯一请求ID，每次请求都会返回**/
    public $RequestId;

    /**Object 云硬盘相关信息列表，若无信息则不返回**/
    public $Volumes;

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
        if (array_key_exists("Volumes", $param) and $param["Volumes"] !== null) {
            $this->Volumes = $param["Volumes"];
        }

    }
}