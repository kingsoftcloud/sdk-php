<?php

namespace Ksyun\Client\Kcrs\V20211109\Models;

use Ksyun\Common\BaseModel;

class ScheduleResponse extends BaseModel
{
    /** 请求Id**/
    public $Requestid;

    /** 执行信息**/
    public $Data;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Requestid", $param) and $param["Requestid"] !== null) {
            $this->Requestid = $param["Requestid"];
        }
        if (array_key_exists("Data", $param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }

    }
}