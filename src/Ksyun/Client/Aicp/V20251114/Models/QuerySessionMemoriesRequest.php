<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class QuerySessionMemoriesRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "MemoryCollectionId" => null,
         /**String**/
        "SessionId" => null,
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
        if (array_key_exists("MemoryCollectionId",$param) and $param["MemoryCollectionId"] !== null) {
            if(is_bool($param["MemoryCollectionId"])){
                $this->RequestParams["MemoryCollectionId"] = $param["MemoryCollectionId"] ? "true" : "false";
            } else {
                $this->RequestParams["MemoryCollectionId"] = $param["MemoryCollectionId"];
            }
        }
        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            if(is_bool($param["SessionId"])){
                $this->RequestParams["SessionId"] = $param["SessionId"] ? "true" : "false";
            } else {
                $this->RequestParams["SessionId"] = $param["SessionId"];
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