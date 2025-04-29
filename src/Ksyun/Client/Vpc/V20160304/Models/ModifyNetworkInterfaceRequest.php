<?php

namespace Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyNetworkInterfaceRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "NetworkInterfaceName" => null,
        /**String**/
        "NetworkInterfaceId" => null,
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
        if (array_key_exists("NetworkInterfaceName", $param) and $param["NetworkInterfaceName"] !== null) {
            if (is_bool($param["NetworkInterfaceName"])) {
                $this->RequestParams["NetworkInterfaceName"] = $param["NetworkInterfaceName"] ? "true" : "false";
            } else {
                $this->RequestParams["NetworkInterfaceName"] = $param["NetworkInterfaceName"];
            }
        }
        if (array_key_exists("NetworkInterfaceId", $param) and $param["NetworkInterfaceId"] !== null) {
            if (is_bool($param["NetworkInterfaceId"])) {
                $this->RequestParams["NetworkInterfaceId"] = $param["NetworkInterfaceId"] ? "true" : "false";
            } else {
                $this->RequestParams["NetworkInterfaceId"] = $param["NetworkInterfaceId"];
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