<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyDirectConnectGatewayRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DirectConnectGatewayId" => null,
         /**String**/
        "DirectConnectGatewayName" => null,
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
        if (array_key_exists("DirectConnectGatewayName",$param) and $param["DirectConnectGatewayName"] !== null) {
            if(is_bool($param["DirectConnectGatewayName"])){
                $this->RequestParams["DirectConnectGatewayName"] = $param["DirectConnectGatewayName"] ? "true" : "false";
            } else {
                $this->RequestParams["DirectConnectGatewayName"] = $param["DirectConnectGatewayName"];
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