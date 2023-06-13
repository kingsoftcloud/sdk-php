<?php
namespace  Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;

class DeregisterInstancesFromListenerRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "RegisterId" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("RegisterId",$param) and $param["RegisterId"] !== null) {
            if(is_bool($param["RegisterId"])){
                $this->RequestParams["RegisterId"] = $param["RegisterId"] ? "true" : "false";
            } else {
                $this->RequestParams["RegisterId"] = $param["RegisterId"];
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