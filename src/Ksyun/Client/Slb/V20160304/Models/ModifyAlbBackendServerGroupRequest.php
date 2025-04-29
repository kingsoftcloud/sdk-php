<?php

namespace Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyAlbBackendServerGroupRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "BackendServerGroupId" => null,
        /**String**/
        "Name" => null,
        /**String**/
        "UpstreamKeepalive" => null,
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
        if (array_key_exists("BackendServerGroupId", $param) and $param["BackendServerGroupId"] !== null) {
            if (is_bool($param["BackendServerGroupId"])) {
                $this->RequestParams["BackendServerGroupId"] = $param["BackendServerGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["BackendServerGroupId"] = $param["BackendServerGroupId"];
            }
        }
        if (array_key_exists("Name", $param) and $param["Name"] !== null) {
            if (is_bool($param["Name"])) {
                $this->RequestParams["Name"] = $param["Name"] ? "true" : "false";
            } else {
                $this->RequestParams["Name"] = $param["Name"];
            }
        }
        if (array_key_exists("UpstreamKeepalive", $param) and $param["UpstreamKeepalive"] !== null) {
            if (is_bool($param["UpstreamKeepalive"])) {
                $this->RequestParams["UpstreamKeepalive"] = $param["UpstreamKeepalive"] ? "true" : "false";
            } else {
                $this->RequestParams["UpstreamKeepalive"] = $param["UpstreamKeepalive"];
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