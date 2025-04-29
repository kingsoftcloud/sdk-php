<?php

namespace Ksyun\Client\Kes\V20201215\Models;

use Ksyun\Common\BaseModel;

class ModifyClusterNameResponse extends BaseModel
{
    /** 集群ID**/
    public $ClusterId;

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
        if (array_key_exists("ClusterId", $param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }
        if (array_key_exists("RequestId", $param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
        if (array_key_exists("StatusCode", $param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

    }
}