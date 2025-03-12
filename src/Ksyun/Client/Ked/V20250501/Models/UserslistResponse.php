<?php

namespace Ksyun\Client\Ked\V20250501\Models;

use Ksyun\Common\BaseModel;

class UserslistResponse extends BaseModel
{
    /** 成功为 200，其他错误码参考 http 状态码 其他错误码单独给出**/
    public $message;

    /** **/
    public $code;

    /** **/
    public $requestId;

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
        if (array_key_exists("message", $param) and $param["message"] !== null) {
            $this->message = $param["message"];
        }
        if (array_key_exists("code", $param) and $param["code"] !== null) {
            $this->code = $param["code"];
        }
        if (array_key_exists("requestId", $param) and $param["requestId"] !== null) {
            $this->requestId = $param["requestId"];
        }
        if (array_key_exists("data", $param) and $param["data"] !== null) {
            $this->data = $param["data"];
        }

    }
}