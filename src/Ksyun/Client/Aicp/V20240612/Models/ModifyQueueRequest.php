<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyQueueRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "QueueId" => null,
         /**Object**/
        "Capability" => null,
         /**Boolean**/
        "AllowBorrowing" => null,
         /**String**/
        "Description" => null,
         /**Array**/
        "AccessList" => null,
         /**Array**/
        "WorkloadType" => null,
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
        if (array_key_exists("QueueId",$param) and $param["QueueId"] !== null) {
            if(is_bool($param["QueueId"])){
                $this->RequestParams["QueueId"] = $param["QueueId"] ? "true" : "false";
            } else {
                $this->RequestParams["QueueId"] = $param["QueueId"];
            }
        }
        if (array_key_exists("Capability",$param) and $param["Capability"] !== null) {
            if(is_bool($param["Capability"])){
                $this->RequestParams["Capability"] = $param["Capability"] ? "true" : "false";
            } else {
                $this->RequestParams["Capability"] = $param["Capability"];
            }
        }
        if (array_key_exists("AllowBorrowing",$param) and $param["AllowBorrowing"] !== null) {
            if(is_bool($param["AllowBorrowing"])){
                $this->RequestParams["AllowBorrowing"] = $param["AllowBorrowing"] ? "true" : "false";
            } else {
                $this->RequestParams["AllowBorrowing"] = $param["AllowBorrowing"];
            }
        }
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            if(is_bool($param["Description"])){
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
            }
        }
        if (array_key_exists("AccessList",$param) and $param["AccessList"] !== null) {
            if(is_bool($param["AccessList"])){
                $this->RequestParams["AccessList"] = $param["AccessList"] ? "true" : "false";
            } else {
                $this->RequestParams["AccessList"] = $param["AccessList"];
            }
        }
        if (array_key_exists("WorkloadType",$param) and $param["WorkloadType"] !== null) {
            if(is_bool($param["WorkloadType"])){
                $this->RequestParams["WorkloadType"] = $param["WorkloadType"] ? "true" : "false";
            } else {
                $this->RequestParams["WorkloadType"] = $param["WorkloadType"];
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