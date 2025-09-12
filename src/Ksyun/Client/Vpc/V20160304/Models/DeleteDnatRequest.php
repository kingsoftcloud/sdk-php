<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteDnatRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DnatId" => null,
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
        if (array_key_exists("DnatId",$param) and $param["DnatId"] !== null) {
            if(is_bool($param["DnatId"])){
                $this->RequestParams["DnatId"] = $param["DnatId"] ? "true" : "false";
            } else {
                $this->RequestParams["DnatId"] = $param["DnatId"];
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