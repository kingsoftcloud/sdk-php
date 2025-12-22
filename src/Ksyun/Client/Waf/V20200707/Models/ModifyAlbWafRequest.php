<?php
namespace  Ksyun\Client\Waf\V20200707\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyAlbWafRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "WafType" => null,
         /**Int**/
        "DomainBag" => null,
         /**Int**/
        "AlbNumber" => null,
         /**Int**/
        "QpsBag" => null,
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
        if (array_key_exists("WafType",$param) and $param["WafType"] !== null) {
            if(is_bool($param["WafType"])){
                $this->RequestParams["WafType"] = $param["WafType"] ? "true" : "false";
            } else {
                $this->RequestParams["WafType"] = $param["WafType"];
            }
        }
        if (array_key_exists("DomainBag",$param) and $param["DomainBag"] !== null) {
            if(is_bool($param["DomainBag"])){
                $this->RequestParams["DomainBag"] = $param["DomainBag"] ? "true" : "false";
            } else {
                $this->RequestParams["DomainBag"] = $param["DomainBag"];
            }
        }
        if (array_key_exists("AlbNumber",$param) and $param["AlbNumber"] !== null) {
            if(is_bool($param["AlbNumber"])){
                $this->RequestParams["AlbNumber"] = $param["AlbNumber"] ? "true" : "false";
            } else {
                $this->RequestParams["AlbNumber"] = $param["AlbNumber"];
            }
        }
        if (array_key_exists("QpsBag",$param) and $param["QpsBag"] !== null) {
            if(is_bool($param["QpsBag"])){
                $this->RequestParams["QpsBag"] = $param["QpsBag"] ? "true" : "false";
            } else {
                $this->RequestParams["QpsBag"] = $param["QpsBag"];
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