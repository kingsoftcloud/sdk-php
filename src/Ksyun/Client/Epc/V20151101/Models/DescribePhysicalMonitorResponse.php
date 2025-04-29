<?php

namespace Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;

class DescribePhysicalMonitorResponse extends BaseModel
{
    /** 请求ID**/
    public $RequestId;

    /**Object CPU监控的信息**/
    public $CPUInfo;

    /**Object 内存监控的信息**/
    public $MemoryInfo;

    /**Object Disk监控的信息**/
    public $DiskInfo;

    /**Object 风扇监控的信息**/
    public $FanInfo;

    /**Object 电源监控的信息**/
    public $PowerInfo;

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
        if (array_key_exists("CPUInfo", $param) and $param["CPUInfo"] !== null) {
            $this->CPUInfo = $param["CPUInfo"];
        }
        if (array_key_exists("MemoryInfo", $param) and $param["MemoryInfo"] !== null) {
            $this->MemoryInfo = $param["MemoryInfo"];
        }
        if (array_key_exists("DiskInfo", $param) and $param["DiskInfo"] !== null) {
            $this->DiskInfo = $param["DiskInfo"];
        }
        if (array_key_exists("FanInfo", $param) and $param["FanInfo"] !== null) {
            $this->FanInfo = $param["FanInfo"];
        }
        if (array_key_exists("PowerInfo", $param) and $param["PowerInfo"] !== null) {
            $this->PowerInfo = $param["PowerInfo"];
        }

    }
}