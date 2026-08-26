<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateNetworkPathRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "SourceId" => null,
         /**String**/
        "SourceType" => null,
         /**String**/
        "SourceIp" => null,
         /**String**/
        "PathName" => null,
         /**String**/
        "TargetId" => null,
         /**String**/
        "TargetType" => null,
         /**String**/
        "TargetIp" => null,
         /**Int**/
        "PublicPort" => null,
         /**String**/
        "Protocol" => null,
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
        if (array_key_exists("SourceId",$param) and $param["SourceId"] !== null) {
            if(is_bool($param["SourceId"])){
                $this->RequestParams["SourceId"] = $param["SourceId"] ? "true" : "false";
            } else {
                $this->RequestParams["SourceId"] = $param["SourceId"];
            }
        }
        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            if(is_bool($param["SourceType"])){
                $this->RequestParams["SourceType"] = $param["SourceType"] ? "true" : "false";
            } else {
                $this->RequestParams["SourceType"] = $param["SourceType"];
            }
        }
        if (array_key_exists("SourceIp",$param) and $param["SourceIp"] !== null) {
            if(is_bool($param["SourceIp"])){
                $this->RequestParams["SourceIp"] = $param["SourceIp"] ? "true" : "false";
            } else {
                $this->RequestParams["SourceIp"] = $param["SourceIp"];
            }
        }
        if (array_key_exists("PathName",$param) and $param["PathName"] !== null) {
            if(is_bool($param["PathName"])){
                $this->RequestParams["PathName"] = $param["PathName"] ? "true" : "false";
            } else {
                $this->RequestParams["PathName"] = $param["PathName"];
            }
        }
        if (array_key_exists("TargetId",$param) and $param["TargetId"] !== null) {
            if(is_bool($param["TargetId"])){
                $this->RequestParams["TargetId"] = $param["TargetId"] ? "true" : "false";
            } else {
                $this->RequestParams["TargetId"] = $param["TargetId"];
            }
        }
        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            if(is_bool($param["TargetType"])){
                $this->RequestParams["TargetType"] = $param["TargetType"] ? "true" : "false";
            } else {
                $this->RequestParams["TargetType"] = $param["TargetType"];
            }
        }
        if (array_key_exists("TargetIp",$param) and $param["TargetIp"] !== null) {
            if(is_bool($param["TargetIp"])){
                $this->RequestParams["TargetIp"] = $param["TargetIp"] ? "true" : "false";
            } else {
                $this->RequestParams["TargetIp"] = $param["TargetIp"];
            }
        }
        if (array_key_exists("PublicPort",$param) and $param["PublicPort"] !== null) {
            if(is_bool($param["PublicPort"])){
                $this->RequestParams["PublicPort"] = $param["PublicPort"] ? "true" : "false";
            } else {
                $this->RequestParams["PublicPort"] = $param["PublicPort"];
            }
        }
        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            if(is_bool($param["Protocol"])){
                $this->RequestParams["Protocol"] = $param["Protocol"] ? "true" : "false";
            } else {
                $this->RequestParams["Protocol"] = $param["Protocol"];
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