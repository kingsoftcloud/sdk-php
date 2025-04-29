<?php

namespace Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteCustomerGatewayRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "CustomerGatewayId" => null,
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
        if (array_key_exists("CustomerGatewayId", $param) and $param["CustomerGatewayId"] !== null) {
            if (is_bool($param["CustomerGatewayId"])) {
                $this->RequestParams["CustomerGatewayId"] = $param["CustomerGatewayId"] ? "true" : "false";
            } else {
                $this->RequestParams["CustomerGatewayId"] = $param["CustomerGatewayId"];
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