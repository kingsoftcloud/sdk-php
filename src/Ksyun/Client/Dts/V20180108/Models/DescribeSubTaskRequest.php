<?php
namespace  Ksyun\Client\Dts\V20180108\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeSubTaskRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "TaskId" => null,
         /**String**/
        "SubTaskId" => null,
         /**String**/
        "SubTaskName" => null,
         /**String**/
        "OrderByType" => null,
         /**String**/
        "ObjectStatus" => null,
         /**Int**/
        "Marker" => null,
         /**Int**/
        "MaxRecords" => null,
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            if(is_bool($param["TaskId"])){
                $this->RequestParams["TaskId"] = $param["TaskId"] ? "true" : "false";
            } else {
                $this->RequestParams["TaskId"] = $param["TaskId"];
            }
        }
        if (array_key_exists("SubTaskId",$param) and $param["SubTaskId"] !== null) {
            if(is_bool($param["SubTaskId"])){
                $this->RequestParams["SubTaskId"] = $param["SubTaskId"] ? "true" : "false";
            } else {
                $this->RequestParams["SubTaskId"] = $param["SubTaskId"];
            }
        }
        if (array_key_exists("SubTaskName",$param) and $param["SubTaskName"] !== null) {
            if(is_bool($param["SubTaskName"])){
                $this->RequestParams["SubTaskName"] = $param["SubTaskName"] ? "true" : "false";
            } else {
                $this->RequestParams["SubTaskName"] = $param["SubTaskName"];
            }
        }
        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            if(is_bool($param["OrderByType"])){
                $this->RequestParams["OrderByType"] = $param["OrderByType"] ? "true" : "false";
            } else {
                $this->RequestParams["OrderByType"] = $param["OrderByType"];
            }
        }
        if (array_key_exists("ObjectStatus",$param) and $param["ObjectStatus"] !== null) {
            if(is_bool($param["ObjectStatus"])){
                $this->RequestParams["ObjectStatus"] = $param["ObjectStatus"] ? "true" : "false";
            } else {
                $this->RequestParams["ObjectStatus"] = $param["ObjectStatus"];
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