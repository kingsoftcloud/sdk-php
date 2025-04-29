<?php

namespace Ksyun\Client\Kkms\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyKeyStateResponse extends BaseModel
{
    /**
     * - 请求ID
     * - 类型: String
     *
     * #### **/
    public $RequestId;

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

    }
}