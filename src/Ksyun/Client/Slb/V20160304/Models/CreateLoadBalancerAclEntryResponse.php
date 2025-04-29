<?php

namespace Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateLoadBalancerAclEntryResponse extends BaseModel
{
    /** 请求ID**/
    public $RequestId;

    /**Object LoadBalancerAcl规则信息**/
    public $LoadBalancerAclEntry;

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
        if (array_key_exists("LoadBalancerAclEntry", $param) and $param["LoadBalancerAclEntry"] !== null) {
            $this->LoadBalancerAclEntry = $param["LoadBalancerAclEntry"];
        }

    }
}