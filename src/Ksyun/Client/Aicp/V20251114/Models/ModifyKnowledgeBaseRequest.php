<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyKnowledgeBaseRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DatasetId" => null,
         /**String**/
        "Name" => null,
         /**String**/
        "IndexingTechnique" => null,
         /**String**/
        "EmbeddingModelProvider" => null,
         /**String**/
        "EmbeddingModel" => null,
         /**Object**/
        "RetrievalModel" => null,
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
        if (array_key_exists("DatasetId",$param) and $param["DatasetId"] !== null) {
            if(is_bool($param["DatasetId"])){
                $this->RequestParams["DatasetId"] = $param["DatasetId"] ? "true" : "false";
            } else {
                $this->RequestParams["DatasetId"] = $param["DatasetId"];
            }
        }
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            if(is_bool($param["Name"])){
                $this->RequestParams["Name"] = $param["Name"] ? "true" : "false";
            } else {
                $this->RequestParams["Name"] = $param["Name"];
            }
        }
        if (array_key_exists("IndexingTechnique",$param) and $param["IndexingTechnique"] !== null) {
            if(is_bool($param["IndexingTechnique"])){
                $this->RequestParams["IndexingTechnique"] = $param["IndexingTechnique"] ? "true" : "false";
            } else {
                $this->RequestParams["IndexingTechnique"] = $param["IndexingTechnique"];
            }
        }
        if (array_key_exists("EmbeddingModelProvider",$param) and $param["EmbeddingModelProvider"] !== null) {
            if(is_bool($param["EmbeddingModelProvider"])){
                $this->RequestParams["EmbeddingModelProvider"] = $param["EmbeddingModelProvider"] ? "true" : "false";
            } else {
                $this->RequestParams["EmbeddingModelProvider"] = $param["EmbeddingModelProvider"];
            }
        }
        if (array_key_exists("EmbeddingModel",$param) and $param["EmbeddingModel"] !== null) {
            if(is_bool($param["EmbeddingModel"])){
                $this->RequestParams["EmbeddingModel"] = $param["EmbeddingModel"] ? "true" : "false";
            } else {
                $this->RequestParams["EmbeddingModel"] = $param["EmbeddingModel"];
            }
        }
        if (array_key_exists("RetrievalModel",$param) and $param["RetrievalModel"] !== null) {
            if(is_bool($param["RetrievalModel"])){
                $this->RequestParams["RetrievalModel"] = $param["RetrievalModel"] ? "true" : "false";
            } else {
                $this->RequestParams["RetrievalModel"] = $param["RetrievalModel"];
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