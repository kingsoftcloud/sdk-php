<?php

namespace Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeListenersResponse extends BaseModel
{
    /** 请求ID**/
    public $RequestId;

    /** 获取另一页返回结果的 token.**/
    public $NextToken;

    /**Object 监听器的信息**/
    public $ListenerSet;

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
        if (array_key_exists("ListenerSet", $param) and $param["ListenerSet"] !== null) {
            $this->ListenerSet = $param["ListenerSet"];
        }

    }
}