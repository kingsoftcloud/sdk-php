<?php

namespace Ksyun\Client\Kci\V20200702\Models;

use Ksyun\Common\BaseModel;

class DescribeKciPackagesResponse extends BaseModel
{
    /** 请求ID**/
    public $RequestId;

    /**Object **/
    public $Packages;

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
        if (array_key_exists("Packages", $param) and $param["Packages"] !== null) {
            $this->Packages = $param["Packages"];
        }

    }
}