<?php

namespace Ksyun\Client\Kmr\V20210902\Models;

use Ksyun\Common\BaseModel;

class DescribeClusterInfoResponse extends BaseModel
{
    /** 请求ID**/
    public $RequestId;

    /** 存算分离信息**/
    public $GaeaInfo;

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
        if (array_key_exists("GaeaInfo", $param) and $param["GaeaInfo"] !== null) {
            $this->GaeaInfo = $param["GaeaInfo"];
        }
        if (array_key_exists("StatusCode", $param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

    }
}