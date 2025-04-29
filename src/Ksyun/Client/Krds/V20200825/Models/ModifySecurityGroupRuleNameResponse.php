<?php

namespace Ksyun\Client\Krds\V20200825\Models;

use Ksyun\Common\BaseModel;

class ModifySecurityGroupRuleNameResponse extends BaseModel
{
    /** 请求ID
     * –**/
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