<?php
namespace  Ksyun\Client\Dts\V20180108\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class SchemaStructRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "SourceInstanceId" => null,
         /**String**/
        "SourceType" => null,
         /**String**/
        "SourceUsername" => null,
         /**String**/
        "SourcePassword" => null,
         /**String**/
        "SourceRegion" => null,
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
        if (array_key_exists("SourceInstanceId",$param) and $param["SourceInstanceId"] !== null) {
            if(is_bool($param["SourceInstanceId"])){
                $this->RequestParams["SourceInstanceId"] = $param["SourceInstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["SourceInstanceId"] = $param["SourceInstanceId"];
            }
        }
        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            if(is_bool($param["SourceType"])){
                $this->RequestParams["SourceType"] = $param["SourceType"] ? "true" : "false";
            } else {
                $this->RequestParams["SourceType"] = $param["SourceType"];
            }
        }
        if (array_key_exists("SourceUsername",$param) and $param["SourceUsername"] !== null) {
            if(is_bool($param["SourceUsername"])){
                $this->RequestParams["SourceUsername"] = $param["SourceUsername"] ? "true" : "false";
            } else {
                $this->RequestParams["SourceUsername"] = $param["SourceUsername"];
            }
        }
        if (array_key_exists("SourcePassword",$param) and $param["SourcePassword"] !== null) {
            if(is_bool($param["SourcePassword"])){
                $this->RequestParams["SourcePassword"] = $param["SourcePassword"] ? "true" : "false";
            } else {
                $this->RequestParams["SourcePassword"] = $param["SourcePassword"];
            }
        }
        if (array_key_exists("SourceRegion",$param) and $param["SourceRegion"] !== null) {
            if(is_bool($param["SourceRegion"])){
                $this->RequestParams["SourceRegion"] = $param["SourceRegion"] ? "true" : "false";
            } else {
                $this->RequestParams["SourceRegion"] = $param["SourceRegion"];
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