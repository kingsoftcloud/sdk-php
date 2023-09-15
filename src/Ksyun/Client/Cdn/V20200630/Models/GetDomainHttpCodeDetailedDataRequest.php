<?php
namespace  Ksyun\Client\Cdn\V20200630\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class GetDomainHttpCodeDetailedDataRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "StartTime" => null,
         /**String**/
        "EndTime" => null,
         /**String**/
        "Interval" => null,
         /**String**/
        "CdnType" => null,
         /**String**/
        "Domains" => null,
         /**String**/
        "Areas" => null,
         /**String**/
        "Provinces" => null,
         /**String**/
        "Isps" => null,
         /**String**/
        "IpType" => null,
         /**String**/
        "Schema" => null,
         /**String**/
        "CodeType" => null,
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
        if (array_key_exists("Areas",$param) and $param["Areas"] !== null) {
            if(is_bool($param["Areas"])){
                $this->RequestParams["Areas"] = $param["Areas"] ? "true" : "false";
            } else {
                $this->RequestParams["Areas"] = $param["Areas"];
            }
        }
        if (array_key_exists("Provinces",$param) and $param["Provinces"] !== null) {
            if(is_bool($param["Provinces"])){
                $this->RequestParams["Provinces"] = $param["Provinces"] ? "true" : "false";
            } else {
                $this->RequestParams["Provinces"] = $param["Provinces"];
            }
        }
        if (array_key_exists("Isps",$param) and $param["Isps"] !== null) {
            if(is_bool($param["Isps"])){
                $this->RequestParams["Isps"] = $param["Isps"] ? "true" : "false";
            } else {
                $this->RequestParams["Isps"] = $param["Isps"];
            }
        }
        if (array_key_exists("IpType",$param) and $param["IpType"] !== null) {
            if(is_bool($param["IpType"])){
                $this->RequestParams["IpType"] = $param["IpType"] ? "true" : "false";
            } else {
                $this->RequestParams["IpType"] = $param["IpType"];
            }
        }
        if (array_key_exists("Schema",$param) and $param["Schema"] !== null) {
            if(is_bool($param["Schema"])){
                $this->RequestParams["Schema"] = $param["Schema"] ? "true" : "false";
            } else {
                $this->RequestParams["Schema"] = $param["Schema"];
            }
        }
        if (array_key_exists("CodeType",$param) and $param["CodeType"] !== null) {
            if(is_bool($param["CodeType"])){
                $this->RequestParams["CodeType"] = $param["CodeType"] ? "true" : "false";
            } else {
                $this->RequestParams["CodeType"] = $param["CodeType"];
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