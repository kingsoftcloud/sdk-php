<?php
namespace  Ksyun\Client\Kcf\V20211215\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteFunctionRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Id" => null,
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            if(is_bool($param["Id"])){
                $this->RequestParams["Id"] = $param["Id"] ? "true" : "false";
            } else {
                $this->RequestParams["Id"] = $param["Id"];
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