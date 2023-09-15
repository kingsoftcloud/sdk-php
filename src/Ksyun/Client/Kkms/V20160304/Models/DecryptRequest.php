<?php
namespace  Ksyun\Client\Kkms\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DecryptRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "KeyId" => null,
         /**String**/
        "CiphertextBlob" => null,
    ];


    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            if(is_bool($param["KeyId"])){
                $this->RequestParams["KeyId"] = $param["KeyId"] ? "true" : "false";
            } else {
                $this->RequestParams["KeyId"] = $param["KeyId"];
            }
        }
        if (array_key_exists("CiphertextBlob",$param) and $param["CiphertextBlob"] !== null) {
            if(is_bool($param["CiphertextBlob"])){
                $this->RequestParams["CiphertextBlob"] = $param["CiphertextBlob"] ? "true" : "false";
            } else {
                $this->RequestParams["CiphertextBlob"] = $param["CiphertextBlob"];
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