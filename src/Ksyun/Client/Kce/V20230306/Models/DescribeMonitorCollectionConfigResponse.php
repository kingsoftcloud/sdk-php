<?php

namespace Ksyun\Client\Kce\V20230306\Models;

use Ksyun\Common\BaseModel;

class DescribeMonitorCollectionConfigResponse extends BaseModel
{
    /** 请求id**/
    public $RequestId;

    /** 监控采集配置yaml**/
    public $ConfigYaml;

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
        if (array_key_exists("ConfigYaml", $param) and $param["ConfigYaml"] !== null) {
            $this->ConfigYaml = $param["ConfigYaml"];
        }

    }
}