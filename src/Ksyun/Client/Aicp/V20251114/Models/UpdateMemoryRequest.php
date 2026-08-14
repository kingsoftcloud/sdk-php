<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class UpdateMemoryRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "MemoryCollectionId" => null,
         /**String**/
        "MemoryId" => null,
         /**String**/
        "Content" => null,
         /**String**/
        "AgentUserId" => null,
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
        if (array_key_exists("MemoryId",$param) and $param["MemoryId"] !== null) {
            if(is_bool($param["MemoryId"])){
                $this->RequestParams["MemoryId"] = $param["MemoryId"] ? "true" : "false";
            } else {
                $this->RequestParams["MemoryId"] = $param["MemoryId"];
            }
        }
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            if(is_bool($param["Content"])){
                $this->RequestParams["Content"] = $param["Content"] ? "true" : "false";
            } else {
                $this->RequestParams["Content"] = $param["Content"];
            }
        }
        if (array_key_exists("AgentUserId",$param) and $param["AgentUserId"] !== null) {
            if(is_bool($param["AgentUserId"])){
                $this->RequestParams["AgentUserId"] = $param["AgentUserId"] ? "true" : "false";
            } else {
                $this->RequestParams["AgentUserId"] = $param["AgentUserId"];
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