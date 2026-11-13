<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class QueryAgenticMemoryStreamRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "MemoryCollectionId" => null,
         /**String**/
        "AgentUserId" => null,
         /**String**/
        "Query" => null,
         /**Int**/
        "Limit" => null,
         /**String**/
        "SceneId" => null,
         /**Boolean**/
        "ReturnCitations" => null,
         /**Int**/
        "OccurredAfter" => null,
         /**Int**/
        "OccurredBefore" => null,
         /**Int**/
        "MaxSteps" => null,
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
        if (array_key_exists("AgentUserId",$param) and $param["AgentUserId"] !== null) {
            if(is_bool($param["AgentUserId"])){
                $this->RequestParams["AgentUserId"] = $param["AgentUserId"] ? "true" : "false";
            } else {
                $this->RequestParams["AgentUserId"] = $param["AgentUserId"];
            }
        }
        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            if(is_bool($param["Query"])){
                $this->RequestParams["Query"] = $param["Query"] ? "true" : "false";
            } else {
                $this->RequestParams["Query"] = $param["Query"];
            }
        }
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            if(is_bool($param["Limit"])){
                $this->RequestParams["Limit"] = $param["Limit"] ? "true" : "false";
            } else {
                $this->RequestParams["Limit"] = $param["Limit"];
            }
        }
        if (array_key_exists("SceneId",$param) and $param["SceneId"] !== null) {
            if(is_bool($param["SceneId"])){
                $this->RequestParams["SceneId"] = $param["SceneId"] ? "true" : "false";
            } else {
                $this->RequestParams["SceneId"] = $param["SceneId"];
            }
        }
        if (array_key_exists("ReturnCitations",$param) and $param["ReturnCitations"] !== null) {
            if(is_bool($param["ReturnCitations"])){
                $this->RequestParams["ReturnCitations"] = $param["ReturnCitations"] ? "true" : "false";
            } else {
                $this->RequestParams["ReturnCitations"] = $param["ReturnCitations"];
            }
        }
        if (array_key_exists("OccurredAfter",$param) and $param["OccurredAfter"] !== null) {
            if(is_bool($param["OccurredAfter"])){
                $this->RequestParams["OccurredAfter"] = $param["OccurredAfter"] ? "true" : "false";
            } else {
                $this->RequestParams["OccurredAfter"] = $param["OccurredAfter"];
            }
        }
        if (array_key_exists("OccurredBefore",$param) and $param["OccurredBefore"] !== null) {
            if(is_bool($param["OccurredBefore"])){
                $this->RequestParams["OccurredBefore"] = $param["OccurredBefore"] ? "true" : "false";
            } else {
                $this->RequestParams["OccurredBefore"] = $param["OccurredBefore"];
            }
        }
        if (array_key_exists("MaxSteps",$param) and $param["MaxSteps"] !== null) {
            if(is_bool($param["MaxSteps"])){
                $this->RequestParams["MaxSteps"] = $param["MaxSteps"] ? "true" : "false";
            } else {
                $this->RequestParams["MaxSteps"] = $param["MaxSteps"];
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