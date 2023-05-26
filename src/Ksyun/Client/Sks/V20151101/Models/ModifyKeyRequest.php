<?php
namespace  Ksyun\Client\Sks\V20151101\Models;

use Ksyun\Common\BaseModel;

class ModifyKeyRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "KeyName" => null,
         /**String**/
        "KeyId" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("KeyName",$param) and $param["KeyName"] !== null) {
            if(is_bool($param["KeyName"])){
                $this->RequestParams["KeyName"] = $param["KeyName"] ? "true" : "false";
            } else {
                $this->RequestParams["KeyName"] = $param["KeyName"];
            }
        }
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            if(is_bool($param["KeyId"])){
                $this->RequestParams["KeyId"] = $param["KeyId"] ? "true" : "false";
            } else {
                $this->RequestParams["KeyId"] = $param["KeyId"];
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