<?php

namespace Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class AssociateRouteTableRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "SubnetId" => null,
        /**String**/
        "RouteTableId" => null,
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
        if (array_key_exists("SubnetId", $param) and $param["SubnetId"] !== null) {
            if (is_bool($param["SubnetId"])) {
                $this->RequestParams["SubnetId"] = $param["SubnetId"] ? "true" : "false";
            } else {
                $this->RequestParams["SubnetId"] = $param["SubnetId"];
            }
        }
        if (array_key_exists("RouteTableId", $param) and $param["RouteTableId"] !== null) {
            if (is_bool($param["RouteTableId"])) {
                $this->RequestParams["RouteTableId"] = $param["RouteTableId"] ? "true" : "false";
            } else {
                $this->RequestParams["RouteTableId"] = $param["RouteTableId"];
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