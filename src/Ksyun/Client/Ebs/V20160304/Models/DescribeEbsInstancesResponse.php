<?php

namespace Ksyun\Client\Ebs\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeEbsInstancesResponse extends BaseModel
{
    /** 唯一请求ID，每次请求都会返回**/
    public $RequestId;

    /**Object 可挂载主机的相关信息**/
    public $Instances;

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
        if (array_key_exists("Instances", $param) and $param["Instances"] !== null) {
            $this->Instances = $param["Instances"];
        }

    }
}