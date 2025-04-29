<?php

namespace Ksyun\Client\Bill_union\V20200101\Models;

use Ksyun\Common\BaseModel;

class DescribeProductCodeResponse extends BaseModel
{
    /** 当前请求的RequestId**/
    public $RequestId;

    /**Object 产品线集合**/
    public $ProductGroupSet;

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
        if (array_key_exists("ProductGroupSet", $param) and $param["ProductGroupSet"] !== null) {
            $this->ProductGroupSet = $param["ProductGroupSet"];
        }

    }
}