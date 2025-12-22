<?php
namespace  Ksyun\Client\Cdn\V3\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class SetReferProtectionConfigRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DomainId" => null,
         /**String**/
        "Enable" => null,
         /**String**/
        "ReferType" => null,
         /**String**/
        "ReferList" => null,
         /**String**/
        "AllowEmpty" => null,
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
        if (array_key_exists("ReferType",$param) and $param["ReferType"] !== null) {
            if(is_bool($param["ReferType"])){
                $this->RequestParams["ReferType"] = $param["ReferType"] ? "true" : "false";
            } else {
                $this->RequestParams["ReferType"] = $param["ReferType"];
            }
        }
        if (array_key_exists("ReferList",$param) and $param["ReferList"] !== null) {
            if(is_bool($param["ReferList"])){
                $this->RequestParams["ReferList"] = $param["ReferList"] ? "true" : "false";
            } else {
                $this->RequestParams["ReferList"] = $param["ReferList"];
            }
        }
        if (array_key_exists("AllowEmpty",$param) and $param["AllowEmpty"] !== null) {
            if(is_bool($param["AllowEmpty"])){
                $this->RequestParams["AllowEmpty"] = $param["AllowEmpty"] ? "true" : "false";
            } else {
                $this->RequestParams["AllowEmpty"] = $param["AllowEmpty"];
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