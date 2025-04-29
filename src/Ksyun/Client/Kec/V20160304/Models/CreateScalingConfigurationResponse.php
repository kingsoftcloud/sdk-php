<?php

namespace Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateScalingConfigurationResponse extends BaseModel
{
    /** 请求ID**/
    public $RequestId;

    /** 启动配置ID**/
    public $ScalingConfigurationId;

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
        if (array_key_exists("ScalingConfigurationId", $param) and $param["ScalingConfigurationId"] !== null) {
            $this->ScalingConfigurationId = $param["ScalingConfigurationId"];
        }

    }
}