<?php

namespace Ksyun\Client\Kmr\V20210902\Models;

use Ksyun\Common\BaseModel;

class DescribeServiceResponse extends BaseModel
{
    /** 集群ID**/
    public $RequestId;

    /** 组件详情不展示服务，默认为空**/
    public $Services;

    /**Object 组件状态**/
    public $ComponentStatus;

    /** 总数**/
    public $Total;

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
        if (array_key_exists("Services", $param) and $param["Services"] !== null) {
            $this->Services = $param["Services"];
        }
        if (array_key_exists("ComponentStatus", $param) and $param["ComponentStatus"] !== null) {
            $this->ComponentStatus = $param["ComponentStatus"];
        }
        if (array_key_exists("Total", $param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }
        if (array_key_exists("StatusCode", $param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

    }
}