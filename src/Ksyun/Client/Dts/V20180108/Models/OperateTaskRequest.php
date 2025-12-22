<?php
namespace  Ksyun\Client\Dts\V20180108\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class OperateTaskRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "TaskId" => null,
         /**String**/
        "ActionName" => null,
         /**String**/
        "TaskType" => null,
         /**Int**/
        "ErrSkip" => null,
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            if(is_bool($param["TaskId"])){
                $this->RequestParams["TaskId"] = $param["TaskId"] ? "true" : "false";
            } else {
                $this->RequestParams["TaskId"] = $param["TaskId"];
            }
        }
        if (array_key_exists("ActionName",$param) and $param["ActionName"] !== null) {
            if(is_bool($param["ActionName"])){
                $this->RequestParams["ActionName"] = $param["ActionName"] ? "true" : "false";
            } else {
                $this->RequestParams["ActionName"] = $param["ActionName"];
            }
        }
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            if(is_bool($param["TaskType"])){
                $this->RequestParams["TaskType"] = $param["TaskType"] ? "true" : "false";
            } else {
                $this->RequestParams["TaskType"] = $param["TaskType"];
            }
        }
        if (array_key_exists("ErrSkip",$param) and $param["ErrSkip"] !== null) {
            if(is_bool($param["ErrSkip"])){
                $this->RequestParams["ErrSkip"] = $param["ErrSkip"] ? "true" : "false";
            } else {
                $this->RequestParams["ErrSkip"] = $param["ErrSkip"];
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