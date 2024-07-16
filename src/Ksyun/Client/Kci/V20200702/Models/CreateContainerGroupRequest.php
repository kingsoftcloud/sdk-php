<?php
namespace  Ksyun\Client\Kci\V20200702\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateContainerGroupRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ContainerGroupName" => null,
         /**String**/
        "SubnetId" => null,
         /**String**/
        "KciType" => null,
         /**String**/
        "InstanceType" => null,
         /**String**/
        "InstanceFamily" => null,
         /**String**/
        "ChargeType" => null,
         /**String**/
        "SpotStrategy" => null,
         /**Int**/
        "ProjectId" => null,
         /**Double**/
        "Cpu" => null,
         /**Double**/
        "Memory" => null,
         /**Double**/
        "Gpu" => null,
         /**String**/
        "KubeConfig" => null,
         /**Boolean**/
        "RetainIp" => null,
         /**Int**/
        "RetainIpHours" => null,
         /**String**/
        "EipAllocationId" => null,
         /**Boolean**/
        "AutoMatchImageCache" => null,
         /**String**/
        "ImageCacheId" => null,
         /**Object**/
        "AdvanceSettings" => null,
         /**Object**/
        "MachineDnsConfig" => null,
         /**String**/
        "RestartPolicy" => null,
         /**Object**/
        "DnsConfig" => null,
         /**String**/
        "ClusterDns" => null,
         /**String**/
        "ClusterDomain" => null,
         /**Object**/
        "KubeProxy" => null,
         /**Boolean**/
        "KlogEnabled" => null,
    ];

     /**特殊参数类型:Filter**/
    public $MultiSubnetId = [];
      /**特殊参数类型:Filter**/
    public $SecurityGroupId = [];
      /**特殊参数类型:Filter**/
    public $MachineHostAliase = [];
      /**特殊参数类型:Filter**/
    public $ImageRegistryCredential = [];
      /**特殊参数类型:Filter**/
    public $Volume = [];
      /**特殊参数类型:Filter**/
    public $Container = [];
      /**特殊参数类型:Filter**/
    public $HostAliase = [];
      /**特殊参数类型:Filter**/
    public $Label = [];
      /**特殊参数类型:Filter**/
    public $DataDisk = [];
      /**特殊参数类型:Filter**/
    public $ContainerSpec = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ContainerGroupName",$param) and $param["ContainerGroupName"] !== null) {
            if(is_bool($param["ContainerGroupName"])){
                $this->RequestParams["ContainerGroupName"] = $param["ContainerGroupName"] ? "true" : "false";
            } else {
                $this->RequestParams["ContainerGroupName"] = $param["ContainerGroupName"];
            }
        }
        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            if(is_bool($param["SubnetId"])){
                $this->RequestParams["SubnetId"] = $param["SubnetId"] ? "true" : "false";
            } else {
                $this->RequestParams["SubnetId"] = $param["SubnetId"];
            }
        }
        if (array_key_exists("MultiSubnetId",$param) and $param["MultiSubnetId"] !== null) {
            $res = $this->formatFilterParams("MultiSubnetId",$param["MultiSubnetId"]);
            $this->_unserialize("MultiSubnetId",$res);
        }
        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $res = $this->formatFilterParams("SecurityGroupId",$param["SecurityGroupId"]);
            $this->_unserialize("SecurityGroupId",$res);
        }
        if (array_key_exists("KciType",$param) and $param["KciType"] !== null) {
            if(is_bool($param["KciType"])){
                $this->RequestParams["KciType"] = $param["KciType"] ? "true" : "false";
            } else {
                $this->RequestParams["KciType"] = $param["KciType"];
            }
        }
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            if(is_bool($param["InstanceType"])){
                $this->RequestParams["InstanceType"] = $param["InstanceType"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceType"] = $param["InstanceType"];
            }
        }
        if (array_key_exists("InstanceFamily",$param) and $param["InstanceFamily"] !== null) {
            if(is_bool($param["InstanceFamily"])){
                $this->RequestParams["InstanceFamily"] = $param["InstanceFamily"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceFamily"] = $param["InstanceFamily"];
            }
        }
        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            if(is_bool($param["ChargeType"])){
                $this->RequestParams["ChargeType"] = $param["ChargeType"] ? "true" : "false";
            } else {
                $this->RequestParams["ChargeType"] = $param["ChargeType"];
            }
        }
        if (array_key_exists("SpotStrategy",$param) and $param["SpotStrategy"] !== null) {
            if(is_bool($param["SpotStrategy"])){
                $this->RequestParams["SpotStrategy"] = $param["SpotStrategy"] ? "true" : "false";
            } else {
                $this->RequestParams["SpotStrategy"] = $param["SpotStrategy"];
            }
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            if(is_bool($param["ProjectId"])){
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
            }
        }
        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            if(is_bool($param["Cpu"])){
                $this->RequestParams["Cpu"] = $param["Cpu"] ? "true" : "false";
            } else {
                $this->RequestParams["Cpu"] = $param["Cpu"];
            }
        }
        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            if(is_bool($param["Memory"])){
                $this->RequestParams["Memory"] = $param["Memory"] ? "true" : "false";
            } else {
                $this->RequestParams["Memory"] = $param["Memory"];
            }
        }
        if (array_key_exists("Gpu",$param) and $param["Gpu"] !== null) {
            if(is_bool($param["Gpu"])){
                $this->RequestParams["Gpu"] = $param["Gpu"] ? "true" : "false";
            } else {
                $this->RequestParams["Gpu"] = $param["Gpu"];
            }
        }
        if (array_key_exists("KubeConfig",$param) and $param["KubeConfig"] !== null) {
            if(is_bool($param["KubeConfig"])){
                $this->RequestParams["KubeConfig"] = $param["KubeConfig"] ? "true" : "false";
            } else {
                $this->RequestParams["KubeConfig"] = $param["KubeConfig"];
            }
        }
        if (array_key_exists("RetainIp",$param) and $param["RetainIp"] !== null) {
            if(is_bool($param["RetainIp"])){
                $this->RequestParams["RetainIp"] = $param["RetainIp"] ? "true" : "false";
            } else {
                $this->RequestParams["RetainIp"] = $param["RetainIp"];
            }
        }
        if (array_key_exists("RetainIpHours",$param) and $param["RetainIpHours"] !== null) {
            if(is_bool($param["RetainIpHours"])){
                $this->RequestParams["RetainIpHours"] = $param["RetainIpHours"] ? "true" : "false";
            } else {
                $this->RequestParams["RetainIpHours"] = $param["RetainIpHours"];
            }
        }
        if (array_key_exists("EipAllocationId",$param) and $param["EipAllocationId"] !== null) {
            if(is_bool($param["EipAllocationId"])){
                $this->RequestParams["EipAllocationId"] = $param["EipAllocationId"] ? "true" : "false";
            } else {
                $this->RequestParams["EipAllocationId"] = $param["EipAllocationId"];
            }
        }
        if (array_key_exists("AutoMatchImageCache",$param) and $param["AutoMatchImageCache"] !== null) {
            if(is_bool($param["AutoMatchImageCache"])){
                $this->RequestParams["AutoMatchImageCache"] = $param["AutoMatchImageCache"] ? "true" : "false";
            } else {
                $this->RequestParams["AutoMatchImageCache"] = $param["AutoMatchImageCache"];
            }
        }
        if (array_key_exists("ImageCacheId",$param) and $param["ImageCacheId"] !== null) {
            if(is_bool($param["ImageCacheId"])){
                $this->RequestParams["ImageCacheId"] = $param["ImageCacheId"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageCacheId"] = $param["ImageCacheId"];
            }
        }
        if (array_key_exists("AdvanceSettings",$param) and $param["AdvanceSettings"] !== null) {
            if(is_bool($param["AdvanceSettings"])){
                $this->RequestParams["AdvanceSettings"] = $param["AdvanceSettings"] ? "true" : "false";
            } else {
                $this->RequestParams["AdvanceSettings"] = $param["AdvanceSettings"];
            }
        }
        if (array_key_exists("MachineDnsConfig",$param) and $param["MachineDnsConfig"] !== null) {
            if(is_bool($param["MachineDnsConfig"])){
                $this->RequestParams["MachineDnsConfig"] = $param["MachineDnsConfig"] ? "true" : "false";
            } else {
                $this->RequestParams["MachineDnsConfig"] = $param["MachineDnsConfig"];
            }
        }
        if (array_key_exists("MachineHostAliase",$param) and $param["MachineHostAliase"] !== null) {
            $res = $this->formatFilterParams("MachineHostAliase",$param["MachineHostAliase"]);
            $this->_unserialize("MachineHostAliase",$res);
        }
        if (array_key_exists("RestartPolicy",$param) and $param["RestartPolicy"] !== null) {
            if(is_bool($param["RestartPolicy"])){
                $this->RequestParams["RestartPolicy"] = $param["RestartPolicy"] ? "true" : "false";
            } else {
                $this->RequestParams["RestartPolicy"] = $param["RestartPolicy"];
            }
        }
        if (array_key_exists("ImageRegistryCredential",$param) and $param["ImageRegistryCredential"] !== null) {
            $res = $this->formatFilterParams("ImageRegistryCredential",$param["ImageRegistryCredential"]);
            $this->_unserialize("ImageRegistryCredential",$res);
        }
        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $res = $this->formatFilterParams("Volume",$param["Volume"]);
            $this->_unserialize("Volume",$res);
        }
        if (array_key_exists("Container",$param) and $param["Container"] !== null) {
            $res = $this->formatFilterParams("Container",$param["Container"]);
            $this->_unserialize("Container",$res);
        }
        if (array_key_exists("DnsConfig",$param) and $param["DnsConfig"] !== null) {
            if(is_bool($param["DnsConfig"])){
                $this->RequestParams["DnsConfig"] = $param["DnsConfig"] ? "true" : "false";
            } else {
                $this->RequestParams["DnsConfig"] = $param["DnsConfig"];
            }
        }
        if (array_key_exists("HostAliase",$param) and $param["HostAliase"] !== null) {
            $res = $this->formatFilterParams("HostAliase",$param["HostAliase"]);
            $this->_unserialize("HostAliase",$res);
        }
        if (array_key_exists("ClusterDns",$param) and $param["ClusterDns"] !== null) {
            if(is_bool($param["ClusterDns"])){
                $this->RequestParams["ClusterDns"] = $param["ClusterDns"] ? "true" : "false";
            } else {
                $this->RequestParams["ClusterDns"] = $param["ClusterDns"];
            }
        }
        if (array_key_exists("ClusterDomain",$param) and $param["ClusterDomain"] !== null) {
            if(is_bool($param["ClusterDomain"])){
                $this->RequestParams["ClusterDomain"] = $param["ClusterDomain"] ? "true" : "false";
            } else {
                $this->RequestParams["ClusterDomain"] = $param["ClusterDomain"];
            }
        }
        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $res = $this->formatFilterParams("Label",$param["Label"]);
            $this->_unserialize("Label",$res);
        }
        if (array_key_exists("KubeProxy",$param) and $param["KubeProxy"] !== null) {
            if(is_bool($param["KubeProxy"])){
                $this->RequestParams["KubeProxy"] = $param["KubeProxy"] ? "true" : "false";
            } else {
                $this->RequestParams["KubeProxy"] = $param["KubeProxy"];
            }
        }
        if (array_key_exists("KlogEnabled",$param) and $param["KlogEnabled"] !== null) {
            if(is_bool($param["KlogEnabled"])){
                $this->RequestParams["KlogEnabled"] = $param["KlogEnabled"] ? "true" : "false";
            } else {
                $this->RequestParams["KlogEnabled"] = $param["KlogEnabled"];
            }
        }
        if (array_key_exists("DataDisk",$param) and $param["DataDisk"] !== null) {
            $res = $this->formatFilterParams("DataDisk",$param["DataDisk"]);
            $this->_unserialize("DataDisk",$res);
        }
        if (array_key_exists("ContainerSpec",$param) and $param["ContainerSpec"] !== null) {
            $res = $this->formatFilterParams("ContainerSpec",$param["ContainerSpec"]);
            $this->_unserialize("ContainerSpec",$res);
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