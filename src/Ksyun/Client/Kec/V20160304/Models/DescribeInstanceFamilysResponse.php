<?php

namespace Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeInstanceFamilysResponse extends BaseModel
{
    /** **/
    public $RequestId;

    /**Object **/
    public $InstanceFamilySet;

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
        if (array_key_exists("InstanceFamilySet", $param) and $param["InstanceFamilySet"] !== null) {
            $this->InstanceFamilySet = $param["InstanceFamilySet"];
        }

    }
}