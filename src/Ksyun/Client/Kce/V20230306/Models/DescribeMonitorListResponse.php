<?php

namespace Ksyun\Client\Kce\V20230306\Models;

use Ksyun\Common\BaseModel;

class DescribeMonitorListResponse extends BaseModel
{
    /** 请求id**/
    public $RequestId;

    /** 分页标识**/
    public $Marker;

    /** 监控数量**/
    public $TotalCount;

    /**Object 监控列表**/
    public $MonitorSet;

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
        if (array_key_exists("Marker", $param) and $param["Marker"] !== null) {
            $this->Marker = $param["Marker"];
        }
        if (array_key_exists("TotalCount", $param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
        if (array_key_exists("MonitorSet", $param) and $param["MonitorSet"] !== null) {
            $this->MonitorSet = $param["MonitorSet"];
        }

    }
}