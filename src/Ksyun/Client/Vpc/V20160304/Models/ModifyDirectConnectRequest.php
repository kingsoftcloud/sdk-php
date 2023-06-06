<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyDirectConnectRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DirectConnectId" => null,
         /**String**/
        "DirectConnectName" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DirectConnectId",$param) and $param["DirectConnectId"] !== null) {
            if(is_bool($param["DirectConnectId"])){
                $this->RequestParams["DirectConnectId"] = $param["DirectConnectId"] ? "true" : "false";
            } else {
                $this->RequestParams["DirectConnectId"] = $param["DirectConnectId"];
            }
        }
        if (array_key_exists("DirectConnectName",$param) and $param["DirectConnectName"] !== null) {
            if(is_bool($param["DirectConnectName"])){
                $this->RequestParams["DirectConnectName"] = $param["DirectConnectName"] ? "true" : "false";
            } else {
                $this->RequestParams["DirectConnectName"] = $param["DirectConnectName"];
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