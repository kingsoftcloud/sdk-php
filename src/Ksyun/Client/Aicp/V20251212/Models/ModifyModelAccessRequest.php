<?php
namespace  Ksyun\Client\Aicp\V20251212\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyModelAccessRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ModelId" => null,
         /**Array**/
        "Users" => null,
    ];


    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/json");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            if(is_bool($param["ModelId"])){
                $this->RequestParams["ModelId"] = $param["ModelId"] ? "true" : "false";
            } else {
                $this->RequestParams["ModelId"] = $param["ModelId"];
            }
        }
        if (array_key_exists("Users",$param) and $param["Users"] !== null) {
            if(is_bool($param["Users"])){
                $this->RequestParams["Users"] = $param["Users"] ? "true" : "false";
            } else {
                $this->RequestParams["Users"] = $param["Users"];
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