<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class ValidatedDiskEncryptRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "AccountId" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("AccountId",$param) and $param["AccountId"] !== null) {
            if(is_bool($param["AccountId"])){
                $this->RequestParams["AccountId"] = $param["AccountId"] ? "true" : "false";
            } else {
                $this->RequestParams["AccountId"] = $param["AccountId"];
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