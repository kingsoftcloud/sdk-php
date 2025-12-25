<?php
namespace  Ksyun\Client\Cdn\V3\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class SetIpProtectionConfigRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DomainId" => null,
         /**String**/
        "Enable" => null,
         /**String**/
        "IpType" => null,
         /**String**/
        "IpList" => null,
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
        if (array_key_exists("IpType",$param) and $param["IpType"] !== null) {
            if(is_bool($param["IpType"])){
                $this->RequestParams["IpType"] = $param["IpType"] ? "true" : "false";
            } else {
                $this->RequestParams["IpType"] = $param["IpType"];
            }
        }
        if (array_key_exists("IpList",$param) and $param["IpList"] !== null) {
            if(is_bool($param["IpList"])){
                $this->RequestParams["IpList"] = $param["IpList"] ? "true" : "false";
            } else {
                $this->RequestParams["IpList"] = $param["IpList"];
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