<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ReinstallEpcRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "HostId" => null,
         /**String**/
        "ImageId" => null,
         /**String**/
        "keyId" => null,
         /**String**/
        "Password" => null,
         /**String**/
        "NetworkInterfaceMode" => null,
         /**String**/
        "SecurityAgent" => null,
         /**String**/
        "CloudMonitorAgent" => null,
         /**String**/
        "Raid" => null,
         /**String**/
        "RaidId" => null,
         /**String**/
        "HostName" => null,
         /**String**/
        "SystemFileType" => null,
         /**String**/
        "DataFileType" => null,
         /**String**/
        "DataDiskCatalogue" => null,
         /**String**/
        "DataDiskCatalogueSuffix" => null,
         /**String**/
        "HyperThreading" => null,
         /**String**/
        "NvmeDataFileType" => null,
         /**String**/
        "NvmeDataDiskCatalogue" => null,
         /**String**/
        "NvmeDataDiskCatalogueSuffix" => null,
         /**String**/
        "bondAttribute" => null,
         /**String**/
        "KesAgent" => null,
         /**String**/
        "KmrAgent" => null,
         /**String**/
        "ComputerName" => null,
         /**String**/
        "OverclockingAttribute" => null,
         /**Int**/
        "DelayStart" => null,
         /**String**/
        "AvailabilityZone" => null,
         /**String**/
        "GpuImageDriverId" => null,
    ];


    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("HostId",$param) and $param["HostId"] !== null) {
            if(is_bool($param["HostId"])){
                $this->RequestParams["HostId"] = $param["HostId"] ? "true" : "false";
            } else {
                $this->RequestParams["HostId"] = $param["HostId"];
            }
        }
        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            if(is_bool($param["ImageId"])){
                $this->RequestParams["ImageId"] = $param["ImageId"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageId"] = $param["ImageId"];
            }
        }
        if (array_key_exists("keyId",$param) and $param["keyId"] !== null) {
            if(is_bool($param["keyId"])){
                $this->RequestParams["keyId"] = $param["keyId"] ? "true" : "false";
            } else {
                $this->RequestParams["keyId"] = $param["keyId"];
            }
        }
        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            if(is_bool($param["Password"])){
                $this->RequestParams["Password"] = $param["Password"] ? "true" : "false";
            } else {
                $this->RequestParams["Password"] = $param["Password"];
            }
        }
        if (array_key_exists("NetworkInterfaceMode",$param) and $param["NetworkInterfaceMode"] !== null) {
            if(is_bool($param["NetworkInterfaceMode"])){
                $this->RequestParams["NetworkInterfaceMode"] = $param["NetworkInterfaceMode"] ? "true" : "false";
            } else {
                $this->RequestParams["NetworkInterfaceMode"] = $param["NetworkInterfaceMode"];
            }
        }
        if (array_key_exists("SecurityAgent",$param) and $param["SecurityAgent"] !== null) {
            if(is_bool($param["SecurityAgent"])){
                $this->RequestParams["SecurityAgent"] = $param["SecurityAgent"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityAgent"] = $param["SecurityAgent"];
            }
        }
        if (array_key_exists("CloudMonitorAgent",$param) and $param["CloudMonitorAgent"] !== null) {
            if(is_bool($param["CloudMonitorAgent"])){
                $this->RequestParams["CloudMonitorAgent"] = $param["CloudMonitorAgent"] ? "true" : "false";
            } else {
                $this->RequestParams["CloudMonitorAgent"] = $param["CloudMonitorAgent"];
            }
        }
        if (array_key_exists("Raid",$param) and $param["Raid"] !== null) {
            if(is_bool($param["Raid"])){
                $this->RequestParams["Raid"] = $param["Raid"] ? "true" : "false";
            } else {
                $this->RequestParams["Raid"] = $param["Raid"];
            }
        }
        if (array_key_exists("RaidId",$param) and $param["RaidId"] !== null) {
            if(is_bool($param["RaidId"])){
                $this->RequestParams["RaidId"] = $param["RaidId"] ? "true" : "false";
            } else {
                $this->RequestParams["RaidId"] = $param["RaidId"];
            }
        }
        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            if(is_bool($param["HostName"])){
                $this->RequestParams["HostName"] = $param["HostName"] ? "true" : "false";
            } else {
                $this->RequestParams["HostName"] = $param["HostName"];
            }
        }
        if (array_key_exists("SystemFileType",$param) and $param["SystemFileType"] !== null) {
            if(is_bool($param["SystemFileType"])){
                $this->RequestParams["SystemFileType"] = $param["SystemFileType"] ? "true" : "false";
            } else {
                $this->RequestParams["SystemFileType"] = $param["SystemFileType"];
            }
        }
        if (array_key_exists("DataFileType",$param) and $param["DataFileType"] !== null) {
            if(is_bool($param["DataFileType"])){
                $this->RequestParams["DataFileType"] = $param["DataFileType"] ? "true" : "false";
            } else {
                $this->RequestParams["DataFileType"] = $param["DataFileType"];
            }
        }
        if (array_key_exists("DataDiskCatalogue",$param) and $param["DataDiskCatalogue"] !== null) {
            if(is_bool($param["DataDiskCatalogue"])){
                $this->RequestParams["DataDiskCatalogue"] = $param["DataDiskCatalogue"] ? "true" : "false";
            } else {
                $this->RequestParams["DataDiskCatalogue"] = $param["DataDiskCatalogue"];
            }
        }
        if (array_key_exists("DataDiskCatalogueSuffix",$param) and $param["DataDiskCatalogueSuffix"] !== null) {
            if(is_bool($param["DataDiskCatalogueSuffix"])){
                $this->RequestParams["DataDiskCatalogueSuffix"] = $param["DataDiskCatalogueSuffix"] ? "true" : "false";
            } else {
                $this->RequestParams["DataDiskCatalogueSuffix"] = $param["DataDiskCatalogueSuffix"];
            }
        }
        if (array_key_exists("HyperThreading",$param) and $param["HyperThreading"] !== null) {
            if(is_bool($param["HyperThreading"])){
                $this->RequestParams["HyperThreading"] = $param["HyperThreading"] ? "true" : "false";
            } else {
                $this->RequestParams["HyperThreading"] = $param["HyperThreading"];
            }
        }
        if (array_key_exists("NvmeDataFileType",$param) and $param["NvmeDataFileType"] !== null) {
            if(is_bool($param["NvmeDataFileType"])){
                $this->RequestParams["NvmeDataFileType"] = $param["NvmeDataFileType"] ? "true" : "false";
            } else {
                $this->RequestParams["NvmeDataFileType"] = $param["NvmeDataFileType"];
            }
        }
        if (array_key_exists("NvmeDataDiskCatalogue",$param) and $param["NvmeDataDiskCatalogue"] !== null) {
            if(is_bool($param["NvmeDataDiskCatalogue"])){
                $this->RequestParams["NvmeDataDiskCatalogue"] = $param["NvmeDataDiskCatalogue"] ? "true" : "false";
            } else {
                $this->RequestParams["NvmeDataDiskCatalogue"] = $param["NvmeDataDiskCatalogue"];
            }
        }
        if (array_key_exists("NvmeDataDiskCatalogueSuffix",$param) and $param["NvmeDataDiskCatalogueSuffix"] !== null) {
            if(is_bool($param["NvmeDataDiskCatalogueSuffix"])){
                $this->RequestParams["NvmeDataDiskCatalogueSuffix"] = $param["NvmeDataDiskCatalogueSuffix"] ? "true" : "false";
            } else {
                $this->RequestParams["NvmeDataDiskCatalogueSuffix"] = $param["NvmeDataDiskCatalogueSuffix"];
            }
        }
        if (array_key_exists("bondAttribute",$param) and $param["bondAttribute"] !== null) {
            if(is_bool($param["bondAttribute"])){
                $this->RequestParams["bondAttribute"] = $param["bondAttribute"] ? "true" : "false";
            } else {
                $this->RequestParams["bondAttribute"] = $param["bondAttribute"];
            }
        }
        if (array_key_exists("KesAgent",$param) and $param["KesAgent"] !== null) {
            if(is_bool($param["KesAgent"])){
                $this->RequestParams["KesAgent"] = $param["KesAgent"] ? "true" : "false";
            } else {
                $this->RequestParams["KesAgent"] = $param["KesAgent"];
            }
        }
        if (array_key_exists("KmrAgent",$param) and $param["KmrAgent"] !== null) {
            if(is_bool($param["KmrAgent"])){
                $this->RequestParams["KmrAgent"] = $param["KmrAgent"] ? "true" : "false";
            } else {
                $this->RequestParams["KmrAgent"] = $param["KmrAgent"];
            }
        }
        if (array_key_exists("ComputerName",$param) and $param["ComputerName"] !== null) {
            if(is_bool($param["ComputerName"])){
                $this->RequestParams["ComputerName"] = $param["ComputerName"] ? "true" : "false";
            } else {
                $this->RequestParams["ComputerName"] = $param["ComputerName"];
            }
        }
        if (array_key_exists("OverclockingAttribute",$param) and $param["OverclockingAttribute"] !== null) {
            if(is_bool($param["OverclockingAttribute"])){
                $this->RequestParams["OverclockingAttribute"] = $param["OverclockingAttribute"] ? "true" : "false";
            } else {
                $this->RequestParams["OverclockingAttribute"] = $param["OverclockingAttribute"];
            }
        }
        if (array_key_exists("DelayStart",$param) and $param["DelayStart"] !== null) {
            if(is_bool($param["DelayStart"])){
                $this->RequestParams["DelayStart"] = $param["DelayStart"] ? "true" : "false";
            } else {
                $this->RequestParams["DelayStart"] = $param["DelayStart"];
            }
        }
        if (array_key_exists("AvailabilityZone",$param) and $param["AvailabilityZone"] !== null) {
            if(is_bool($param["AvailabilityZone"])){
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"] ? "true" : "false";
            } else {
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"];
            }
        }
        if (array_key_exists("GpuImageDriverId",$param) and $param["GpuImageDriverId"] !== null) {
            if(is_bool($param["GpuImageDriverId"])){
                $this->RequestParams["GpuImageDriverId"] = $param["GpuImageDriverId"] ? "true" : "false";
            } else {
                $this->RequestParams["GpuImageDriverId"] = $param["GpuImageDriverId"];
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