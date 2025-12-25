<?php
namespace  Ksyun\Client\Cdn\V3\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class SetRequestAuthConfigRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DomainId" => null,
         /**String**/
        "Enable" => null,
         /**String**/
        "AuthType" => null,
         /**String**/
        "Key1" => null,
         /**String**/
        "Key2" => null,
         /**String**/
        "ExpirationTime" => null,
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
        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            if(is_bool($param["DomainId"])){
                $this->RequestParams["DomainId"] = $param["DomainId"] ? "true" : "false";
            } else {
                $this->RequestParams["DomainId"] = $param["DomainId"];
            }
        }
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            if(is_bool($param["Enable"])){
                $this->RequestParams["Enable"] = $param["Enable"] ? "true" : "false";
            } else {
                $this->RequestParams["Enable"] = $param["Enable"];
            }
        }
        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            if(is_bool($param["AuthType"])){
                $this->RequestParams["AuthType"] = $param["AuthType"] ? "true" : "false";
            } else {
                $this->RequestParams["AuthType"] = $param["AuthType"];
            }
        }
        if (array_key_exists("Key1",$param) and $param["Key1"] !== null) {
            if(is_bool($param["Key1"])){
                $this->RequestParams["Key1"] = $param["Key1"] ? "true" : "false";
            } else {
                $this->RequestParams["Key1"] = $param["Key1"];
            }
        }
        if (array_key_exists("Key2",$param) and $param["Key2"] !== null) {
            if(is_bool($param["Key2"])){
                $this->RequestParams["Key2"] = $param["Key2"] ? "true" : "false";
            } else {
                $this->RequestParams["Key2"] = $param["Key2"];
            }
        }
        if (array_key_exists("ExpirationTime",$param) and $param["ExpirationTime"] !== null) {
            if(is_bool($param["ExpirationTime"])){
                $this->RequestParams["ExpirationTime"] = $param["ExpirationTime"] ? "true" : "false";
            } else {
                $this->RequestParams["ExpirationTime"] = $param["ExpirationTime"];
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