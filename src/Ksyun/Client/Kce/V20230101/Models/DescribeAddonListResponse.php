<?php

namespace Ksyun\Client\Kce\V20230101\Models;

use Ksyun\Common\BaseModel;

class DescribeAddonListResponse extends BaseModel
{
    /** 请求ID**/
    public $RequestId;

    /** 返回数据**/
    public $Data;

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
        if (array_key_exists("Data", $param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }

    }
}