<?php

namespace Ksyun\Client\Ked\V20250501\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class UserscreateRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "name" => null,
        /**String**/
        "password" => null,
        /**String**/
        "phoneOrEmail" => null,
        /**Int**/
        "roleId" => null,
    ];


    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/json");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("name", $param) and $param["name"] !== null) {
            if (is_bool($param["name"])) {
                $this->RequestParams["name"] = $param["name"] ? "true" : "false";
            } else {
                $this->RequestParams["name"] = $param["name"];
            }
        }
        if (array_key_exists("password", $param) and $param["password"] !== null) {
            if (is_bool($param["password"])) {
                $this->RequestParams["password"] = $param["password"] ? "true" : "false";
            } else {
                $this->RequestParams["password"] = $param["password"];
            }
        }
        if (array_key_exists("phoneOrEmail", $param) and $param["phoneOrEmail"] !== null) {
            if (is_bool($param["phoneOrEmail"])) {
                $this->RequestParams["phoneOrEmail"] = $param["phoneOrEmail"] ? "true" : "false";
            } else {
                $this->RequestParams["phoneOrEmail"] = $param["phoneOrEmail"];
            }
        }
        if (array_key_exists("roleId", $param) and $param["roleId"] !== null) {
            if (is_bool($param["roleId"])) {
                $this->RequestParams["roleId"] = $param["roleId"] ? "true" : "false";
            } else {
                $this->RequestParams["roleId"] = $param["roleId"];
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