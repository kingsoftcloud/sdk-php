<?php

namespace Ksyun\Client\Trade\V20200114\Models;

use Ksyun\Common\BaseModel;

class DescribeInstancesResponse extends BaseModel
{
    /** **/
    public $RequestId;

    /**Object **/
    public $data;

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
        if (array_key_exists("data", $param) and $param["data"] !== null) {
            $this->data = $param["data"];
        }

    }
}