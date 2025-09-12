<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyVpnGatewayRouteRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "VpnGatewayRouteId" => null,
         /**String**/
        "Description" => null,
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
        if (array_key_exists("VpnGatewayRouteId",$param) and $param["VpnGatewayRouteId"] !== null) {
            if(is_bool($param["VpnGatewayRouteId"])){
                $this->RequestParams["VpnGatewayRouteId"] = $param["VpnGatewayRouteId"] ? "true" : "false";
            } else {
                $this->RequestParams["VpnGatewayRouteId"] = $param["VpnGatewayRouteId"];
            }
        }
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            if(is_bool($param["Description"])){
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
            }
        }

    }

    private function _unserialize($name,$params)
    {
        if ($params === null) {
            return;
        }
        foreach ($params as $key => $value){
            $this->$name[$key] = $value;
        }

    }
}