<?php

namespace Ksyun\Client\Kmr\V20210902\Models;

use Ksyun\Common\BaseModel;

class ModifyLoadBasedScaleStrategyResponse extends BaseModel
{
    /** 请求ID**/
    public $RequestId;

    /** 集群ID**/
    public $ClusterId;

    /** 是否成功**/
    public $Succeed;

    /** 状态码**/
    public $StatusCode;

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
        if (array_key_exists("ClusterId", $param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }
        if (array_key_exists("Succeed", $param) and $param["Succeed"] !== null) {
            $this->Succeed = $param["Succeed"];
        }
        if (array_key_exists("StatusCode", $param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

    }
}