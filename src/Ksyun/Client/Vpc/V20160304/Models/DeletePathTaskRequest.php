<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeletePathTaskRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "PathTaskId" => null,
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
        if (array_key_exists("PathTaskId",$param) and $param["PathTaskId"] !== null) {
            if(is_bool($param["PathTaskId"])){
                $this->RequestParams["PathTaskId"] = $param["PathTaskId"] ? "true" : "false";
            } else {
                $this->RequestParams["PathTaskId"] = $param["PathTaskId"];
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