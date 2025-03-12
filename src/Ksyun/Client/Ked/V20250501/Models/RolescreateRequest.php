<?php

namespace Ksyun\Client\Ked\V20250501\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class RolescreateRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "name" => null,
        /**String**/
        "description" => null,
        /**Int**/
        "fileTransfer" => null,
        /**Int**/
        "clipboard" => null,
        /**Int**/
        "disk" => null,
        /**Int**/
        "usb" => null,
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
        if (array_key_exists("description", $param) and $param["description"] !== null) {
            if (is_bool($param["description"])) {
                $this->RequestParams["description"] = $param["description"] ? "true" : "false";
            } else {
                $this->RequestParams["description"] = $param["description"];
            }
        }
        if (array_key_exists("fileTransfer", $param) and $param["fileTransfer"] !== null) {
            if (is_bool($param["fileTransfer"])) {
                $this->RequestParams["fileTransfer"] = $param["fileTransfer"] ? "true" : "false";
            } else {
                $this->RequestParams["fileTransfer"] = $param["fileTransfer"];
            }
        }
        if (array_key_exists("clipboard", $param) and $param["clipboard"] !== null) {
            if (is_bool($param["clipboard"])) {
                $this->RequestParams["clipboard"] = $param["clipboard"] ? "true" : "false";
            } else {
                $this->RequestParams["clipboard"] = $param["clipboard"];
            }
        }
        if (array_key_exists("disk", $param) and $param["disk"] !== null) {
            if (is_bool($param["disk"])) {
                $this->RequestParams["disk"] = $param["disk"] ? "true" : "false";
            } else {
                $this->RequestParams["disk"] = $param["disk"];
            }
        }
        if (array_key_exists("usb", $param) and $param["usb"] !== null) {
            if (is_bool($param["usb"])) {
                $this->RequestParams["usb"] = $param["usb"] ? "true" : "false";
            } else {
                $this->RequestParams["usb"] = $param["usb"];
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