<?php
namespace  Ksyun\Client\Monitor\V20250101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class GetPrometheusTokenRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ControllerID" => null,
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
        if (array_key_exists("ControllerID",$param) and $param["ControllerID"] !== null) {
            if(is_bool($param["ControllerID"])){
                $this->RequestParams["ControllerID"] = $param["ControllerID"] ? "true" : "false";
            } else {
                $this->RequestParams["ControllerID"] = $param["ControllerID"];
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