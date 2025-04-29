<?php

namespace Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;

class AddAlbRuleResponse extends BaseModel
{
    /** 请求ID**/
    public $RequestId;

    /**Object 规则的信息**/
    public $AlbRule;

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
        if (array_key_exists("AlbRule", $param) and $param["AlbRule"] !== null) {
            $this->AlbRule = $param["AlbRule"];
        }

    }
}