<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class QueryMemorySdkRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Namespace" => null,
         /**String**/
        "UserId" => null,
         /**String**/
        "Query" => null,
         /**String**/
        "SceneId" => null,
         /**Long**/
        "OccurredAfter" => null,
         /**Long**/
        "OccurredBefore" => null,
         /**String**/
        "Mode" => null,
         /**Boolean**/
        "ReturnCitations" => null,
         /**Int**/
        "Limit" => null,
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
        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            if(is_bool($param["Query"])){
                $this->RequestParams["Query"] = $param["Query"] ? "true" : "false";
            } else {
                $this->RequestParams["Query"] = $param["Query"];
            }
        }
        if (array_key_exists("SceneId",$param) and $param["SceneId"] !== null) {
            if(is_bool($param["SceneId"])){
                $this->RequestParams["SceneId"] = $param["SceneId"] ? "true" : "false";
            } else {
                $this->RequestParams["SceneId"] = $param["SceneId"];
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            if(is_bool($param["Mode"])){
                $this->RequestParams["Mode"] = $param["Mode"] ? "true" : "false";
            } else {
                $this->RequestParams["Mode"] = $param["Mode"];
            }
        }
        if (array_key_exists("ReturnCitations",$param) and $param["ReturnCitations"] !== null) {
            if(is_bool($param["ReturnCitations"])){
                $this->RequestParams["ReturnCitations"] = $param["ReturnCitations"] ? "true" : "false";
            } else {
                $this->RequestParams["ReturnCitations"] = $param["ReturnCitations"];
            }
        }
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            if(is_bool($param["Limit"])){
                $this->RequestParams["Limit"] = $param["Limit"] ? "true" : "false";
            } else {
                $this->RequestParams["Limit"] = $param["Limit"];
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