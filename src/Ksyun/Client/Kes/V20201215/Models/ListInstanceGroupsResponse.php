<?php

namespace Ksyun\Client\Kes\V20201215\Models;

use Ksyun\Common\BaseModel;

class ListInstanceGroupsResponse extends BaseModel
{
    /**Object 节点组详情**/
    public $InstanceGroups;

    /** 请求ID**/
    public $RequestId;

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
        if (array_key_exists("InstanceGroups", $param) and $param["InstanceGroups"] !== null) {
            $this->InstanceGroups = $param["InstanceGroups"];
        }
        if (array_key_exists("RequestId", $param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
        if (array_key_exists("StatusCode", $param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

    }
}