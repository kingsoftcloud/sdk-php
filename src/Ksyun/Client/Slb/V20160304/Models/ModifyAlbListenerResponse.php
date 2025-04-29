<?php

namespace Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyAlbListenerResponse extends BaseModel
{
    /** 请求ID**/
    public $RequestId;

    /**Object 应用型监听器的信息**/
    public $AlbListener;

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
        if (array_key_exists("AlbListener", $param) and $param["AlbListener"] !== null) {
            $this->AlbListener = $param["AlbListener"];
        }

    }
}