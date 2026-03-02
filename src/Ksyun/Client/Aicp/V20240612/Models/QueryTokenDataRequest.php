<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class QueryTokenDataRequest extends BaseModel
{
    public $RequestParams = [
         /**Long**/
        "StartTimestamp" => null,
         /**Long**/
        "EndTimestamp" => null,
         /**String**/
        "LastKey" => null,
         /**Int**/
        "MaxResults" => null,
         /**String**/
        "ModelKeyword" => null,
         /**String**/
        "Keyword" => null,
         /**String**/
        "GroupBy" => null,
         /**String**/
        "ReasoningType" => null,
         /**Int**/
        "Marker" => null,
         /**String**/
        "ModelName" => null,
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
        if (array_key_exists("StartTimestamp",$param) and $param["StartTimestamp"] !== null) {
            if(is_bool($param["StartTimestamp"])){
                $this->RequestParams["StartTimestamp"] = $param["StartTimestamp"] ? "true" : "false";
            } else {
                $this->RequestParams["StartTimestamp"] = $param["StartTimestamp"];
            }
        }
        if (array_key_exists("EndTimestamp",$param) and $param["EndTimestamp"] !== null) {
            if(is_bool($param["EndTimestamp"])){
                $this->RequestParams["EndTimestamp"] = $param["EndTimestamp"] ? "true" : "false";
            } else {
                $this->RequestParams["EndTimestamp"] = $param["EndTimestamp"];
            }
        }
        if (array_key_exists("LastKey",$param) and $param["LastKey"] !== null) {
            if(is_bool($param["LastKey"])){
                $this->RequestParams["LastKey"] = $param["LastKey"] ? "true" : "false";
            } else {
                $this->RequestParams["LastKey"] = $param["LastKey"];
            }
        }
        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            if(is_bool($param["MaxResults"])){
                $this->RequestParams["MaxResults"] = $param["MaxResults"] ? "true" : "false";
            } else {
                $this->RequestParams["MaxResults"] = $param["MaxResults"];
            }
        }
        if (array_key_exists("ModelKeyword",$param) and $param["ModelKeyword"] !== null) {
            if(is_bool($param["ModelKeyword"])){
                $this->RequestParams["ModelKeyword"] = $param["ModelKeyword"] ? "true" : "false";
            } else {
                $this->RequestParams["ModelKeyword"] = $param["ModelKeyword"];
            }
        }
        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            if(is_bool($param["Keyword"])){
                $this->RequestParams["Keyword"] = $param["Keyword"] ? "true" : "false";
            } else {
                $this->RequestParams["Keyword"] = $param["Keyword"];
            }
        }
        if (array_key_exists("GroupBy",$param) and $param["GroupBy"] !== null) {
            if(is_bool($param["GroupBy"])){
                $this->RequestParams["GroupBy"] = $param["GroupBy"] ? "true" : "false";
            } else {
                $this->RequestParams["GroupBy"] = $param["GroupBy"];
            }
        }
        if (array_key_exists("ReasoningType",$param) and $param["ReasoningType"] !== null) {
            if(is_bool($param["ReasoningType"])){
                $this->RequestParams["ReasoningType"] = $param["ReasoningType"] ? "true" : "false";
            } else {
                $this->RequestParams["ReasoningType"] = $param["ReasoningType"];
            }
        }
        if (array_key_exists("Marker",$param) and $param["Marker"] !== null) {
            if(is_bool($param["Marker"])){
                $this->RequestParams["Marker"] = $param["Marker"] ? "true" : "false";
            } else {
                $this->RequestParams["Marker"] = $param["Marker"];
            }
        }
        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            if(is_bool($param["ModelName"])){
                $this->RequestParams["ModelName"] = $param["ModelName"] ? "true" : "false";
            } else {
                $this->RequestParams["ModelName"] = $param["ModelName"];
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