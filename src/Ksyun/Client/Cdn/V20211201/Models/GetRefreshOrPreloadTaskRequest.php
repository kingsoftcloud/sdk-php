<?php
namespace  Ksyun\Client\Cdn\V20211201\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class GetRefreshOrPreloadTaskRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "StartTime" => null,
         /**String**/
        "EndTime" => null,
         /**String**/
        "TaskId" => null,
         /**String**/
        "DomainName" => null,
         /**Array**/
        "Urls" => null,
         /**String**/
        "Type" => null,
         /**String**/
        "SubType" => null,
         /**Long**/
        "PageSize" => null,
         /**Long**/
        "PageNumber" => null,
    ];


    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/json");
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            if(is_bool($param["TaskId"])){
                $this->RequestParams["TaskId"] = $param["TaskId"] ? "true" : "false";
            } else {
                $this->RequestParams["TaskId"] = $param["TaskId"];
            }
        }
        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            if(is_bool($param["DomainName"])){
                $this->RequestParams["DomainName"] = $param["DomainName"] ? "true" : "false";
            } else {
                $this->RequestParams["DomainName"] = $param["DomainName"];
            }
        }
        if (array_key_exists("Urls",$param) and $param["Urls"] !== null) {
            if(is_bool($param["Urls"])){
                $this->RequestParams["Urls"] = $param["Urls"] ? "true" : "false";
            } else {
                $this->RequestParams["Urls"] = $param["Urls"];
            }
        }
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            if(is_bool($param["Type"])){
                $this->RequestParams["Type"] = $param["Type"] ? "true" : "false";
            } else {
                $this->RequestParams["Type"] = $param["Type"];
            }
        }
        if (array_key_exists("SubType",$param) and $param["SubType"] !== null) {
            if(is_bool($param["SubType"])){
                $this->RequestParams["SubType"] = $param["SubType"] ? "true" : "false";
            } else {
                $this->RequestParams["SubType"] = $param["SubType"];
            }
        }
        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            if(is_bool($param["PageSize"])){
                $this->RequestParams["PageSize"] = $param["PageSize"] ? "true" : "false";
            } else {
                $this->RequestParams["PageSize"] = $param["PageSize"];
            }
        }
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            if(is_bool($param["PageNumber"])){
                $this->RequestParams["PageNumber"] = $param["PageNumber"] ? "true" : "false";
            } else {
                $this->RequestParams["PageNumber"] = $param["PageNumber"];
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