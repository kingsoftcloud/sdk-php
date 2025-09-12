<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeDirectConnectInterfacesBgpStatusRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DirectConnectInterfaceId.N" => null,
    ];


    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/json");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DirectConnectInterfaceId.N",$param) and $param["DirectConnectInterfaceId.N"] !== null) {
            if(is_bool($param["DirectConnectInterfaceId.N"])){
                $this->RequestParams["DirectConnectInterfaceId.N"] = $param["DirectConnectInterfaceId.N"] ? "true" : "false";
            } else {
                $this->RequestParams["DirectConnectInterfaceId.N"] = $param["DirectConnectInterfaceId.N"];
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