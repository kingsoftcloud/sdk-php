<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyNotebookRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "NotebookId" => null,
         /**String**/
        "NotebookName" => null,
         /**String**/
        "Description" => null,
         /**String**/
        "ImageId" => null,
         /**String**/
        "QueueName" => null,
         /**String**/
        "GPUType" => null,
         /**String**/
        "GPUNumber" => null,
         /**Int**/
        "CPUNum" => null,
         /**Int**/
        "Memory" => null,
         /**String**/
        "AccessType" => null,
         /**Boolean**/
        "EnablePublicNetworkSsh" => null,
         /**String**/
        "SshAuthorizedKeys" => null,
         /**Array**/
        "StorageConfigs" => null,
         /**Array**/
        "ServiceConfigs" => null,
         /**Boolean**/
        "AutoSave" => null,
         /**String**/
        "RunOnCPU" => null,
         /**String**/
        "EnableSSH" => null,
         /**Int**/
        "SSHPort" => null,
         /**String**/
        "SSHAuthorizedKeys" => null,
         /**Boolean**/
        "EnablePublicNetworkSSH" => null,
         /**String**/
        "AllocationId" => null,
         /**String**/
        "ImageTagId" => null,
         /**String**/
        "ImageSource" => null,
         /**String**/
        "ImageRepoId" => null,
         /**String**/
        "ImageRegistryId" => null,
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
        if (array_key_exists("NotebookId",$param) and $param["NotebookId"] !== null) {
            if(is_bool($param["NotebookId"])){
                $this->RequestParams["NotebookId"] = $param["NotebookId"] ? "true" : "false";
            } else {
                $this->RequestParams["NotebookId"] = $param["NotebookId"];
            }
        }
        if (array_key_exists("NotebookName",$param) and $param["NotebookName"] !== null) {
            if(is_bool($param["NotebookName"])){
                $this->RequestParams["NotebookName"] = $param["NotebookName"] ? "true" : "false";
            } else {
                $this->RequestParams["NotebookName"] = $param["NotebookName"];
            }
        }
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            if(is_bool($param["Description"])){
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
            }
        }
        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            if(is_bool($param["ImageId"])){
                $this->RequestParams["ImageId"] = $param["ImageId"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageId"] = $param["ImageId"];
            }
        }
        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            if(is_bool($param["QueueName"])){
                $this->RequestParams["QueueName"] = $param["QueueName"] ? "true" : "false";
            } else {
                $this->RequestParams["QueueName"] = $param["QueueName"];
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
        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            if(is_bool($param["AccessType"])){
                $this->RequestParams["AccessType"] = $param["AccessType"] ? "true" : "false";
            } else {
                $this->RequestParams["AccessType"] = $param["AccessType"];
            }
        }
        if (array_key_exists("EnablePublicNetworkSsh",$param) and $param["EnablePublicNetworkSsh"] !== null) {
            if(is_bool($param["EnablePublicNetworkSsh"])){
                $this->RequestParams["EnablePublicNetworkSsh"] = $param["EnablePublicNetworkSsh"] ? "true" : "false";
            } else {
                $this->RequestParams["EnablePublicNetworkSsh"] = $param["EnablePublicNetworkSsh"];
            }
        }
        if (array_key_exists("SshAuthorizedKeys",$param) and $param["SshAuthorizedKeys"] !== null) {
            if(is_bool($param["SshAuthorizedKeys"])){
                $this->RequestParams["SshAuthorizedKeys"] = $param["SshAuthorizedKeys"] ? "true" : "false";
            } else {
                $this->RequestParams["SshAuthorizedKeys"] = $param["SshAuthorizedKeys"];
            }
        }
        if (array_key_exists("StorageConfigs",$param) and $param["StorageConfigs"] !== null) {
            if(is_bool($param["StorageConfigs"])){
                $this->RequestParams["StorageConfigs"] = $param["StorageConfigs"] ? "true" : "false";
            } else {
                $this->RequestParams["StorageConfigs"] = $param["StorageConfigs"];
            }
        }
        if (array_key_exists("ServiceConfigs",$param) and $param["ServiceConfigs"] !== null) {
            if(is_bool($param["ServiceConfigs"])){
                $this->RequestParams["ServiceConfigs"] = $param["ServiceConfigs"] ? "true" : "false";
            } else {
                $this->RequestParams["ServiceConfigs"] = $param["ServiceConfigs"];
            }
        }
        if (array_key_exists("AutoSave",$param) and $param["AutoSave"] !== null) {
            if(is_bool($param["AutoSave"])){
                $this->RequestParams["AutoSave"] = $param["AutoSave"] ? "true" : "false";
            } else {
                $this->RequestParams["AutoSave"] = $param["AutoSave"];
            }
        }
        if (array_key_exists("RunOnCPU",$param) and $param["RunOnCPU"] !== null) {
            if(is_bool($param["RunOnCPU"])){
                $this->RequestParams["RunOnCPU"] = $param["RunOnCPU"] ? "true" : "false";
            } else {
                $this->RequestParams["RunOnCPU"] = $param["RunOnCPU"];
            }
        }
        if (array_key_exists("EnableSSH",$param) and $param["EnableSSH"] !== null) {
            if(is_bool($param["EnableSSH"])){
                $this->RequestParams["EnableSSH"] = $param["EnableSSH"] ? "true" : "false";
            } else {
                $this->RequestParams["EnableSSH"] = $param["EnableSSH"];
            }
        }
        if (array_key_exists("SSHPort",$param) and $param["SSHPort"] !== null) {
            if(is_bool($param["SSHPort"])){
                $this->RequestParams["SSHPort"] = $param["SSHPort"] ? "true" : "false";
            } else {
                $this->RequestParams["SSHPort"] = $param["SSHPort"];
            }
        }
        if (array_key_exists("SSHAuthorizedKeys",$param) and $param["SSHAuthorizedKeys"] !== null) {
            if(is_bool($param["SSHAuthorizedKeys"])){
                $this->RequestParams["SSHAuthorizedKeys"] = $param["SSHAuthorizedKeys"] ? "true" : "false";
            } else {
                $this->RequestParams["SSHAuthorizedKeys"] = $param["SSHAuthorizedKeys"];
            }
        }
        if (array_key_exists("EnablePublicNetworkSSH",$param) and $param["EnablePublicNetworkSSH"] !== null) {
            if(is_bool($param["EnablePublicNetworkSSH"])){
                $this->RequestParams["EnablePublicNetworkSSH"] = $param["EnablePublicNetworkSSH"] ? "true" : "false";
            } else {
                $this->RequestParams["EnablePublicNetworkSSH"] = $param["EnablePublicNetworkSSH"];
            }
        }
        if (array_key_exists("AllocationId",$param) and $param["AllocationId"] !== null) {
            if(is_bool($param["AllocationId"])){
                $this->RequestParams["AllocationId"] = $param["AllocationId"] ? "true" : "false";
            } else {
                $this->RequestParams["AllocationId"] = $param["AllocationId"];
            }
        }
        if (array_key_exists("ImageTagId",$param) and $param["ImageTagId"] !== null) {
            if(is_bool($param["ImageTagId"])){
                $this->RequestParams["ImageTagId"] = $param["ImageTagId"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageTagId"] = $param["ImageTagId"];
            }
        }
        if (array_key_exists("ImageSource",$param) and $param["ImageSource"] !== null) {
            if(is_bool($param["ImageSource"])){
                $this->RequestParams["ImageSource"] = $param["ImageSource"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageSource"] = $param["ImageSource"];
            }
        }
        if (array_key_exists("ImageRepoId",$param) and $param["ImageRepoId"] !== null) {
            if(is_bool($param["ImageRepoId"])){
                $this->RequestParams["ImageRepoId"] = $param["ImageRepoId"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageRepoId"] = $param["ImageRepoId"];
            }
        }
        if (array_key_exists("ImageRegistryId",$param) and $param["ImageRegistryId"] !== null) {
            if(is_bool($param["ImageRegistryId"])){
                $this->RequestParams["ImageRegistryId"] = $param["ImageRegistryId"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageRegistryId"] = $param["ImageRegistryId"];
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