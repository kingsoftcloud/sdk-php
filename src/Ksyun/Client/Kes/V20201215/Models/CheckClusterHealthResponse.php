<?php

namespace Ksyun\Client\Kes\V20201215\Models;

use Ksyun\Common\BaseModel;

class CheckClusterHealthResponse extends BaseModel
{
    /** 返回集群ID**/
    public $Return;

    /** 请求ID**/
    public $RequestId;

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
        if (array_key_exists("Return", $param) and $param["Return"] !== null) {
            $this->Return = $param["Return"];
        }
        if (array_key_exists("RequestId", $param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
        if (array_key_exists("StatusCode", $param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

    }
}