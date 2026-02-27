<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeKnowledgeBaseModelsRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ModelType" => null,
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
        if (array_key_exists("ModelType",$param) and $param["ModelType"] !== null) {
            if(is_bool($param["ModelType"])){
                $this->RequestParams["ModelType"] = $param["ModelType"] ? "true" : "false";
            } else {
                $this->RequestParams["ModelType"] = $param["ModelType"];
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