<?php
namespace  Ksyun\Client\Cdn\V3\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class SetIgnoreQueryStringConfigRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DomainId" => null,
         /**String**/
        "Enable" => null,
         /**String**/
        "HashKeyArgs" => null,
         /**String**/
        "Type" => null,
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
        if (array_key_exists("HashKeyArgs",$param) and $param["HashKeyArgs"] !== null) {
            if(is_bool($param["HashKeyArgs"])){
                $this->RequestParams["HashKeyArgs"] = $param["HashKeyArgs"] ? "true" : "false";
            } else {
                $this->RequestParams["HashKeyArgs"] = $param["HashKeyArgs"];
            }
        }
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            if(is_bool($param["Type"])){
                $this->RequestParams["Type"] = $param["Type"] ? "true" : "false";
            } else {
                $this->RequestParams["Type"] = $param["Type"];
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