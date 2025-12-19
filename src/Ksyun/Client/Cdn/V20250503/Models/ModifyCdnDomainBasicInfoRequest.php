<?php
namespace  Ksyun\Client\Cdn\V20250503\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyCdnDomainBasicInfoRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DomainId" => null,
         /**String**/
        "Regions" => null,
         /**String**/
        "OriginType" => null,
         /**String**/
        "OriginProtocol" => null,
         /**String**/
        "Origin" => null,
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
        if (array_key_exists("Regions",$param) and $param["Regions"] !== null) {
            if(is_bool($param["Regions"])){
                $this->RequestParams["Regions"] = $param["Regions"] ? "true" : "false";
            } else {
                $this->RequestParams["Regions"] = $param["Regions"];
            }
        }
        if (array_key_exists("OriginType",$param) and $param["OriginType"] !== null) {
            if(is_bool($param["OriginType"])){
                $this->RequestParams["OriginType"] = $param["OriginType"] ? "true" : "false";
            } else {
                $this->RequestParams["OriginType"] = $param["OriginType"];
            }
        }
        if (array_key_exists("OriginProtocol",$param) and $param["OriginProtocol"] !== null) {
            if(is_bool($param["OriginProtocol"])){
                $this->RequestParams["OriginProtocol"] = $param["OriginProtocol"] ? "true" : "false";
            } else {
                $this->RequestParams["OriginProtocol"] = $param["OriginProtocol"];
            }
        }
        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            if(is_bool($param["Origin"])){
                $this->RequestParams["Origin"] = $param["Origin"] ? "true" : "false";
            } else {
                $this->RequestParams["Origin"] = $param["Origin"];
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