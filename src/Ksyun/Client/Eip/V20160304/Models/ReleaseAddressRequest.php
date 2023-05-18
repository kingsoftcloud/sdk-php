<?php
namespace  Ksyun\Client\Eip\V20160304\Models;

use Ksyun\Common\BaseModel;

class ReleaseAddressRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "AllocationId" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("AllocationId",$param) and $param["AllocationId"] !== null) {
            if(is_bool($param["AllocationId"])){
                $this->RequestParams["AllocationId"] = $param["AllocationId"] ? "true" : "false";
            } else {
                $this->RequestParams["AllocationId"] = $param["AllocationId"];
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