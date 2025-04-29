<?php

namespace Ksyun\Client\Kce\V20190806\Models;

use Ksyun\Common\BaseModel;

class DescribeEpcImageResponse extends BaseModel
{
    /**Object **/
    public $ImageSet;

    /** 返回的镜像总数**/
    public $TotalCount;

    /** 请求id**/
    public $RequestId;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ImageSet", $param) and $param["ImageSet"] !== null) {
            $this->ImageSet = $param["ImageSet"];
        }
        if (array_key_exists("TotalCount", $param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
        if (array_key_exists("RequestId", $param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }

    }
}