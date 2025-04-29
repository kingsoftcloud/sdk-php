<?php

namespace Ksyun\Client\Kce\V20230306\Models;

use Ksyun\Common\BaseModel;

class DescribeGrafanaWhiteListResponse extends BaseModel
{
    /** 请求id**/
    public $RequestId;

    /**String 公网访问白名单数组**/
    public $WhiteList;

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
        if (array_key_exists("WhiteList", $param) and $param["WhiteList"] !== null) {
            $this->WhiteList = $param["WhiteList"];
        }

    }
}