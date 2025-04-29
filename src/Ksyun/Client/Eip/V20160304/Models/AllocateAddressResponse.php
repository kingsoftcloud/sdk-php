<?php

namespace Ksyun\Client\Eip\V20160304\Models;

use Ksyun\Common\BaseModel;

class AllocateAddressResponse extends BaseModel
{
    /** 弹性IP的ID**/
    public $AllocationId;

    /** 弹性IP地址**/
    public $PublicIp;

    /** 请求ID**/
    public $RequestId;

    /** IP版本**/
    public $IpVersion;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("AllocationId", $param) and $param["AllocationId"] !== null) {
            $this->AllocationId = $param["AllocationId"];
        }
        if (array_key_exists("PublicIp", $param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }
        if (array_key_exists("RequestId", $param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
        if (array_key_exists("IpVersion", $param) and $param["IpVersion"] !== null) {
            $this->IpVersion = $param["IpVersion"];
        }

    }
}