<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class StopInferenceRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "InferenceId" => null,
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
        if (array_key_exists("InferenceId",$param) and $param["InferenceId"] !== null) {
            if(is_bool($param["InferenceId"])){
                $this->RequestParams["InferenceId"] = $param["InferenceId"] ? "true" : "false";
            } else {
                $this->RequestParams["InferenceId"] = $param["InferenceId"];
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