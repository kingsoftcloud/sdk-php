<?php

namespace Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribePrivateLinkResponse extends BaseModel
{
    /** 请求ID**/
    public $RequestId;

    /** 获取另一页返回结果的 token.**/
    public $NextToken;

    /** 总条数**/
    public $TotalCount;

    /**Object PrivateLink的信息**/
    public $PrivateLinkSet;

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
        if (array_key_exists("NextToken", $param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }
        if (array_key_exists("TotalCount", $param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
        if (array_key_exists("PrivateLinkSet", $param) and $param["PrivateLinkSet"] !== null) {
            $this->PrivateLinkSet = $param["PrivateLinkSet"];
        }

    }
}