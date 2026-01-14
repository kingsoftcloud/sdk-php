<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class UpdateInferenceEndpointRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "EndpointName" => null,
         /**String**/
        "ProjectId" => null,
         /**String**/
        "ModelName" => null,
         /**Object**/
        "RateLimit " => null,
         /**String**/
        "EndpointId" => null,
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
        if (array_key_exists("EndpointName",$param) and $param["EndpointName"] !== null) {
            if(is_bool($param["EndpointName"])){
                $this->RequestParams["EndpointName"] = $param["EndpointName"] ? "true" : "false";
            } else {
                $this->RequestParams["EndpointName"] = $param["EndpointName"];
            }
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            if(is_bool($param["ProjectId"])){
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
            }
        }
        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            if(is_bool($param["ModelName"])){
                $this->RequestParams["ModelName"] = $param["ModelName"] ? "true" : "false";
            } else {
                $this->RequestParams["ModelName"] = $param["ModelName"];
            }
        }
        if (array_key_exists("RateLimit ",$param) and $param["RateLimit "] !== null) {
            if(is_bool($param["RateLimit "])){
                $this->RequestParams["RateLimit "] = $param["RateLimit "] ? "true" : "false";
            } else {
                $this->RequestParams["RateLimit "] = $param["RateLimit "];
            }
        }
        if (array_key_exists("EndpointId",$param) and $param["EndpointId"] !== null) {
            if(is_bool($param["EndpointId"])){
                $this->RequestParams["EndpointId"] = $param["EndpointId"] ? "true" : "false";
            } else {
                $this->RequestParams["EndpointId"] = $param["EndpointId"];
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