<?php

namespace Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class QueryNatTopVifMonitorResponse extends BaseModel
{
    /** 请求ID**/
    public $RequestId;

    /**Object Nat相关流量数据**/
    public $NatMonitorDataList;

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
        if (array_key_exists("NatMonitorDataList", $param) and $param["NatMonitorDataList"] !== null) {
            $this->NatMonitorDataList = $param["NatMonitorDataList"];
        }

    }
}