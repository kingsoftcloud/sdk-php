<?php
namespace  Ksyun\Client\Cdn\V3\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class SetDomainLogServiceRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ActionType" => null,
         /**String**/
        "DomainIds" => null,
         /**String**/
        "Granularity" => null,
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
        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            if(is_bool($param["ActionType"])){
                $this->RequestParams["ActionType"] = $param["ActionType"] ? "true" : "false";
            } else {
                $this->RequestParams["ActionType"] = $param["ActionType"];
            }
        }
        if (array_key_exists("DomainIds",$param) and $param["DomainIds"] !== null) {
            if(is_bool($param["DomainIds"])){
                $this->RequestParams["DomainIds"] = $param["DomainIds"] ? "true" : "false";
            } else {
                $this->RequestParams["DomainIds"] = $param["DomainIds"];
            }
        }
        if (array_key_exists("Granularity",$param) and $param["Granularity"] !== null) {
            if(is_bool($param["Granularity"])){
                $this->RequestParams["Granularity"] = $param["Granularity"] ? "true" : "false";
            } else {
                $this->RequestParams["Granularity"] = $param["Granularity"];
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