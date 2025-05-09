<?php

namespace Ksyun\Client\Waf\V20200707\Models;

use Ksyun\Common\BaseModel;

class DeleteIpv6ProtectionResponse extends BaseModel
{
    /** **/
    public $RequestId;

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

    }
}