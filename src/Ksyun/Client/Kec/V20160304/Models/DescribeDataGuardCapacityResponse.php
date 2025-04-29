<?php

namespace Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeDataGuardCapacityResponse extends BaseModel
{
    /** **/
    public $RequestId;

    /** **/
    public $DataGuardCapacity;

    /**Object **/
    public $DataGuardCapacitySet;

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
        if (array_key_exists("DataGuardCapacity", $param) and $param["DataGuardCapacity"] !== null) {
            $this->DataGuardCapacity = $param["DataGuardCapacity"];
        }
        if (array_key_exists("DataGuardCapacitySet", $param) and $param["DataGuardCapacitySet"] !== null) {
            $this->DataGuardCapacitySet = $param["DataGuardCapacitySet"];
        }

    }
}