<?php

namespace Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeAvailabilityZonesResponse extends BaseModel
{
    /** **/
    public $RequestId;

    /**Object **/
    public $AvailabilityZoneSet;

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
        if (array_key_exists("AvailabilityZoneSet", $param) and $param["AvailabilityZoneSet"] !== null) {
            $this->AvailabilityZoneSet = $param["AvailabilityZoneSet"];
        }

    }
}