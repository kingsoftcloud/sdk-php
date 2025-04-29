<?php

namespace Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeImageSharePermissionResponse extends BaseModel
{
    /** **/
    public $RequestId;

    /**Object **/
    public $SharePermissionSet;

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
        if (array_key_exists("SharePermissionSet", $param) and $param["SharePermissionSet"] !== null) {
            $this->SharePermissionSet = $param["SharePermissionSet"];
        }

    }
}