<?php

namespace Ksyun\Client\Kkms\V20160304\Models;

use Ksyun\Common\BaseModel;

class DecryptResponse extends BaseModel
{
    /**
     * - 请求ID
     * - 类型: String
     *
     * #### **/
    public $RequestId;

    /**
     * - 客户主KEY的ID
     * - 类型:String
     * - 是否可缺省: 否
     *
     * #### **/
    public $KeyId;

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
        if (array_key_exists("KeyId", $param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

    }
}