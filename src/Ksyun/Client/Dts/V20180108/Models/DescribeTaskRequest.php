<?php
namespace  Ksyun\Client\Dts\V20180108\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeTaskRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "TaskId" => null,
         /**String**/
        "TargetType" => null,
         /**String**/
        "TaskType" => null,
         /**String**/
        "TaskName" => null,
         /**String**/
        "TargetInstanceId" => null,
         /**String**/
        "SourceInstanceId" => null,
         /**String**/
        "OrderByType" => null,
         /**Int**/
        "Marker" => null,
         /**Int**/
        "MaxRecords" => null,
    ];

     /**特殊参数类型:Filter**/
    public $TaskStatus = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/json");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            if(is_bool($param["TaskId"])){
                $this->RequestParams["TaskId"] = $param["TaskId"] ? "true" : "false";
            } else {
                $this->RequestParams["TaskId"] = $param["TaskId"];
            }
        }
        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            if(is_bool($param["TargetType"])){
                $this->RequestParams["TargetType"] = $param["TargetType"] ? "true" : "false";
            } else {
                $this->RequestParams["TargetType"] = $param["TargetType"];
            }
        }
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            if(is_bool($param["TaskType"])){
                $this->RequestParams["TaskType"] = $param["TaskType"] ? "true" : "false";
            } else {
                $this->RequestParams["TaskType"] = $param["TaskType"];
            }
        }
        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $res = $this->formatFilterParams("TaskStatus",$param["TaskStatus"]);
            $this->_unserialize("TaskStatus",$res);
        }
        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            if(is_bool($param["TaskName"])){
                $this->RequestParams["TaskName"] = $param["TaskName"] ? "true" : "false";
            } else {
                $this->RequestParams["TaskName"] = $param["TaskName"];
            }
        }
        if (array_key_exists("TargetInstanceId",$param) and $param["TargetInstanceId"] !== null) {
            if(is_bool($param["TargetInstanceId"])){
                $this->RequestParams["TargetInstanceId"] = $param["TargetInstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["TargetInstanceId"] = $param["TargetInstanceId"];
            }
        }
        if (array_key_exists("SourceInstanceId",$param) and $param["SourceInstanceId"] !== null) {
            if(is_bool($param["SourceInstanceId"])){
                $this->RequestParams["SourceInstanceId"] = $param["SourceInstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["SourceInstanceId"] = $param["SourceInstanceId"];
            }
        }
        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            if(is_bool($param["OrderByType"])){
                $this->RequestParams["OrderByType"] = $param["OrderByType"] ? "true" : "false";
            } else {
                $this->RequestParams["OrderByType"] = $param["OrderByType"];
            }
        }
        if (array_key_exists("Marker",$param) and $param["Marker"] !== null) {
            if(is_bool($param["Marker"])){
                $this->RequestParams["Marker"] = $param["Marker"] ? "true" : "false";
            } else {
                $this->RequestParams["Marker"] = $param["Marker"];
            }
        }
        if (array_key_exists("MaxRecords",$param) and $param["MaxRecords"] !== null) {
            if(is_bool($param["MaxRecords"])){
                $this->RequestParams["MaxRecords"] = $param["MaxRecords"] ? "true" : "false";
            } else {
                $this->RequestParams["MaxRecords"] = $param["MaxRecords"];
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