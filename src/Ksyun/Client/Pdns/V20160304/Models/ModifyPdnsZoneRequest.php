<?php
namespace  Ksyun\Client\Pdns\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyPdnsZoneRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ZoneId" => null,
         /**Int**/
        "ZoneTtl" => null,
         /**String**/
        "ProxyPattern" => null,
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            if(is_bool($param["ZoneId"])){
                $this->RequestParams["ZoneId"] = $param["ZoneId"] ? "true" : "false";
            } else {
                $this->RequestParams["ZoneId"] = $param["ZoneId"];
            }
        }
        if (array_key_exists("ZoneTtl",$param) and $param["ZoneTtl"] !== null) {
            if(is_bool($param["ZoneTtl"])){
                $this->RequestParams["ZoneTtl"] = $param["ZoneTtl"] ? "true" : "false";
            } else {
                $this->RequestParams["ZoneTtl"] = $param["ZoneTtl"];
            }
        }
        if (array_key_exists("ProxyPattern",$param) and $param["ProxyPattern"] !== null) {
            if(is_bool($param["ProxyPattern"])){
                $this->RequestParams["ProxyPattern"] = $param["ProxyPattern"] ? "true" : "false";
            } else {
                $this->RequestParams["ProxyPattern"] = $param["ProxyPattern"];
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