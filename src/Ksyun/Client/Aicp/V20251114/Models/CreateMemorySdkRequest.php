<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateMemorySdkRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "AgentId" => null,
         /**String**/
        "SessionId" => null,
         /**String**/
        "SceneId" => null,
         /**String**/
        "DataType" => null,
         /**Object**/
        "Data" => null,
         /**String**/
        "AgentUserId" => null,
         /**String**/
        "MemoryCollectionId" => null,
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
        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            if(is_bool($param["AgentId"])){
                $this->RequestParams["AgentId"] = $param["AgentId"] ? "true" : "false";
            } else {
                $this->RequestParams["AgentId"] = $param["AgentId"];
            }
        }
        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            if(is_bool($param["SessionId"])){
                $this->RequestParams["SessionId"] = $param["SessionId"] ? "true" : "false";
            } else {
                $this->RequestParams["SessionId"] = $param["SessionId"];
            }
        }
        if (array_key_exists("SceneId",$param) and $param["SceneId"] !== null) {
            if(is_bool($param["SceneId"])){
                $this->RequestParams["SceneId"] = $param["SceneId"] ? "true" : "false";
            } else {
                $this->RequestParams["SceneId"] = $param["SceneId"];
            }
        }
        if (array_key_exists("DataType",$param) and $param["DataType"] !== null) {
            if(is_bool($param["DataType"])){
                $this->RequestParams["DataType"] = $param["DataType"] ? "true" : "false";
            } else {
                $this->RequestParams["DataType"] = $param["DataType"];
            }
        }
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            if(is_bool($param["Data"])){
                $this->RequestParams["Data"] = $param["Data"] ? "true" : "false";
            } else {
                $this->RequestParams["Data"] = $param["Data"];
            }
        }
        if (array_key_exists("AgentUserId",$param) and $param["AgentUserId"] !== null) {
            if(is_bool($param["AgentUserId"])){
                $this->RequestParams["AgentUserId"] = $param["AgentUserId"] ? "true" : "false";
            } else {
                $this->RequestParams["AgentUserId"] = $param["AgentUserId"];
            }
        }
        if (array_key_exists("MemoryCollectionId",$param) and $param["MemoryCollectionId"] !== null) {
            if(is_bool($param["MemoryCollectionId"])){
                $this->RequestParams["MemoryCollectionId"] = $param["MemoryCollectionId"] ? "true" : "false";
            } else {
                $this->RequestParams["MemoryCollectionId"] = $param["MemoryCollectionId"];
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