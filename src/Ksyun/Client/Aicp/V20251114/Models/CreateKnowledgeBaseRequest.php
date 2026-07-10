<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateKnowledgeBaseRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Name" => null,
         /**String**/
        "IndexingTechnique" => null,
         /**Object**/
        "RetrievalModel" => null,
         /**Int**/
        "ComputeUnit" => null,
         /**String**/
        "ProjectId" => null,
         /**String**/
        "ChargeType" => null,
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
        if (array_key_exists("RetrievalModel",$param) and $param["RetrievalModel"] !== null) {
            if(is_bool($param["RetrievalModel"])){
                $this->RequestParams["RetrievalModel"] = $param["RetrievalModel"] ? "true" : "false";
            } else {
                $this->RequestParams["RetrievalModel"] = $param["RetrievalModel"];
            }
        }
        if (array_key_exists("ComputeUnit",$param) and $param["ComputeUnit"] !== null) {
            if(is_bool($param["ComputeUnit"])){
                $this->RequestParams["ComputeUnit"] = $param["ComputeUnit"] ? "true" : "false";
            } else {
                $this->RequestParams["ComputeUnit"] = $param["ComputeUnit"];
            }
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            if(is_bool($param["ProjectId"])){
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
            }
        }
        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            if(is_bool($param["ChargeType"])){
                $this->RequestParams["ChargeType"] = $param["ChargeType"] ? "true" : "false";
            } else {
                $this->RequestParams["ChargeType"] = $param["ChargeType"];
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