<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class DeleteDirectConnectInterfaceRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DirectConnectInterfaceId" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DirectConnectInterfaceId",$param) and $param["DirectConnectInterfaceId"] !== null) {
            if(is_bool($param["DirectConnectInterfaceId"])){
                $this->RequestParams["DirectConnectInterfaceId"] = $param["DirectConnectInterfaceId"] ? "true" : "false";
            } else {
                $this->RequestParams["DirectConnectInterfaceId"] = $param["DirectConnectInterfaceId"];
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