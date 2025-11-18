<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

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
        "QueueName" => null,
         /**String**/
        "Priority" => null,
         /**String**/
        "Command" => null,
         /**String**/
        "Framework" => null,
         /**String**/
        "ImageSource" => null,
         /**Object**/
        "FrameworkReplicas" => null,
         /**Array**/
        "Envs" => null,
         /**Boolean**/
        "SupportTensorboard" => null,
         /**String**/
        "ImageId" => null,
         /**String**/
        "ImageRegistryId" => null,
         /**String**/
        "ImageRepoId" => null,
         /**String**/
        "ImageTagId" => null,
         /**String**/
        "GPUType" => null,
         /**Int**/
        "GPUNumber" => null,
         /**Int**/
        "CpuNum" => null,
         /**Int**/
        "Memory" => null,
         /**Array**/
        "StorageConfigs" => null,
         /**String**/
        "AccessType" => null,
         /**Int**/
        "MaxRuntime" => null,
         /**Boolean**/
        "SelfHealing" => null,
         /**Boolean**/
        "RunOnCpu" => null,
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
        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            if(is_bool($param["QueueName"])){
                $this->RequestParams["QueueName"] = $param["QueueName"] ? "true" : "false";
            } else {
                $this->RequestParams["QueueName"] = $param["QueueName"];
            }
        }
        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            if(is_bool($param["Priority"])){
                $this->RequestParams["Priority"] = $param["Priority"] ? "true" : "false";
            } else {
                $this->RequestParams["Priority"] = $param["Priority"];
            }
        }
        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            if(is_bool($param["Command"])){
                $this->RequestParams["Command"] = $param["Command"] ? "true" : "false";
            } else {
                $this->RequestParams["Command"] = $param["Command"];
            }
        }
        if (array_key_exists("Framework",$param) and $param["Framework"] !== null) {
            if(is_bool($param["Framework"])){
                $this->RequestParams["Framework"] = $param["Framework"] ? "true" : "false";
            } else {
                $this->RequestParams["Framework"] = $param["Framework"];
            }
        }
        if (array_key_exists("ImageSource",$param) and $param["ImageSource"] !== null) {
            if(is_bool($param["ImageSource"])){
                $this->RequestParams["ImageSource"] = $param["ImageSource"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageSource"] = $param["ImageSource"];
            }
        }
        if (array_key_exists("FrameworkReplicas",$param) and $param["FrameworkReplicas"] !== null) {
            if(is_bool($param["FrameworkReplicas"])){
                $this->RequestParams["FrameworkReplicas"] = $param["FrameworkReplicas"] ? "true" : "false";
            } else {
                $this->RequestParams["FrameworkReplicas"] = $param["FrameworkReplicas"];
            }
        }
        if (array_key_exists("Envs",$param) and $param["Envs"] !== null) {
            if(is_bool($param["Envs"])){
                $this->RequestParams["Envs"] = $param["Envs"] ? "true" : "false";
            } else {
                $this->RequestParams["Envs"] = $param["Envs"];
            }
        }
        if (array_key_exists("SupportTensorboard",$param) and $param["SupportTensorboard"] !== null) {
            if(is_bool($param["SupportTensorboard"])){
                $this->RequestParams["SupportTensorboard"] = $param["SupportTensorboard"] ? "true" : "false";
            } else {
                $this->RequestParams["SupportTensorboard"] = $param["SupportTensorboard"];
            }
        }
        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            if(is_bool($param["ImageId"])){
                $this->RequestParams["ImageId"] = $param["ImageId"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageId"] = $param["ImageId"];
            }
        }
        if (array_key_exists("ImageRegistryId",$param) and $param["ImageRegistryId"] !== null) {
            if(is_bool($param["ImageRegistryId"])){
                $this->RequestParams["ImageRegistryId"] = $param["ImageRegistryId"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageRegistryId"] = $param["ImageRegistryId"];
            }
        }
        if (array_key_exists("ImageRepoId",$param) and $param["ImageRepoId"] !== null) {
            if(is_bool($param["ImageRepoId"])){
                $this->RequestParams["ImageRepoId"] = $param["ImageRepoId"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageRepoId"] = $param["ImageRepoId"];
            }
        }
        if (array_key_exists("ImageTagId",$param) and $param["ImageTagId"] !== null) {
            if(is_bool($param["ImageTagId"])){
                $this->RequestParams["ImageTagId"] = $param["ImageTagId"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageTagId"] = $param["ImageTagId"];
            }
        }
        if (array_key_exists("GPUType",$param) and $param["GPUType"] !== null) {
            if(is_bool($param["GPUType"])){
                $this->RequestParams["GPUType"] = $param["GPUType"] ? "true" : "false";
            } else {
                $this->RequestParams["GPUType"] = $param["GPUType"];
            }
        }
        if (array_key_exists("GPUNumber",$param) and $param["GPUNumber"] !== null) {
            if(is_bool($param["GPUNumber"])){
                $this->RequestParams["GPUNumber"] = $param["GPUNumber"] ? "true" : "false";
            } else {
                $this->RequestParams["GPUNumber"] = $param["GPUNumber"];
            }
        }
        if (array_key_exists("CpuNum",$param) and $param["CpuNum"] !== null) {
            if(is_bool($param["CpuNum"])){
                $this->RequestParams["CpuNum"] = $param["CpuNum"] ? "true" : "false";
            } else {
                $this->RequestParams["CpuNum"] = $param["CpuNum"];
            }
        }
        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            if(is_bool($param["Memory"])){
                $this->RequestParams["Memory"] = $param["Memory"] ? "true" : "false";
            } else {
                $this->RequestParams["Memory"] = $param["Memory"];
            }
        }
        if (array_key_exists("StorageConfigs",$param) and $param["StorageConfigs"] !== null) {
            if(is_bool($param["StorageConfigs"])){
                $this->RequestParams["StorageConfigs"] = $param["StorageConfigs"] ? "true" : "false";
            } else {
                $this->RequestParams["StorageConfigs"] = $param["StorageConfigs"];
            }
        }
        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            if(is_bool($param["AccessType"])){
                $this->RequestParams["AccessType"] = $param["AccessType"] ? "true" : "false";
            } else {
                $this->RequestParams["AccessType"] = $param["AccessType"];
            }
        }
        if (array_key_exists("MaxRuntime",$param) and $param["MaxRuntime"] !== null) {
            if(is_bool($param["MaxRuntime"])){
                $this->RequestParams["MaxRuntime"] = $param["MaxRuntime"] ? "true" : "false";
            } else {
                $this->RequestParams["MaxRuntime"] = $param["MaxRuntime"];
            }
        }
        if (array_key_exists("SelfHealing",$param) and $param["SelfHealing"] !== null) {
            if(is_bool($param["SelfHealing"])){
                $this->RequestParams["SelfHealing"] = $param["SelfHealing"] ? "true" : "false";
            } else {
                $this->RequestParams["SelfHealing"] = $param["SelfHealing"];
            }
        }
        if (array_key_exists("RunOnCpu",$param) and $param["RunOnCpu"] !== null) {
            if(is_bool($param["RunOnCpu"])){
                $this->RequestParams["RunOnCpu"] = $param["RunOnCpu"] ? "true" : "false";
            } else {
                $this->RequestParams["RunOnCpu"] = $param["RunOnCpu"];
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