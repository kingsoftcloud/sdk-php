<?php
namespace  Ksyun\Client\Ked\V20250501\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateCloudDeskgetTokenRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "username" => null,
         /**String**/
        "password" => null,
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
        if (array_key_exists("username",$param) and $param["username"] !== null) {
            if(is_bool($param["username"])){
                $this->RequestParams["username"] = $param["username"] ? "true" : "false";
            } else {
                $this->RequestParams["username"] = $param["username"];
            }
        }
        if (array_key_exists("password",$param) and $param["password"] !== null) {
            if(is_bool($param["password"])){
                $this->RequestParams["password"] = $param["password"] ? "true" : "false";
            } else {
                $this->RequestParams["password"] = $param["password"];
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