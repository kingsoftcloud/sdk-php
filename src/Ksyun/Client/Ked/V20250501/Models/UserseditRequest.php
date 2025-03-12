<?php

namespace Ksyun\Client\Ked\V20250501\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class UserseditRequest extends BaseModel
{
    public $RequestParams = [
        /**Int**/
        "id" => null,
        /**String**/
        "name" => null,
        /**String**/
        "phoneOrEmail" => null,
        /**String**/
        "nickName" => null,
        /**Int**/
        "status" => null,
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
        if (array_key_exists("id", $param) and $param["id"] !== null) {
            if (is_bool($param["id"])) {
                $this->RequestParams["id"] = $param["id"] ? "true" : "false";
            } else {
                $this->RequestParams["id"] = $param["id"];
            }
        }
        if (array_key_exists("name", $param) and $param["name"] !== null) {
            if (is_bool($param["name"])) {
                $this->RequestParams["name"] = $param["name"] ? "true" : "false";
            } else {
                $this->RequestParams["name"] = $param["name"];
            }
        }
        if (array_key_exists("phoneOrEmail", $param) and $param["phoneOrEmail"] !== null) {
            if (is_bool($param["phoneOrEmail"])) {
                $this->RequestParams["phoneOrEmail"] = $param["phoneOrEmail"] ? "true" : "false";
            } else {
                $this->RequestParams["phoneOrEmail"] = $param["phoneOrEmail"];
            }
        }
        if (array_key_exists("nickName", $param) and $param["nickName"] !== null) {
            if (is_bool($param["nickName"])) {
                $this->RequestParams["nickName"] = $param["nickName"] ? "true" : "false";
            } else {
                $this->RequestParams["nickName"] = $param["nickName"];
            }
        }
        if (array_key_exists("status", $param) and $param["status"] !== null) {
            if (is_bool($param["status"])) {
                $this->RequestParams["status"] = $param["status"] ? "true" : "false";
            } else {
                $this->RequestParams["status"] = $param["status"];
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