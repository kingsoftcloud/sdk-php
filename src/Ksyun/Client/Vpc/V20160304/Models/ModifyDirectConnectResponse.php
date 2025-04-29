<?php

namespace Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyDirectConnectResponse extends BaseModel
{
    /** 请求ID**/
    public $RequestId;

    /**Object 物理专线的信息**/
    public $DirectConnect;

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
        if (array_key_exists("DirectConnect", $param) and $param["DirectConnect"] !== null) {
            $this->DirectConnect = $param["DirectConnect"];
        }

    }
}