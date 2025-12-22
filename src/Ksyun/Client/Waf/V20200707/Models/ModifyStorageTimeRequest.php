<?php
namespace  Ksyun\Client\Waf\V20200707\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyStorageTimeRequest extends BaseModel
{
    public $RequestParams = [
         /**Int**/
        "StorageTime" => null,
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
        if (array_key_exists("StorageTime",$param) and $param["StorageTime"] !== null) {
            if(is_bool($param["StorageTime"])){
                $this->RequestParams["StorageTime"] = $param["StorageTime"] ? "true" : "false";
            } else {
                $this->RequestParams["StorageTime"] = $param["StorageTime"];
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