<?php
namespace  Ksyun\Client\Aicp\V20251212\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateTrainJobRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "TrainJobName" => null,
         /**String**/
        "Description" => null,
         /**String**/
        "ResourcePoolId" => null,
         /**String**/
        "Priority" => null,
         /**String**/
        "QueueName" => null,
         /**String**/
        "Framework" => null,
         /**String**/
        "AccessType" => null,
         /**Boolean**/
        "SelfHealing" => null,
         /**Long**/
        "MaxRuntimeHour" => null,
         /**Boolean**/
        "JobRunOnCPU" => null,
         /**Boolean**/
        "SupportTensorboard" => null,
         /**Array**/
        "StorageConfigs" => null,
         /**Array**/
        "Roles" => null,
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
        if (array_key_exists("TrainJobName",$param) and $param["TrainJobName"] !== null) {
            if(is_bool($param["TrainJobName"])){
                $this->RequestParams["TrainJobName"] = $param["TrainJobName"] ? "true" : "false";
            } else {
                $this->RequestParams["TrainJobName"] = $param["TrainJobName"];
            }
        }
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            if(is_bool($param["Description"])){
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
            }
        }
        if (array_key_exists("ResourcePoolId",$param) and $param["ResourcePoolId"] !== null) {
            if(is_bool($param["ResourcePoolId"])){
                $this->RequestParams["ResourcePoolId"] = $param["ResourcePoolId"] ? "true" : "false";
            } else {
                $this->RequestParams["ResourcePoolId"] = $param["ResourcePoolId"];
            }
        }
        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            if(is_bool($param["Priority"])){
                $this->RequestParams["Priority"] = $param["Priority"] ? "true" : "false";
            } else {
                $this->RequestParams["Priority"] = $param["Priority"];
            }
        }
        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            if(is_bool($param["QueueName"])){
                $this->RequestParams["QueueName"] = $param["QueueName"] ? "true" : "false";
            } else {
                $this->RequestParams["QueueName"] = $param["QueueName"];
            }
        }
        if (array_key_exists("Framework",$param) and $param["Framework"] !== null) {
            if(is_bool($param["Framework"])){
                $this->RequestParams["Framework"] = $param["Framework"] ? "true" : "false";
            } else {
                $this->RequestParams["Framework"] = $param["Framework"];
            }
        }
        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            if(is_bool($param["AccessType"])){
                $this->RequestParams["AccessType"] = $param["AccessType"] ? "true" : "false";
            } else {
                $this->RequestParams["AccessType"] = $param["AccessType"];
            }
        }
        if (array_key_exists("SelfHealing",$param) and $param["SelfHealing"] !== null) {
            if(is_bool($param["SelfHealing"])){
                $this->RequestParams["SelfHealing"] = $param["SelfHealing"] ? "true" : "false";
            } else {
                $this->RequestParams["SelfHealing"] = $param["SelfHealing"];
            }
        }
        if (array_key_exists("MaxRuntimeHour",$param) and $param["MaxRuntimeHour"] !== null) {
            if(is_bool($param["MaxRuntimeHour"])){
                $this->RequestParams["MaxRuntimeHour"] = $param["MaxRuntimeHour"] ? "true" : "false";
            } else {
                $this->RequestParams["MaxRuntimeHour"] = $param["MaxRuntimeHour"];
            }
        }
        if (array_key_exists("JobRunOnCPU",$param) and $param["JobRunOnCPU"] !== null) {
            if(is_bool($param["JobRunOnCPU"])){
                $this->RequestParams["JobRunOnCPU"] = $param["JobRunOnCPU"] ? "true" : "false";
            } else {
                $this->RequestParams["JobRunOnCPU"] = $param["JobRunOnCPU"];
            }
        }
        if (array_key_exists("SupportTensorboard",$param) and $param["SupportTensorboard"] !== null) {
            if(is_bool($param["SupportTensorboard"])){
                $this->RequestParams["SupportTensorboard"] = $param["SupportTensorboard"] ? "true" : "false";
            } else {
                $this->RequestParams["SupportTensorboard"] = $param["SupportTensorboard"];
            }
        }
        if (array_key_exists("StorageConfigs",$param) and $param["StorageConfigs"] !== null) {
            if(is_bool($param["StorageConfigs"])){
                $this->RequestParams["StorageConfigs"] = $param["StorageConfigs"] ? "true" : "false";
            } else {
                $this->RequestParams["StorageConfigs"] = $param["StorageConfigs"];
            }
        }
        if (array_key_exists("Roles",$param) and $param["Roles"] !== null) {
            if(is_bool($param["Roles"])){
                $this->RequestParams["Roles"] = $param["Roles"] ? "true" : "false";
            } else {
                $this->RequestParams["Roles"] = $param["Roles"];
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