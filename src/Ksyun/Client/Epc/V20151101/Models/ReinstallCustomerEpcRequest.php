<?php

namespace Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ReinstallCustomerEpcRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "HostId" => null,
        /**String**/
        "ServerIp" => null,
        /**String**/
        "Path" => null,
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
        if (array_key_exists("ServerIp", $param) and $param["ServerIp"] !== null) {
            if (is_bool($param["ServerIp"])) {
                $this->RequestParams["ServerIp"] = $param["ServerIp"] ? "true" : "false";
            } else {
                $this->RequestParams["ServerIp"] = $param["ServerIp"];
            }
        }
        if (array_key_exists("Path", $param) and $param["Path"] !== null) {
            if (is_bool($param["Path"])) {
                $this->RequestParams["Path"] = $param["Path"] ? "true" : "false";
            } else {
                $this->RequestParams["Path"] = $param["Path"];
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