<?php
namespace  Ksyun\Client\Monitor\V20250101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeSystemEventAttributesRequest extends BaseModel
{
    public $RequestParams = [
         /**Int**/
        "StartTime" => null,
         /**Int**/
        "EndTime" => null,
         /**String**/
        "Namespace" => null,
         /**String**/
        "EventType" => null,
         /**String**/
        "EventName" => null,
         /**String**/
        "Level" => null,
         /**String**/
        "Status" => null,
         /**String**/
        "SearchKeywords" => null,
         /**Int**/
        "PageIndex" => null,
         /**Int**/
        "PageSize" => null,
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            if(is_bool($param["StartTime"])){
                $this->RequestParams["StartTime"] = $param["StartTime"] ? "true" : "false";
            } else {
                $this->RequestParams["StartTime"] = $param["StartTime"];
            }
        }
        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            if(is_bool($param["EndTime"])){
                $this->RequestParams["EndTime"] = $param["EndTime"] ? "true" : "false";
            } else {
                $this->RequestParams["EndTime"] = $param["EndTime"];
            }
        }
        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            if(is_bool($param["Namespace"])){
                $this->RequestParams["Namespace"] = $param["Namespace"] ? "true" : "false";
            } else {
                $this->RequestParams["Namespace"] = $param["Namespace"];
            }
        }
        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            if(is_bool($param["EventType"])){
                $this->RequestParams["EventType"] = $param["EventType"] ? "true" : "false";
            } else {
                $this->RequestParams["EventType"] = $param["EventType"];
            }
        }
        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            if(is_bool($param["EventName"])){
                $this->RequestParams["EventName"] = $param["EventName"] ? "true" : "false";
            } else {
                $this->RequestParams["EventName"] = $param["EventName"];
            }
        }
        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            if(is_bool($param["Level"])){
                $this->RequestParams["Level"] = $param["Level"] ? "true" : "false";
            } else {
                $this->RequestParams["Level"] = $param["Level"];
            }
        }
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            if(is_bool($param["Status"])){
                $this->RequestParams["Status"] = $param["Status"] ? "true" : "false";
            } else {
                $this->RequestParams["Status"] = $param["Status"];
            }
        }
        if (array_key_exists("SearchKeywords",$param) and $param["SearchKeywords"] !== null) {
            if(is_bool($param["SearchKeywords"])){
                $this->RequestParams["SearchKeywords"] = $param["SearchKeywords"] ? "true" : "false";
            } else {
                $this->RequestParams["SearchKeywords"] = $param["SearchKeywords"];
            }
        }
        if (array_key_exists("PageIndex",$param) and $param["PageIndex"] !== null) {
            if(is_bool($param["PageIndex"])){
                $this->RequestParams["PageIndex"] = $param["PageIndex"] ? "true" : "false";
            } else {
                $this->RequestParams["PageIndex"] = $param["PageIndex"];
            }
        }
        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            if(is_bool($param["PageSize"])){
                $this->RequestParams["PageSize"] = $param["PageSize"] ? "true" : "false";
            } else {
                $this->RequestParams["PageSize"] = $param["PageSize"];
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