<?php

namespace Ksyun\Client\Memcached\V20180627\Models;

use Ksyun\Common\BaseModel;

class DescribeCacheClustersResponse extends BaseModel
{
    /** **/
    public $reqId;

    /** **/
    public $code;

    /** **/
    public $message;

    /** **/
    public $data;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("reqId", $param) and $param["reqId"] !== null) {
            $this->reqId = $param["reqId"];
        }
        if (array_key_exists("code", $param) and $param["code"] !== null) {
            $this->code = $param["code"];
        }
        if (array_key_exists("message", $param) and $param["message"] !== null) {
            $this->message = $param["message"];
        }
        if (array_key_exists("data", $param) and $param["data"] !== null) {
            $this->data = $param["data"];
        }

    }
}