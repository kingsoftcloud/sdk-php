<?php
namespace  Ksyun\Client\Cdn\V3\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class GetPvDataRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "StartTime" => null,
         /**String**/
        "EndTime" => null,
         /**String**/
        "CdnType" => null,
         /**String**/
        "DomainIds" => null,
         /**String**/
        "Regions" => null,
         /**Int**/
        "ResultType" => null,
         /**Int**/
        "Granularity" => null,
         /**String**/
        "DataType" => null,
         /**String**/
        "ProtocolType" => null,
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
        if (array_key_exists("CdnType",$param) and $param["CdnType"] !== null) {
            if(is_bool($param["CdnType"])){
                $this->RequestParams["CdnType"] = $param["CdnType"] ? "true" : "false";
            } else {
                $this->RequestParams["CdnType"] = $param["CdnType"];
            }
        }
        if (array_key_exists("DomainIds",$param) and $param["DomainIds"] !== null) {
            if(is_bool($param["DomainIds"])){
                $this->RequestParams["DomainIds"] = $param["DomainIds"] ? "true" : "false";
            } else {
                $this->RequestParams["DomainIds"] = $param["DomainIds"];
            }
        }
        if (array_key_exists("Regions",$param) and $param["Regions"] !== null) {
            if(is_bool($param["Regions"])){
                $this->RequestParams["Regions"] = $param["Regions"] ? "true" : "false";
            } else {
                $this->RequestParams["Regions"] = $param["Regions"];
            }
        }
        if (array_key_exists("ResultType",$param) and $param["ResultType"] !== null) {
            if(is_bool($param["ResultType"])){
                $this->RequestParams["ResultType"] = $param["ResultType"] ? "true" : "false";
            } else {
                $this->RequestParams["ResultType"] = $param["ResultType"];
            }
        }
        if (array_key_exists("Granularity",$param) and $param["Granularity"] !== null) {
            if(is_bool($param["Granularity"])){
                $this->RequestParams["Granularity"] = $param["Granularity"] ? "true" : "false";
            } else {
                $this->RequestParams["Granularity"] = $param["Granularity"];
            }
        }
        if (array_key_exists("DataType",$param) and $param["DataType"] !== null) {
            if(is_bool($param["DataType"])){
                $this->RequestParams["DataType"] = $param["DataType"] ? "true" : "false";
            } else {
                $this->RequestParams["DataType"] = $param["DataType"];
            }
        }
        if (array_key_exists("ProtocolType",$param) and $param["ProtocolType"] !== null) {
            if(is_bool($param["ProtocolType"])){
                $this->RequestParams["ProtocolType"] = $param["ProtocolType"] ? "true" : "false";
            } else {
                $this->RequestParams["ProtocolType"] = $param["ProtocolType"];
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