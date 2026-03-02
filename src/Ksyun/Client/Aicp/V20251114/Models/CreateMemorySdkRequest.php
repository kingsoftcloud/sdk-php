<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateMemorySdkRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Namespace" => null,
         /**String**/
        "UserId" => null,
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
        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            if(is_bool($param["Namespace"])){
                $this->RequestParams["Namespace"] = $param["Namespace"] ? "true" : "false";
            } else {
                $this->RequestParams["Namespace"] = $param["Namespace"];
            }
        }
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            if(is_bool($param["UserId"])){
                $this->RequestParams["UserId"] = $param["UserId"] ? "true" : "false";
            } else {
                $this->RequestParams["UserId"] = $param["UserId"];
            }
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