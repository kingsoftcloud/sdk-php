<?php

namespace Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateAlbListenerCertGroupResponse extends BaseModel
{
    /** 请求ID**/
    public $RequestId;

    /**Object 证书组的信息**/
    public $AlbListenerCertGroup;

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
        if (array_key_exists("AlbListenerCertGroup", $param) and $param["AlbListenerCertGroup"] !== null) {
            $this->AlbListenerCertGroup = $param["AlbListenerCertGroup"];
        }

    }
}