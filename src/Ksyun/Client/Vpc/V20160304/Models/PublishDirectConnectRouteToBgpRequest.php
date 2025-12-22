<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class PublishDirectConnectRouteToBgpRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DirectConnectRouteId" => null,
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
        if (array_key_exists("DirectConnectRouteId",$param) and $param["DirectConnectRouteId"] !== null) {
            if(is_bool($param["DirectConnectRouteId"])){
                $this->RequestParams["DirectConnectRouteId"] = $param["DirectConnectRouteId"] ? "true" : "false";
            } else {
                $this->RequestParams["DirectConnectRouteId"] = $param["DirectConnectRouteId"];
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