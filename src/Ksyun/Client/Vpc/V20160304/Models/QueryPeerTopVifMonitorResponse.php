<?php

namespace Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class QueryPeerTopVifMonitorResponse extends BaseModel
{
    /** 请求ID**/
    public $RequestId;

    /**Object BWS相关流量数据**/
    public $NatPeerMonitorData;

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
        if (array_key_exists("NatPeerMonitorData", $param) and $param["NatPeerMonitorData"] !== null) {
            $this->NatPeerMonitorData = $param["NatPeerMonitorData"];
        }

    }
}