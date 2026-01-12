<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateBatchInferenceJobRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "JobName" => null,
         /**String**/
        "JobDesc" => null,
         /**String**/
        "ApikeyId" => null,
         /**String**/
        "Model" => null,
         /**Int**/
        "ExecuteTimeoutMs" => null,
         /**String**/
        "InputDataType" => null,
         /**String**/
        "Ks3Region" => null,
         /**String**/
        "Ks3Ak" => null,
         /**String**/
        "Ks3Sk" => null,
         /**String**/
        "InBucket" => null,
         /**String**/
        "OutBucket" => null,
         /**String**/
        "InObjectName" => null,
         /**String**/
        "OutObjectName" => null,
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
        if (array_key_exists("ApikeyId",$param) and $param["ApikeyId"] !== null) {
            if(is_bool($param["ApikeyId"])){
                $this->RequestParams["ApikeyId"] = $param["ApikeyId"] ? "true" : "false";
            } else {
                $this->RequestParams["ApikeyId"] = $param["ApikeyId"];
            }
        }
        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            if(is_bool($param["Model"])){
                $this->RequestParams["Model"] = $param["Model"] ? "true" : "false";
            } else {
                $this->RequestParams["Model"] = $param["Model"];
            }
        }
        if (array_key_exists("ExecuteTimeoutMs",$param) and $param["ExecuteTimeoutMs"] !== null) {
            if(is_bool($param["ExecuteTimeoutMs"])){
                $this->RequestParams["ExecuteTimeoutMs"] = $param["ExecuteTimeoutMs"] ? "true" : "false";
            } else {
                $this->RequestParams["ExecuteTimeoutMs"] = $param["ExecuteTimeoutMs"];
            }
        }
        if (array_key_exists("InputDataType",$param) and $param["InputDataType"] !== null) {
            if(is_bool($param["InputDataType"])){
                $this->RequestParams["InputDataType"] = $param["InputDataType"] ? "true" : "false";
            } else {
                $this->RequestParams["InputDataType"] = $param["InputDataType"];
            }
        }
        if (array_key_exists("Ks3Region",$param) and $param["Ks3Region"] !== null) {
            if(is_bool($param["Ks3Region"])){
                $this->RequestParams["Ks3Region"] = $param["Ks3Region"] ? "true" : "false";
            } else {
                $this->RequestParams["Ks3Region"] = $param["Ks3Region"];
            }
        }
        if (array_key_exists("Ks3Ak",$param) and $param["Ks3Ak"] !== null) {
            if(is_bool($param["Ks3Ak"])){
                $this->RequestParams["Ks3Ak"] = $param["Ks3Ak"] ? "true" : "false";
            } else {
                $this->RequestParams["Ks3Ak"] = $param["Ks3Ak"];
            }
        }
        if (array_key_exists("Ks3Sk",$param) and $param["Ks3Sk"] !== null) {
            if(is_bool($param["Ks3Sk"])){
                $this->RequestParams["Ks3Sk"] = $param["Ks3Sk"] ? "true" : "false";
            } else {
                $this->RequestParams["Ks3Sk"] = $param["Ks3Sk"];
            }
        }
        if (array_key_exists("InBucket",$param) and $param["InBucket"] !== null) {
            if(is_bool($param["InBucket"])){
                $this->RequestParams["InBucket"] = $param["InBucket"] ? "true" : "false";
            } else {
                $this->RequestParams["InBucket"] = $param["InBucket"];
            }
        }
        if (array_key_exists("OutBucket",$param) and $param["OutBucket"] !== null) {
            if(is_bool($param["OutBucket"])){
                $this->RequestParams["OutBucket"] = $param["OutBucket"] ? "true" : "false";
            } else {
                $this->RequestParams["OutBucket"] = $param["OutBucket"];
            }
        }
        if (array_key_exists("InObjectName",$param) and $param["InObjectName"] !== null) {
            if(is_bool($param["InObjectName"])){
                $this->RequestParams["InObjectName"] = $param["InObjectName"] ? "true" : "false";
            } else {
                $this->RequestParams["InObjectName"] = $param["InObjectName"];
            }
        }
        if (array_key_exists("OutObjectName",$param) and $param["OutObjectName"] !== null) {
            if(is_bool($param["OutObjectName"])){
                $this->RequestParams["OutObjectName"] = $param["OutObjectName"] ? "true" : "false";
            } else {
                $this->RequestParams["OutObjectName"] = $param["OutObjectName"];
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