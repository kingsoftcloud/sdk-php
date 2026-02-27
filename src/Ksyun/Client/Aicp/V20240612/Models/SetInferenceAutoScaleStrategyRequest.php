<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class SetInferenceAutoScaleStrategyRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "InferenceId" => null,
         /**Boolean**/
        "AutoScaleEnable" => null,
         /**Object**/
        "AutoScaleStrategy" => null,
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
        if (array_key_exists("AutoScaleEnable",$param) and $param["AutoScaleEnable"] !== null) {
            if(is_bool($param["AutoScaleEnable"])){
                $this->RequestParams["AutoScaleEnable"] = $param["AutoScaleEnable"] ? "true" : "false";
            } else {
                $this->RequestParams["AutoScaleEnable"] = $param["AutoScaleEnable"];
            }
        }
        if (array_key_exists("AutoScaleStrategy",$param) and $param["AutoScaleStrategy"] !== null) {
            if(is_bool($param["AutoScaleStrategy"])){
                $this->RequestParams["AutoScaleStrategy"] = $param["AutoScaleStrategy"] ? "true" : "false";
            } else {
                $this->RequestParams["AutoScaleStrategy"] = $param["AutoScaleStrategy"];
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