<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteBatchInferenceJobRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "BatchId" => null,
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
        if (array_key_exists("BatchId",$param) and $param["BatchId"] !== null) {
            if(is_bool($param["BatchId"])){
                $this->RequestParams["BatchId"] = $param["BatchId"] ? "true" : "false";
            } else {
                $this->RequestParams["BatchId"] = $param["BatchId"];
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