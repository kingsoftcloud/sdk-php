<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteDirectConnectGatewayRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DirectConnectGatewayId" => null,
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
        if (array_key_exists("DirectConnectGatewayId",$param) and $param["DirectConnectGatewayId"] !== null) {
            if(is_bool($param["DirectConnectGatewayId"])){
                $this->RequestParams["DirectConnectGatewayId"] = $param["DirectConnectGatewayId"] ? "true" : "false";
            } else {
                $this->RequestParams["DirectConnectGatewayId"] = $param["DirectConnectGatewayId"];
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