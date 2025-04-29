<?php

namespace Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifySubnetResponse extends BaseModel
{
    /** 请求ID**/
    public $RequestId;

    /**Object 子网信息**/
    public $Subnet;

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
        if (array_key_exists("Subnet", $param) and $param["Subnet"] !== null) {
            $this->Subnet = $param["Subnet"];
        }

    }
}