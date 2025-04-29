<?php

namespace Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteVpnGatewayRouteRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "VpnGatewayRouteId" => null,
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
        if (array_key_exists("VpnGatewayRouteId", $param) and $param["VpnGatewayRouteId"] !== null) {
            if (is_bool($param["VpnGatewayRouteId"])) {
                $this->RequestParams["VpnGatewayRouteId"] = $param["VpnGatewayRouteId"] ? "true" : "false";
            } else {
                $this->RequestParams["VpnGatewayRouteId"] = $param["VpnGatewayRouteId"];
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