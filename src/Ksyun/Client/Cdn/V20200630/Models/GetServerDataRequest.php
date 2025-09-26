<?php
namespace  Ksyun\Client\Cdn\V20200630\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class GetServerDataRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "StartTime" => null,
         /**String**/
        "EndTime" => null,
         /**String**/
        "Metric" => null,
         /**String**/
        "DataType" => null,
         /**String**/
        "Interval" => null,
         /**String**/
        "CdnType" => null,
         /**String**/
        "Domains" => null,
         /**String**/
        "Regions" => null,
         /**String**/
        "Schema" => null,
         /**String**/
        "ResultType" => null,
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
        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            if(is_bool($param["Metric"])){
                $this->RequestParams["Metric"] = $param["Metric"] ? "true" : "false";
            } else {
                $this->RequestParams["Metric"] = $param["Metric"];
            }
        }
        if (array_key_exists("DataType",$param) and $param["DataType"] !== null) {
            if(is_bool($param["DataType"])){
                $this->RequestParams["DataType"] = $param["DataType"] ? "true" : "false";
            } else {
                $this->RequestParams["DataType"] = $param["DataType"];
            }
        }
        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            if(is_bool($param["Interval"])){
                $this->RequestParams["Interval"] = $param["Interval"] ? "true" : "false";
            } else {
                $this->RequestParams["Interval"] = $param["Interval"];
            }
        }
        if (array_key_exists("CdnType",$param) and $param["CdnType"] !== null) {
            if(is_bool($param["CdnType"])){
                $this->RequestParams["CdnType"] = $param["CdnType"] ? "true" : "false";
            } else {
                $this->RequestParams["CdnType"] = $param["CdnType"];
            }
        }
        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            if(is_bool($param["Domains"])){
                $this->RequestParams["Domains"] = $param["Domains"] ? "true" : "false";
            } else {
                $this->RequestParams["Domains"] = $param["Domains"];
            }
        }
        if (array_key_exists("Regions",$param) and $param["Regions"] !== null) {
            if(is_bool($param["Regions"])){
                $this->RequestParams["Regions"] = $param["Regions"] ? "true" : "false";
            } else {
                $this->RequestParams["Regions"] = $param["Regions"];
            }
        }
        if (array_key_exists("Schema",$param) and $param["Schema"] !== null) {
            if(is_bool($param["Schema"])){
                $this->RequestParams["Schema"] = $param["Schema"] ? "true" : "false";
            } else {
                $this->RequestParams["Schema"] = $param["Schema"];
            }
        }
        if (array_key_exists("ResultType",$param) and $param["ResultType"] !== null) {
            if(is_bool($param["ResultType"])){
                $this->RequestParams["ResultType"] = $param["ResultType"] ? "true" : "false";
            } else {
                $this->RequestParams["ResultType"] = $param["ResultType"];
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