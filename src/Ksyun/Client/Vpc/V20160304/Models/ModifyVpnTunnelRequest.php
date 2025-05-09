<?php

namespace Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyVpnTunnelRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "VpnTunnelId" => null,
        /**String**/
        "VpnTunnelName" => null,
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
        if (array_key_exists("VpnTunnelId", $param) and $param["VpnTunnelId"] !== null) {
            if (is_bool($param["VpnTunnelId"])) {
                $this->RequestParams["VpnTunnelId"] = $param["VpnTunnelId"] ? "true" : "false";
            } else {
                $this->RequestParams["VpnTunnelId"] = $param["VpnTunnelId"];
            }
        }
        if (array_key_exists("VpnTunnelName", $param) and $param["VpnTunnelName"] !== null) {
            if (is_bool($param["VpnTunnelName"])) {
                $this->RequestParams["VpnTunnelName"] = $param["VpnTunnelName"] ? "true" : "false";
            } else {
                $this->RequestParams["VpnTunnelName"] = $param["VpnTunnelName"];
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