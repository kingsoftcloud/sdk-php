<?php
namespace  Ksyun\Client\Kcrs\V20211109\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateInstanceTokenRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "InstanceId" => null,
         /**String**/
        "TokenType" => null,
         /**String**/
        "TokenTime" => null,
         /**String**/
        "Desc" => null,
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            if(is_bool($param["InstanceId"])){
                $this->RequestParams["InstanceId"] = $param["InstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceId"] = $param["InstanceId"];
            }
        }
        if (array_key_exists("TokenType",$param) and $param["TokenType"] !== null) {
            if(is_bool($param["TokenType"])){
                $this->RequestParams["TokenType"] = $param["TokenType"] ? "true" : "false";
            } else {
                $this->RequestParams["TokenType"] = $param["TokenType"];
            }
        }
        if (array_key_exists("TokenTime",$param) and $param["TokenTime"] !== null) {
            if(is_bool($param["TokenTime"])){
                $this->RequestParams["TokenTime"] = $param["TokenTime"] ? "true" : "false";
            } else {
                $this->RequestParams["TokenTime"] = $param["TokenTime"];
            }
        }
        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            if(is_bool($param["Desc"])){
                $this->RequestParams["Desc"] = $param["Desc"] ? "true" : "false";
            } else {
                $this->RequestParams["Desc"] = $param["Desc"];
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