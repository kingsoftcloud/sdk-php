<?php

namespace Ksyun\Client\Kce\V20190806\Models;

use Ksyun\Common\BaseModel;

class ProtectedFromScaleDownResponse extends BaseModel
{
    /**String 设置缩容保护成功的节点id**/
    public $SucceedInstanceIds;

    /**String 设置缩容保护失败的节点id**/
    public $FailedInstanceIds;

    /** 请求id**/
    public $RequestId;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("SucceedInstanceIds", $param) and $param["SucceedInstanceIds"] !== null) {
            $this->SucceedInstanceIds = $param["SucceedInstanceIds"];
        }
        if (array_key_exists("FailedInstanceIds", $param) and $param["FailedInstanceIds"] !== null) {
            $this->FailedInstanceIds = $param["FailedInstanceIds"];
        }
        if (array_key_exists("RequestId", $param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }

    }
}