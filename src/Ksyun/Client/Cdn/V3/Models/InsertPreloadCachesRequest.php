<?php
namespace  Ksyun\Client\Cdn\V3\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class InsertPreloadCachesRequest extends BaseModel
{
    public $RequestParams = [
         /**Array**/
        "Urls" => null,
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
        if (array_key_exists("Urls",$param) and $param["Urls"] !== null) {
            if(is_bool($param["Urls"])){
                $this->RequestParams["Urls"] = $param["Urls"] ? "true" : "false";
            } else {
                $this->RequestParams["Urls"] = $param["Urls"];
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