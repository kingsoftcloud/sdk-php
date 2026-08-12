<?php
namespace  Ksyun\Client\Kpfs\V20240930\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ManageMigrateTaskRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "TaskId" => null,
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            if(is_bool($param["TaskId"])){
                $this->RequestParams["TaskId"] = $param["TaskId"] ? "true" : "false";
            } else {
                $this->RequestParams["TaskId"] = $param["TaskId"];
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