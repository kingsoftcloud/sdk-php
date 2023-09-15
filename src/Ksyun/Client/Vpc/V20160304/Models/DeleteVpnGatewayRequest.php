<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteVpnGatewayRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "VpnGatewayId" => null,
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
        if (array_key_exists("VpnGatewayId",$param) and $param["VpnGatewayId"] !== null) {
            if(is_bool($param["VpnGatewayId"])){
                $this->RequestParams["VpnGatewayId"] = $param["VpnGatewayId"] ? "true" : "false";
            } else {
                $this->RequestParams["VpnGatewayId"] = $param["VpnGatewayId"];
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