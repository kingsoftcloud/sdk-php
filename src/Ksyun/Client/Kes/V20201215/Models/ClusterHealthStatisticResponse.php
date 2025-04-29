<?php

namespace Ksyun\Client\Kes\V20201215\Models;

use Ksyun\Common\BaseModel;

class ClusterHealthStatisticResponse extends BaseModel
{
    /** **/
    public $status;

    /** 诊断数据，具体信息请参考输出示例**/
    public $data;

    /** **/
    public $message;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("status", $param) and $param["status"] !== null) {
            $this->status = $param["status"];
        }
        if (array_key_exists("data", $param) and $param["data"] !== null) {
            $this->data = $param["data"];
        }
        if (array_key_exists("message", $param) and $param["message"] !== null) {
            $this->message = $param["message"];
        }

    }
}