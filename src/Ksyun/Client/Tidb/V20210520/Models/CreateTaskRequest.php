<?php
namespace  Ksyun\Client\Tidb\V20210520\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateTaskRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "InstanceId" => null,
         /**String**/
        "TaskName" => null,
         /**String**/
        "TargetId" => null,
         /**String**/
        "VpcId" => null,
         /**String**/
        "VnetId" => null,
         /**String**/
        "TargetType" => null,
         /**Object**/
        "TargetMySQL" => null,
         /**Object**/
        "TargetKafka" => null,
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            if(is_bool($param["InstanceId"])){
                $this->RequestParams["InstanceId"] = $param["InstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceId"] = $param["InstanceId"];
            }
        }
        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            if(is_bool($param["TaskName"])){
                $this->RequestParams["TaskName"] = $param["TaskName"] ? "true" : "false";
            } else {
                $this->RequestParams["TaskName"] = $param["TaskName"];
            }
        }
        if (array_key_exists("TargetId",$param) and $param["TargetId"] !== null) {
            if(is_bool($param["TargetId"])){
                $this->RequestParams["TargetId"] = $param["TargetId"] ? "true" : "false";
            } else {
                $this->RequestParams["TargetId"] = $param["TargetId"];
            }
        }
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            if(is_bool($param["VpcId"])){
                $this->RequestParams["VpcId"] = $param["VpcId"] ? "true" : "false";
            } else {
                $this->RequestParams["VpcId"] = $param["VpcId"];
            }
        }
        if (array_key_exists("VnetId",$param) and $param["VnetId"] !== null) {
            if(is_bool($param["VnetId"])){
                $this->RequestParams["VnetId"] = $param["VnetId"] ? "true" : "false";
            } else {
                $this->RequestParams["VnetId"] = $param["VnetId"];
            }
        }
        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            if(is_bool($param["TargetType"])){
                $this->RequestParams["TargetType"] = $param["TargetType"] ? "true" : "false";
            } else {
                $this->RequestParams["TargetType"] = $param["TargetType"];
            }
        }
        if (array_key_exists("TargetMySQL",$param) and $param["TargetMySQL"] !== null) {
            if(is_bool($param["TargetMySQL"])){
                $this->RequestParams["TargetMySQL"] = $param["TargetMySQL"] ? "true" : "false";
            } else {
                $this->RequestParams["TargetMySQL"] = $param["TargetMySQL"];
            }
        }
        if (array_key_exists("TargetKafka",$param) and $param["TargetKafka"] !== null) {
            if(is_bool($param["TargetKafka"])){
                $this->RequestParams["TargetKafka"] = $param["TargetKafka"] ? "true" : "false";
            } else {
                $this->RequestParams["TargetKafka"] = $param["TargetKafka"];
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