<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateInferenceRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "InferenceName" => null,
         /**String**/
        "Description" => null,
         /**String**/
        "ResourcePoolId" => null,
         /**String**/
        "QueueName" => null,
         /**Int**/
        "Replicas" => null,
         /**String**/
        "AccessType" => null,
         /**String**/
        "DeploymentType" => null,
         /**String**/
        "Engine" => null,
         /**String**/
        "ModelName" => null,
         /**Array**/
        "CmdOptions" => null,
         /**Boolean**/
        "ModelStorageEnabled" => null,
         /**String**/
        "ModelStoragePath" => null,
         /**String**/
        "EntryPoint" => null,
         /**String**/
        "ImageSource" => null,
         /**String**/
        "ImageId" => null,
         /**String**/
        "ImageRegistryId" => null,
         /**String**/
        "ImageRepoId" => null,
         /**String**/
        "ImageTagId" => null,
         /**String**/
        "SubnetId" => null,
         /**Int**/
        "Port" => null,
         /**Array**/
        "Env" => null,
         /**String**/
        "GPUType" => null,
         /**String**/
        "GPUNum" => null,
         /**Int**/
        "CPUNum" => null,
         /**Int**/
        "Memory" => null,
         /**Boolean**/
        "AutoScaleEnable" => null,
         /**Object**/
        "AutoScaleStrategy" => null,
         /**Boolean**/
        "RunOnCPU" => null,
         /**Boolean**/
        "Distributed" => null,
         /**Boolean**/
        "NodeNum" => null,
         /**Array**/
        "StorageConfigs" => null,
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
        if (array_key_exists("InferenceName",$param) and $param["InferenceName"] !== null) {
            if(is_bool($param["InferenceName"])){
                $this->RequestParams["InferenceName"] = $param["InferenceName"] ? "true" : "false";
            } else {
                $this->RequestParams["InferenceName"] = $param["InferenceName"];
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
        if (array_key_exists("Replicas",$param) and $param["Replicas"] !== null) {
            if(is_bool($param["Replicas"])){
                $this->RequestParams["Replicas"] = $param["Replicas"] ? "true" : "false";
            } else {
                $this->RequestParams["Replicas"] = $param["Replicas"];
            }
        }
        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            if(is_bool($param["AccessType"])){
                $this->RequestParams["AccessType"] = $param["AccessType"] ? "true" : "false";
            } else {
                $this->RequestParams["AccessType"] = $param["AccessType"];
            }
        }
        if (array_key_exists("DeploymentType",$param) and $param["DeploymentType"] !== null) {
            if(is_bool($param["DeploymentType"])){
                $this->RequestParams["DeploymentType"] = $param["DeploymentType"] ? "true" : "false";
            } else {
                $this->RequestParams["DeploymentType"] = $param["DeploymentType"];
            }
        }
        if (array_key_exists("Engine",$param) and $param["Engine"] !== null) {
            if(is_bool($param["Engine"])){
                $this->RequestParams["Engine"] = $param["Engine"] ? "true" : "false";
            } else {
                $this->RequestParams["Engine"] = $param["Engine"];
            }
        }
        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            if(is_bool($param["ModelName"])){
                $this->RequestParams["ModelName"] = $param["ModelName"] ? "true" : "false";
            } else {
                $this->RequestParams["ModelName"] = $param["ModelName"];
            }
        }
        if (array_key_exists("CmdOptions",$param) and $param["CmdOptions"] !== null) {
            if(is_bool($param["CmdOptions"])){
                $this->RequestParams["CmdOptions"] = $param["CmdOptions"] ? "true" : "false";
            } else {
                $this->RequestParams["CmdOptions"] = $param["CmdOptions"];
            }
        }
        if (array_key_exists("ModelStorageEnabled",$param) and $param["ModelStorageEnabled"] !== null) {
            if(is_bool($param["ModelStorageEnabled"])){
                $this->RequestParams["ModelStorageEnabled"] = $param["ModelStorageEnabled"] ? "true" : "false";
            } else {
                $this->RequestParams["ModelStorageEnabled"] = $param["ModelStorageEnabled"];
            }
        }
        if (array_key_exists("ModelStoragePath",$param) and $param["ModelStoragePath"] !== null) {
            if(is_bool($param["ModelStoragePath"])){
                $this->RequestParams["ModelStoragePath"] = $param["ModelStoragePath"] ? "true" : "false";
            } else {
                $this->RequestParams["ModelStoragePath"] = $param["ModelStoragePath"];
            }
        }
        if (array_key_exists("EntryPoint",$param) and $param["EntryPoint"] !== null) {
            if(is_bool($param["EntryPoint"])){
                $this->RequestParams["EntryPoint"] = $param["EntryPoint"] ? "true" : "false";
            } else {
                $this->RequestParams["EntryPoint"] = $param["EntryPoint"];
            }
        }
        if (array_key_exists("ImageSource",$param) and $param["ImageSource"] !== null) {
            if(is_bool($param["ImageSource"])){
                $this->RequestParams["ImageSource"] = $param["ImageSource"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageSource"] = $param["ImageSource"];
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
        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            if(is_bool($param["SubnetId"])){
                $this->RequestParams["SubnetId"] = $param["SubnetId"] ? "true" : "false";
            } else {
                $this->RequestParams["SubnetId"] = $param["SubnetId"];
            }
        }
        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            if(is_bool($param["Port"])){
                $this->RequestParams["Port"] = $param["Port"] ? "true" : "false";
            } else {
                $this->RequestParams["Port"] = $param["Port"];
            }
        }
        if (array_key_exists("Env",$param) and $param["Env"] !== null) {
            if(is_bool($param["Env"])){
                $this->RequestParams["Env"] = $param["Env"] ? "true" : "false";
            } else {
                $this->RequestParams["Env"] = $param["Env"];
            }
        }
        if (array_key_exists("GPUType",$param) and $param["GPUType"] !== null) {
            if(is_bool($param["GPUType"])){
                $this->RequestParams["GPUType"] = $param["GPUType"] ? "true" : "false";
            } else {
                $this->RequestParams["GPUType"] = $param["GPUType"];
            }
        }
        if (array_key_exists("GPUNum",$param) and $param["GPUNum"] !== null) {
            if(is_bool($param["GPUNum"])){
                $this->RequestParams["GPUNum"] = $param["GPUNum"] ? "true" : "false";
            } else {
                $this->RequestParams["GPUNum"] = $param["GPUNum"];
            }
        }
        if (array_key_exists("CPUNum",$param) and $param["CPUNum"] !== null) {
            if(is_bool($param["CPUNum"])){
                $this->RequestParams["CPUNum"] = $param["CPUNum"] ? "true" : "false";
            } else {
                $this->RequestParams["CPUNum"] = $param["CPUNum"];
            }
        }
        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            if(is_bool($param["Memory"])){
                $this->RequestParams["Memory"] = $param["Memory"] ? "true" : "false";
            } else {
                $this->RequestParams["Memory"] = $param["Memory"];
            }
        }
        if (array_key_exists("AutoScaleEnable",$param) and $param["AutoScaleEnable"] !== null) {
            if(is_bool($param["AutoScaleEnable"])){
                $this->RequestParams["AutoScaleEnable"] = $param["AutoScaleEnable"] ? "true" : "false";
            } else {
                $this->RequestParams["AutoScaleEnable"] = $param["AutoScaleEnable"];
            }
        }
        if (array_key_exists("AutoScaleStrategy",$param) and $param["AutoScaleStrategy"] !== null) {
            if(is_bool($param["AutoScaleStrategy"])){
                $this->RequestParams["AutoScaleStrategy"] = $param["AutoScaleStrategy"] ? "true" : "false";
            } else {
                $this->RequestParams["AutoScaleStrategy"] = $param["AutoScaleStrategy"];
            }
        }
        if (array_key_exists("RunOnCPU",$param) and $param["RunOnCPU"] !== null) {
            if(is_bool($param["RunOnCPU"])){
                $this->RequestParams["RunOnCPU"] = $param["RunOnCPU"] ? "true" : "false";
            } else {
                $this->RequestParams["RunOnCPU"] = $param["RunOnCPU"];
            }
        }
        if (array_key_exists("Distributed",$param) and $param["Distributed"] !== null) {
            if(is_bool($param["Distributed"])){
                $this->RequestParams["Distributed"] = $param["Distributed"] ? "true" : "false";
            } else {
                $this->RequestParams["Distributed"] = $param["Distributed"];
            }
        }
        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            if(is_bool($param["NodeNum"])){
                $this->RequestParams["NodeNum"] = $param["NodeNum"] ? "true" : "false";
            } else {
                $this->RequestParams["NodeNum"] = $param["NodeNum"];
            }
        }
        if (array_key_exists("StorageConfigs",$param) and $param["StorageConfigs"] !== null) {
            if(is_bool($param["StorageConfigs"])){
                $this->RequestParams["StorageConfigs"] = $param["StorageConfigs"] ? "true" : "false";
            } else {
                $this->RequestParams["StorageConfigs"] = $param["StorageConfigs"];
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