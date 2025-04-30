<?php

namespace Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;

class DescribeEpcsResponse extends BaseModel
{
    /**Object 物理机信息**/
    public $HostSet;

    /** 请求ID**/
    public $RequestId;

    /** 总数**/
    public $TotalCount;

    /** 下一页起始值**/
    public $NextToken;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("HostSet", $param) and $param["HostSet"] !== null) {
            $this->HostSet = $param["HostSet"];
        }
        if (array_key_exists("RequestId", $param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
        if (array_key_exists("TotalCount", $param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
        if (array_key_exists("NextToken", $param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

    }
}