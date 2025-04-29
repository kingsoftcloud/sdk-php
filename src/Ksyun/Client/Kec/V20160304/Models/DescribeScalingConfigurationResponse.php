<?php

namespace Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeScalingConfigurationResponse extends BaseModel
{
    /** **/
    public $RequestId;

    /** **/
    public $ScalingConfigurationCount;

    /**Object **/
    public $ScalingConfigurationSet;

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
        if (array_key_exists("ScalingConfigurationCount", $param) and $param["ScalingConfigurationCount"] !== null) {
            $this->ScalingConfigurationCount = $param["ScalingConfigurationCount"];
        }
        if (array_key_exists("ScalingConfigurationSet", $param) and $param["ScalingConfigurationSet"] !== null) {
            $this->ScalingConfigurationSet = $param["ScalingConfigurationSet"];
        }

    }
}