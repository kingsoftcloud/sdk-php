<?php

namespace Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class PublishDirectConnectRouteRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "DirectConnectGatewayRouteId" => null,
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
        if (array_key_exists("DirectConnectGatewayRouteId", $param) and $param["DirectConnectGatewayRouteId"] !== null) {
            if (is_bool($param["DirectConnectGatewayRouteId"])) {
                $this->RequestParams["DirectConnectGatewayRouteId"] = $param["DirectConnectGatewayRouteId"] ? "true" : "false";
            } else {
                $this->RequestParams["DirectConnectGatewayRouteId"] = $param["DirectConnectGatewayRouteId"];
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