<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyBatchInferenceJobRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "BatchId" => null,
         /**String**/
        "JobName" => null,
         /**String**/
        "JobDesc" => null,
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
        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            if(is_bool($param["JobName"])){
                $this->RequestParams["JobName"] = $param["JobName"] ? "true" : "false";
            } else {
                $this->RequestParams["JobName"] = $param["JobName"];
            }
        }
        if (array_key_exists("JobDesc",$param) and $param["JobDesc"] !== null) {
            if(is_bool($param["JobDesc"])){
                $this->RequestParams["JobDesc"] = $param["JobDesc"] ? "true" : "false";
            } else {
                $this->RequestParams["JobDesc"] = $param["JobDesc"];
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