<?php
namespace  Ksyun\Client\Dts\V20180108\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class TaskBirdViewRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "taskType" => null,
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
        if (array_key_exists("taskType",$param) and $param["taskType"] !== null) {
            if(is_bool($param["taskType"])){
                $this->RequestParams["taskType"] = $param["taskType"] ? "true" : "false";
            } else {
                $this->RequestParams["taskType"] = $param["taskType"];
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