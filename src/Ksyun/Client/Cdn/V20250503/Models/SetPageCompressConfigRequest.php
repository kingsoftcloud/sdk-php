<?php
namespace  Ksyun\Client\Cdn\V20250503\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class SetPageCompressConfigRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DomainId" => null,
         /**String**/
        "Enable" => null,
         /**String**/
        "CompressType" => null,
         /**String**/
        "FileType" => null,
         /**String**/
        "FileSize" => null,
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
        if (array_key_exists("CompressType",$param) and $param["CompressType"] !== null) {
            if(is_bool($param["CompressType"])){
                $this->RequestParams["CompressType"] = $param["CompressType"] ? "true" : "false";
            } else {
                $this->RequestParams["CompressType"] = $param["CompressType"];
            }
        }
        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            if(is_bool($param["FileType"])){
                $this->RequestParams["FileType"] = $param["FileType"] ? "true" : "false";
            } else {
                $this->RequestParams["FileType"] = $param["FileType"];
            }
        }
        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            if(is_bool($param["FileSize"])){
                $this->RequestParams["FileSize"] = $param["FileSize"] ? "true" : "false";
            } else {
                $this->RequestParams["FileSize"] = $param["FileSize"];
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