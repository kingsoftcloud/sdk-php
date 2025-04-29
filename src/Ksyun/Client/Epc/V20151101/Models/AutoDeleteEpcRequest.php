<?php

namespace Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class AutoDeleteEpcRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "HostId" => null,
        /**String**/
        "AutoDeleteTime" => null,
        /**String**/
        "AutoDeleteEip" => null,
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
        if (array_key_exists("HostId", $param) and $param["HostId"] !== null) {
            if (is_bool($param["HostId"])) {
                $this->RequestParams["HostId"] = $param["HostId"] ? "true" : "false";
            } else {
                $this->RequestParams["HostId"] = $param["HostId"];
            }
        }
        if (array_key_exists("AutoDeleteTime", $param) and $param["AutoDeleteTime"] !== null) {
            if (is_bool($param["AutoDeleteTime"])) {
                $this->RequestParams["AutoDeleteTime"] = $param["AutoDeleteTime"] ? "true" : "false";
            } else {
                $this->RequestParams["AutoDeleteTime"] = $param["AutoDeleteTime"];
            }
        }
        if (array_key_exists("AutoDeleteEip", $param) and $param["AutoDeleteEip"] !== null) {
            if (is_bool($param["AutoDeleteEip"])) {
                $this->RequestParams["AutoDeleteEip"] = $param["AutoDeleteEip"] ? "true" : "false";
            } else {
                $this->RequestParams["AutoDeleteEip"] = $param["AutoDeleteEip"];
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