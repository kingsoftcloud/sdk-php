<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class DeleteHaVipRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "HaVipId" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("HaVipId",$param) and $param["HaVipId"] !== null) {
            if(is_bool($param["HaVipId"])){
                $this->RequestParams["HaVipId"] = $param["HaVipId"] ? "true" : "false";
            } else {
                $this->RequestParams["HaVipId"] = $param["HaVipId"];
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