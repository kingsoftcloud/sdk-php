<?php
namespace  Ksyun\Client\Dts\V20180108\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreatePrecheckRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "SourceType" => null,
         /**String**/
        "TargetType" => null,
         /**String**/
        "TargetRegion" => null,
         /**String**/
        "SourceRegion" => null,
         /**String**/
        "DbSchema" => null,
         /**String**/
        "SubTasks" => null,
         /**String**/
        "SourceInstanceId" => null,
         /**String**/
        "TargetInstanceId" => null,
         /**String**/
        "SourceUsername" => null,
         /**String**/
        "SourcePassword" => null,
         /**String**/
        "Type" => null,
    ];

     /**特殊参数类型:Filter**/
    public $DTSParameter = [];
      /**特殊参数类型:Filter**/
    public $SourceUser = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/json");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            if(is_bool($param["SourceType"])){
                $this->RequestParams["SourceType"] = $param["SourceType"] ? "true" : "false";
            } else {
                $this->RequestParams["SourceType"] = $param["SourceType"];
            }
        }
        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            if(is_bool($param["TargetType"])){
                $this->RequestParams["TargetType"] = $param["TargetType"] ? "true" : "false";
            } else {
                $this->RequestParams["TargetType"] = $param["TargetType"];
            }
        }
        if (array_key_exists("TargetRegion",$param) and $param["TargetRegion"] !== null) {
            if(is_bool($param["TargetRegion"])){
                $this->RequestParams["TargetRegion"] = $param["TargetRegion"] ? "true" : "false";
            } else {
                $this->RequestParams["TargetRegion"] = $param["TargetRegion"];
            }
        }
        if (array_key_exists("SourceRegion",$param) and $param["SourceRegion"] !== null) {
            if(is_bool($param["SourceRegion"])){
                $this->RequestParams["SourceRegion"] = $param["SourceRegion"] ? "true" : "false";
            } else {
                $this->RequestParams["SourceRegion"] = $param["SourceRegion"];
            }
        }
        if (array_key_exists("DbSchema",$param) and $param["DbSchema"] !== null) {
            if(is_bool($param["DbSchema"])){
                $this->RequestParams["DbSchema"] = $param["DbSchema"] ? "true" : "false";
            } else {
                $this->RequestParams["DbSchema"] = $param["DbSchema"];
            }
        }
        if (array_key_exists("SubTasks",$param) and $param["SubTasks"] !== null) {
            if(is_bool($param["SubTasks"])){
                $this->RequestParams["SubTasks"] = $param["SubTasks"] ? "true" : "false";
            } else {
                $this->RequestParams["SubTasks"] = $param["SubTasks"];
            }
        }
        if (array_key_exists("SourceInstanceId",$param) and $param["SourceInstanceId"] !== null) {
            if(is_bool($param["SourceInstanceId"])){
                $this->RequestParams["SourceInstanceId"] = $param["SourceInstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["SourceInstanceId"] = $param["SourceInstanceId"];
            }
        }
        if (array_key_exists("TargetInstanceId",$param) and $param["TargetInstanceId"] !== null) {
            if(is_bool($param["TargetInstanceId"])){
                $this->RequestParams["TargetInstanceId"] = $param["TargetInstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["TargetInstanceId"] = $param["TargetInstanceId"];
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            if(is_bool($param["Type"])){
                $this->RequestParams["Type"] = $param["Type"] ? "true" : "false";
            } else {
                $this->RequestParams["Type"] = $param["Type"];
            }
        }
        if (array_key_exists("DTSParameter",$param) and $param["DTSParameter"] !== null) {
            $res = $this->formatFilterParams("DTSParameter",$param["DTSParameter"]);
            $this->_unserialize("DTSParameter",$res);
        }
        if (array_key_exists("SourceUser",$param) and $param["SourceUser"] !== null) {
            $res = $this->formatFilterParams("SourceUser",$param["SourceUser"]);
            $this->_unserialize("SourceUser",$res);
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