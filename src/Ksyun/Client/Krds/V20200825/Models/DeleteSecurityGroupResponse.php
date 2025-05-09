<?php

namespace Ksyun\Client\Krds\V20200825\Models;

use Ksyun\Common\BaseModel;

class DeleteSecurityGroupResponse extends BaseModel
{
    /**    安全组列表
     * 返回安全组详细信息**/
    public $Data;

    /** 请求ID
     * –**/
    public $RequestId;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Data", $param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }
        if (array_key_exists("RequestId", $param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }

    }
}