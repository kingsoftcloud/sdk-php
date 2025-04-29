<?php

namespace Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifySecurityGroupRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "HostId" => null,
        /**String**/
        "NetworkInterfaceId" => null,
    ];

    /**特殊参数类型:Filter**/
    public $SecurityGroupId = [];

    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/json");
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
        if (array_key_exists("NetworkInterfaceId", $param) and $param["NetworkInterfaceId"] !== null) {
            if (is_bool($param["NetworkInterfaceId"])) {
                $this->RequestParams["NetworkInterfaceId"] = $param["NetworkInterfaceId"] ? "true" : "false";
            } else {
                $this->RequestParams["NetworkInterfaceId"] = $param["NetworkInterfaceId"];
            }
        }
        if (array_key_exists("SecurityGroupId", $param) and $param["SecurityGroupId"] !== null) {
            $res = $this->formatFilterParams("SecurityGroupId", $param["SecurityGroupId"]);
            $this->_unserialize("SecurityGroupId", $res);
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