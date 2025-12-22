<?php
namespace  Ksyun\Client\Tidb\V20210520\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class OperationTasksRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "InstanceId" => null,
         /**String**/
        "TaskList" => null,
         /**String**/
        "Operation" => null,
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
        if (array_key_exists("TaskList",$param) and $param["TaskList"] !== null) {
            if(is_bool($param["TaskList"])){
                $this->RequestParams["TaskList"] = $param["TaskList"] ? "true" : "false";
            } else {
                $this->RequestParams["TaskList"] = $param["TaskList"];
            }
        }
        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            if(is_bool($param["Operation"])){
                $this->RequestParams["Operation"] = $param["Operation"] ? "true" : "false";
            } else {
                $this->RequestParams["Operation"] = $param["Operation"];
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