<?php
namespace  Ksyun\Client\Monitor\V20220101\Models;

use Ksyun\Common\BaseModel;

class DeleteAlarmPolicyRequest extends BaseModel
{
    public $RequestParams = [
         /**Array**/
        "PolicyIds" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("PolicyIds",$param) and $param["PolicyIds"] !== null) {
            if(is_bool($param["PolicyIds"])){
                $this->RequestParams["PolicyIds"] = $param["PolicyIds"] ? "true" : "false";
            } else {
                $this->RequestParams["PolicyIds"] = $param["PolicyIds"];
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