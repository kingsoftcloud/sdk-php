<?php

namespace Ksyun\Client\Pdns\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateZoneRecordResponse extends BaseModel
{
    /** 请求ID**/
    public $RequestId;

    /**Object 记录信息**/
    public $Record;

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
        if (array_key_exists("Record", $param) and $param["Record"] !== null) {
            $this->Record = $param["Record"];
        }

    }
}