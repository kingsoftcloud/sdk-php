<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class EnableOverFreeLimitRequest extends BaseModel
{
    public $RequestParams = [
         /**Array**/
        "ModelIds" => null,
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
        if (array_key_exists("ModelIds",$param) and $param["ModelIds"] !== null) {
            if(is_bool($param["ModelIds"])){
                $this->RequestParams["ModelIds"] = $param["ModelIds"] ? "true" : "false";
            } else {
                $this->RequestParams["ModelIds"] = $param["ModelIds"];
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