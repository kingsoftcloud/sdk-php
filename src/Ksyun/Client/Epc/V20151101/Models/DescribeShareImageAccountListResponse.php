<?php

namespace Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;

class DescribeShareImageAccountListResponse extends BaseModel
{
    /**Object **/
    public $SharePermissionSet;

    /** **/
    public $RequestId;

    /** 返回状态**/
    public $Return;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("SharePermissionSet", $param) and $param["SharePermissionSet"] !== null) {
            $this->SharePermissionSet = $param["SharePermissionSet"];
        }
        if (array_key_exists("RequestId", $param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
        if (array_key_exists("Return", $param) and $param["Return"] !== null) {
            $this->Return = $param["Return"];
        }

    }
}