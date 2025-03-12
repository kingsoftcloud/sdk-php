<?php

namespace Ksyun\Client\Ked\V20250501\Models;

use Ksyun\Common\BaseModel;

class UserseditResponse extends BaseModel
{
    /** **/
    public $requestId;

    /** **/
    public $code;

    /** **/
    public $message;

    /** **/
    public $detail;

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
        if (array_key_exists("requestId", $param) and $param["requestId"] !== null) {
            $this->requestId = $param["requestId"];
        }
        if (array_key_exists("code", $param) and $param["code"] !== null) {
            $this->code = $param["code"];
        }
        if (array_key_exists("message", $param) and $param["message"] !== null) {
            $this->message = $param["message"];
        }
        if (array_key_exists("detail", $param) and $param["detail"] !== null) {
            $this->detail = $param["detail"];
        }
        if (array_key_exists("data", $param) and $param["data"] !== null) {
            $this->data = $param["data"];
        }

    }
}