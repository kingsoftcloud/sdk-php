<?php

namespace Ksyun\Client\Kkms\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class EncryptRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "KeyId" => null,
        /**String**/
        "Plaintext" => null,
    ];


    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("KeyId", $param) and $param["KeyId"] !== null) {
            if (is_bool($param["KeyId"])) {
                $this->RequestParams["KeyId"] = $param["KeyId"] ? "true" : "false";
            } else {
                $this->RequestParams["KeyId"] = $param["KeyId"];
            }
        }
        if (array_key_exists("Plaintext", $param) and $param["Plaintext"] !== null) {
            if (is_bool($param["Plaintext"])) {
                $this->RequestParams["Plaintext"] = $param["Plaintext"] ? "true" : "false";
            } else {
                $this->RequestParams["Plaintext"] = $param["Plaintext"];
            }
        }

    }

    private function _unserialize($name, $params)
    {
        if ($params === null) {
            return;
        }
        foreach ($params as $key => $value) {
            $this->$name[$key] = $value;
        }

    }
}