<?php

namespace Ksyun\Client\Bws\V20160304\Models;

use Ksyun\Common\BaseModel;

class QueryBwsTopEipMonitorResponse extends BaseModel
{
    /** 请求ID**/
    public $RequestId;

    /**Object BWS相关流量数据**/
    public $BwsMonitorDataList;

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
        if (array_key_exists("BwsMonitorDataList", $param) and $param["BwsMonitorDataList"] !== null) {
            $this->BwsMonitorDataList = $param["BwsMonitorDataList"];
        }

    }
}