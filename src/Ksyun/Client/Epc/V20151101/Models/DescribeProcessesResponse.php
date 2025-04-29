<?php

namespace Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;

class DescribeProcessesResponse extends BaseModel
{
    /** 请求ID**/
    public $RequestId;

    /** 获取另一页返回结果的 token.**/
    public $NextToken;

    /** 裸金属服务器总数**/
    public $TotalCount;

    /**Object 工单的信息**/
    public $ProcessSet;

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
        if (array_key_exists("ProcessSet", $param) and $param["ProcessSet"] !== null) {
            $this->ProcessSet = $param["ProcessSet"];
        }

    }
}