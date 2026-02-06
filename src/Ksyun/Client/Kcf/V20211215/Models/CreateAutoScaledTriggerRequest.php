<?php
namespace  Ksyun\Client\Kcf\V20211215\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateAutoScaledTriggerRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "FunctionId" => null,
         /**Array**/
        "Triggers" => null,
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
        if (array_key_exists("FunctionId",$param) and $param["FunctionId"] !== null) {
            if(is_bool($param["FunctionId"])){
                $this->RequestParams["FunctionId"] = $param["FunctionId"] ? "true" : "false";
            } else {
                $this->RequestParams["FunctionId"] = $param["FunctionId"];
            }
        }
        if (array_key_exists("Triggers",$param) and $param["Triggers"] !== null) {
            if(is_bool($param["Triggers"])){
                $this->RequestParams["Triggers"] = $param["Triggers"] ? "true" : "false";
            } else {
                $this->RequestParams["Triggers"] = $param["Triggers"];
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