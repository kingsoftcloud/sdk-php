<?php

namespace Ksyun\Client\Kcrs\V20211109\Models;

use Ksyun\Common\BaseModel;

class DescribeNamespaceExistResponse extends BaseModel
{
    /** 请求ID**/
    public $RequestId;

    /** 是否存在**/
    public $Exist;

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
        if (array_key_exists("Exist", $param) and $param["Exist"] !== null) {
            $this->Exist = $param["Exist"];
        }

    }
}