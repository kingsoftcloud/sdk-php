<?php

namespace Ksyun\Client\Eip\V20160304\Models;

use Ksyun\Common\BaseModel;

class GetLinesResponse extends BaseModel
{
    /** 请求ID**/
    public $RequestId;

    /**Object 线路列表**/
    public $LineSet;

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
        if (array_key_exists("LineSet", $param) and $param["LineSet"] !== null) {
            $this->LineSet = $param["LineSet"];
        }

    }
}