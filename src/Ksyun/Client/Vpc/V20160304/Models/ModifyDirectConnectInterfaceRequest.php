<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyDirectConnectInterfaceRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DirectConnectInterfaceId" => null,
         /**String**/
        "DirectConnectInterfaceName" => null,
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
        if (array_key_exists("DirectConnectInterfaceName",$param) and $param["DirectConnectInterfaceName"] !== null) {
            if(is_bool($param["DirectConnectInterfaceName"])){
                $this->RequestParams["DirectConnectInterfaceName"] = $param["DirectConnectInterfaceName"] ? "true" : "false";
            } else {
                $this->RequestParams["DirectConnectInterfaceName"] = $param["DirectConnectInterfaceName"];
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