<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class SetInferenceReplicasRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "InferenceId" => null,
         /**Int**/
        "Replicas" => null,
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
        if (array_key_exists("InferenceId",$param) and $param["InferenceId"] !== null) {
            if(is_bool($param["InferenceId"])){
                $this->RequestParams["InferenceId"] = $param["InferenceId"] ? "true" : "false";
            } else {
                $this->RequestParams["InferenceId"] = $param["InferenceId"];
            }
        }
        if (array_key_exists("Replicas",$param) and $param["Replicas"] !== null) {
            if(is_bool($param["Replicas"])){
                $this->RequestParams["Replicas"] = $param["Replicas"] ? "true" : "false";
            } else {
                $this->RequestParams["Replicas"] = $param["Replicas"];
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