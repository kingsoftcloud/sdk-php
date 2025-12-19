<?php
namespace  Ksyun\Client\Cdn\V20250503\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ValidateDomainOwnerRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DomainName" => null,
         /**String**/
        "AuthType" => null,
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
        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            if(is_bool($param["DomainName"])){
                $this->RequestParams["DomainName"] = $param["DomainName"] ? "true" : "false";
            } else {
                $this->RequestParams["DomainName"] = $param["DomainName"];
            }
        }
        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            if(is_bool($param["AuthType"])){
                $this->RequestParams["AuthType"] = $param["AuthType"] ? "true" : "false";
            } else {
                $this->RequestParams["AuthType"] = $param["AuthType"];
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