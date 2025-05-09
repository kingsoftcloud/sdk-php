<?php

namespace Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;

class CreateProcessResponse extends BaseModel
{
    /** 请求ID**/
    public $RequestId;

    /** 操作是否成功**/
    public $Return;

    /** 工单ID**/
    public $ProcessId;

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
        if (array_key_exists("Return", $param) and $param["Return"] !== null) {
            $this->Return = $param["Return"];
        }
        if (array_key_exists("ProcessId", $param) and $param["ProcessId"] !== null) {
            $this->ProcessId = $param["ProcessId"];
        }

    }
}