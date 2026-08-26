<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteNetworkPathRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "PathId" => null,
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
        if (array_key_exists("PathId",$param) and $param["PathId"] !== null) {
            if(is_bool($param["PathId"])){
                $this->RequestParams["PathId"] = $param["PathId"] ? "true" : "false";
            } else {
                $this->RequestParams["PathId"] = $param["PathId"];
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