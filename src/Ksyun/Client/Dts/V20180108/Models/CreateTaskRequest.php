<?php
namespace  Ksyun\Client\Dts\V20180108\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateTaskRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "TaskName" => null,
         /**String**/
        "SubTask" => null,
         /**String**/
        "TaskType" => null,
         /**String**/
        "PrecheckId" => null,
         /**Int**/
        "BillType" => null,
         /**Int**/
        "Duration" => null,
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
        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            if(is_bool($param["TaskName"])){
                $this->RequestParams["TaskName"] = $param["TaskName"] ? "true" : "false";
            } else {
                $this->RequestParams["TaskName"] = $param["TaskName"];
            }
        }
        if (array_key_exists("SubTask",$param) and $param["SubTask"] !== null) {
            if(is_bool($param["SubTask"])){
                $this->RequestParams["SubTask"] = $param["SubTask"] ? "true" : "false";
            } else {
                $this->RequestParams["SubTask"] = $param["SubTask"];
            }
        }
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            if(is_bool($param["TaskType"])){
                $this->RequestParams["TaskType"] = $param["TaskType"] ? "true" : "false";
            } else {
                $this->RequestParams["TaskType"] = $param["TaskType"];
            }
        }
        if (array_key_exists("PrecheckId",$param) and $param["PrecheckId"] !== null) {
            if(is_bool($param["PrecheckId"])){
                $this->RequestParams["PrecheckId"] = $param["PrecheckId"] ? "true" : "false";
            } else {
                $this->RequestParams["PrecheckId"] = $param["PrecheckId"];
            }
        }
        if (array_key_exists("BillType",$param) and $param["BillType"] !== null) {
            if(is_bool($param["BillType"])){
                $this->RequestParams["BillType"] = $param["BillType"] ? "true" : "false";
            } else {
                $this->RequestParams["BillType"] = $param["BillType"];
            }
        }
        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            if(is_bool($param["Duration"])){
                $this->RequestParams["Duration"] = $param["Duration"] ? "true" : "false";
            } else {
                $this->RequestParams["Duration"] = $param["Duration"];
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