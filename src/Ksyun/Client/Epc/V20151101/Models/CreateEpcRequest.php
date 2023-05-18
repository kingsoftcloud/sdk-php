<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;

class CreateEpcRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "HostType" => null,
         /**String**/
        "AvailabilityZone" => null,
         /**String**/
        "Raid" => null,
         /**String**/
        "RaidId" => null,
         /**String**/
        "RaidInfo" => null,
         /**String**/
        "ImageId" => null,
         /**String**/
        "NetworkInterfaceMode" => null,
         /**String**/
        "SubnetId" => null,
         /**String**/
        "PrivateIpAddress" => null,
         /**String**/
        "keyId" => null,
         /**String**/
        "DNS1" => null,
         /**String**/
        "DNS2" => null,
         /**String**/
        "HostName" => null,
         /**String**/
        "ProjectId" => null,
         /**String**/
        "ChargeType" => null,
         /**String**/
        "Sn" => null,
         /**Int**/
        "PurchaseTime" => null,
         /**String**/
        "Password" => null,
         /**String**/
        "SecurityAgent" => null,
         /**String**/
        "CloudMonitorAgent" => null,
         /**String**/
        "ExtensionSubnetId" => null,
         /**String**/
        "ExtensionPrivateIpAddress" => null,
         /**String**/
        "ExtensionDNS1" => null,
         /**String**/
        "ExtensionDNS2" => null,
         /**String**/
        "Description" => null,
         /**String**/
        "HostId" => null,
         /**String**/
        "AddressBandWidth" => null,
         /**String**/
        "LineId" => null,
         /**String**/
        "BandWidthShareId" => null,
         /**String**/
        "AddressChargeType" => null,
         /**String**/
        "AddressPurchaseTime" => null,
         /**String**/
        "AddressProjectId" => null,
         /**String**/
        "ContainerInfo" => null,
         /**Int**/
        "LimitDay" => null,
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
        "ContainerAgent" => null,
         /**String**/
        "KesAgent" => null,
         /**String**/
        "KmrAgent" => null,
         /**String**/
        "ComputerName" => null,
         /**String**/
        "OverclockingAttribute" => null,
         /**String**/
        "GpuImageDriverId" => null,
         /**String**/
        "SystemVolumeType" => null,
         /**String**/
        "SystemVolumeSize" => null,
    ];

     /**特殊参数类型:Filter**/
    public $SecurityGroupId = [];
 
    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("HostType",$param) and $param["HostType"] !== null) {
            if(is_bool($param["HostType"])){
                $this->RequestParams["HostType"] = $param["HostType"] ? "true" : "false";
            } else {
                $this->RequestParams["HostType"] = $param["HostType"];
            }
        }
        if (array_key_exists("AvailabilityZone",$param) and $param["AvailabilityZone"] !== null) {
            if(is_bool($param["AvailabilityZone"])){
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"] ? "true" : "false";
            } else {
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"];
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
        if (array_key_exists("RaidInfo",$param) and $param["RaidInfo"] !== null) {
            if(is_bool($param["RaidInfo"])){
                $this->RequestParams["RaidInfo"] = $param["RaidInfo"] ? "true" : "false";
            } else {
                $this->RequestParams["RaidInfo"] = $param["RaidInfo"];
            }
        }
        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            if(is_bool($param["ImageId"])){
                $this->RequestParams["ImageId"] = $param["ImageId"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageId"] = $param["ImageId"];
            }
        }
        if (array_key_exists("NetworkInterfaceMode",$param) and $param["NetworkInterfaceMode"] !== null) {
            if(is_bool($param["NetworkInterfaceMode"])){
                $this->RequestParams["NetworkInterfaceMode"] = $param["NetworkInterfaceMode"] ? "true" : "false";
            } else {
                $this->RequestParams["NetworkInterfaceMode"] = $param["NetworkInterfaceMode"];
            }
        }
        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            if(is_bool($param["SubnetId"])){
                $this->RequestParams["SubnetId"] = $param["SubnetId"] ? "true" : "false";
            } else {
                $this->RequestParams["SubnetId"] = $param["SubnetId"];
            }
        }
        if (array_key_exists("PrivateIpAddress",$param) and $param["PrivateIpAddress"] !== null) {
            if(is_bool($param["PrivateIpAddress"])){
                $this->RequestParams["PrivateIpAddress"] = $param["PrivateIpAddress"] ? "true" : "false";
            } else {
                $this->RequestParams["PrivateIpAddress"] = $param["PrivateIpAddress"];
            }
        }
        if (array_key_exists("keyId",$param) and $param["keyId"] !== null) {
            if(is_bool($param["keyId"])){
                $this->RequestParams["keyId"] = $param["keyId"] ? "true" : "false";
            } else {
                $this->RequestParams["keyId"] = $param["keyId"];
            }
        }
        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $res = $this->formatFilterParams("SecurityGroupId",$param["SecurityGroupId"]);
            $this->_unserialize("SecurityGroupId",$res);
        }
        if (array_key_exists("DNS1",$param) and $param["DNS1"] !== null) {
            if(is_bool($param["DNS1"])){
                $this->RequestParams["DNS1"] = $param["DNS1"] ? "true" : "false";
            } else {
                $this->RequestParams["DNS1"] = $param["DNS1"];
            }
        }
        if (array_key_exists("DNS2",$param) and $param["DNS2"] !== null) {
            if(is_bool($param["DNS2"])){
                $this->RequestParams["DNS2"] = $param["DNS2"] ? "true" : "false";
            } else {
                $this->RequestParams["DNS2"] = $param["DNS2"];
            }
        }
        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            if(is_bool($param["HostName"])){
                $this->RequestParams["HostName"] = $param["HostName"] ? "true" : "false";
            } else {
                $this->RequestParams["HostName"] = $param["HostName"];
            }
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            if(is_bool($param["ProjectId"])){
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
            }
        }
        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            if(is_bool($param["ChargeType"])){
                $this->RequestParams["ChargeType"] = $param["ChargeType"] ? "true" : "false";
            } else {
                $this->RequestParams["ChargeType"] = $param["ChargeType"];
            }
        }
        if (array_key_exists("Sn",$param) and $param["Sn"] !== null) {
            if(is_bool($param["Sn"])){
                $this->RequestParams["Sn"] = $param["Sn"] ? "true" : "false";
            } else {
                $this->RequestParams["Sn"] = $param["Sn"];
            }
        }
        if (array_key_exists("PurchaseTime",$param) and $param["PurchaseTime"] !== null) {
            if(is_bool($param["PurchaseTime"])){
                $this->RequestParams["PurchaseTime"] = $param["PurchaseTime"] ? "true" : "false";
            } else {
                $this->RequestParams["PurchaseTime"] = $param["PurchaseTime"];
            }
        }
        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            if(is_bool($param["Password"])){
                $this->RequestParams["Password"] = $param["Password"] ? "true" : "false";
            } else {
                $this->RequestParams["Password"] = $param["Password"];
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
        if (array_key_exists("ExtensionSubnetId",$param) and $param["ExtensionSubnetId"] !== null) {
            if(is_bool($param["ExtensionSubnetId"])){
                $this->RequestParams["ExtensionSubnetId"] = $param["ExtensionSubnetId"] ? "true" : "false";
            } else {
                $this->RequestParams["ExtensionSubnetId"] = $param["ExtensionSubnetId"];
            }
        }
        if (array_key_exists("ExtensionPrivateIpAddress",$param) and $param["ExtensionPrivateIpAddress"] !== null) {
            if(is_bool($param["ExtensionPrivateIpAddress"])){
                $this->RequestParams["ExtensionPrivateIpAddress"] = $param["ExtensionPrivateIpAddress"] ? "true" : "false";
            } else {
                $this->RequestParams["ExtensionPrivateIpAddress"] = $param["ExtensionPrivateIpAddress"];
            }
        }
        if (array_key_exists("ExtensionDNS1",$param) and $param["ExtensionDNS1"] !== null) {
            if(is_bool($param["ExtensionDNS1"])){
                $this->RequestParams["ExtensionDNS1"] = $param["ExtensionDNS1"] ? "true" : "false";
            } else {
                $this->RequestParams["ExtensionDNS1"] = $param["ExtensionDNS1"];
            }
        }
        if (array_key_exists("ExtensionDNS2",$param) and $param["ExtensionDNS2"] !== null) {
            if(is_bool($param["ExtensionDNS2"])){
                $this->RequestParams["ExtensionDNS2"] = $param["ExtensionDNS2"] ? "true" : "false";
            } else {
                $this->RequestParams["ExtensionDNS2"] = $param["ExtensionDNS2"];
            }
        }
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            if(is_bool($param["Description"])){
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
            }
        }
        if (array_key_exists("HostId",$param) and $param["HostId"] !== null) {
            if(is_bool($param["HostId"])){
                $this->RequestParams["HostId"] = $param["HostId"] ? "true" : "false";
            } else {
                $this->RequestParams["HostId"] = $param["HostId"];
            }
        }
        if (array_key_exists("AddressBandWidth",$param) and $param["AddressBandWidth"] !== null) {
            if(is_bool($param["AddressBandWidth"])){
                $this->RequestParams["AddressBandWidth"] = $param["AddressBandWidth"] ? "true" : "false";
            } else {
                $this->RequestParams["AddressBandWidth"] = $param["AddressBandWidth"];
            }
        }
        if (array_key_exists("LineId",$param) and $param["LineId"] !== null) {
            if(is_bool($param["LineId"])){
                $this->RequestParams["LineId"] = $param["LineId"] ? "true" : "false";
            } else {
                $this->RequestParams["LineId"] = $param["LineId"];
            }
        }
        if (array_key_exists("BandWidthShareId",$param) and $param["BandWidthShareId"] !== null) {
            if(is_bool($param["BandWidthShareId"])){
                $this->RequestParams["BandWidthShareId"] = $param["BandWidthShareId"] ? "true" : "false";
            } else {
                $this->RequestParams["BandWidthShareId"] = $param["BandWidthShareId"];
            }
        }
        if (array_key_exists("AddressChargeType",$param) and $param["AddressChargeType"] !== null) {
            if(is_bool($param["AddressChargeType"])){
                $this->RequestParams["AddressChargeType"] = $param["AddressChargeType"] ? "true" : "false";
            } else {
                $this->RequestParams["AddressChargeType"] = $param["AddressChargeType"];
            }
        }
        if (array_key_exists("AddressPurchaseTime",$param) and $param["AddressPurchaseTime"] !== null) {
            if(is_bool($param["AddressPurchaseTime"])){
                $this->RequestParams["AddressPurchaseTime"] = $param["AddressPurchaseTime"] ? "true" : "false";
            } else {
                $this->RequestParams["AddressPurchaseTime"] = $param["AddressPurchaseTime"];
            }
        }
        if (array_key_exists("AddressProjectId",$param) and $param["AddressProjectId"] !== null) {
            if(is_bool($param["AddressProjectId"])){
                $this->RequestParams["AddressProjectId"] = $param["AddressProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["AddressProjectId"] = $param["AddressProjectId"];
            }
        }
        if (array_key_exists("ContainerInfo",$param) and $param["ContainerInfo"] !== null) {
            if(is_bool($param["ContainerInfo"])){
                $this->RequestParams["ContainerInfo"] = $param["ContainerInfo"] ? "true" : "false";
            } else {
                $this->RequestParams["ContainerInfo"] = $param["ContainerInfo"];
            }
        }
        if (array_key_exists("LimitDay",$param) and $param["LimitDay"] !== null) {
            if(is_bool($param["LimitDay"])){
                $this->RequestParams["LimitDay"] = $param["LimitDay"] ? "true" : "false";
            } else {
                $this->RequestParams["LimitDay"] = $param["LimitDay"];
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
        if (array_key_exists("ContainerAgent",$param) and $param["ContainerAgent"] !== null) {
            if(is_bool($param["ContainerAgent"])){
                $this->RequestParams["ContainerAgent"] = $param["ContainerAgent"] ? "true" : "false";
            } else {
                $this->RequestParams["ContainerAgent"] = $param["ContainerAgent"];
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
        if (array_key_exists("GpuImageDriverId",$param) and $param["GpuImageDriverId"] !== null) {
            if(is_bool($param["GpuImageDriverId"])){
                $this->RequestParams["GpuImageDriverId"] = $param["GpuImageDriverId"] ? "true" : "false";
            } else {
                $this->RequestParams["GpuImageDriverId"] = $param["GpuImageDriverId"];
            }
        }
        if (array_key_exists("SystemVolumeType",$param) and $param["SystemVolumeType"] !== null) {
            if(is_bool($param["SystemVolumeType"])){
                $this->RequestParams["SystemVolumeType"] = $param["SystemVolumeType"] ? "true" : "false";
            } else {
                $this->RequestParams["SystemVolumeType"] = $param["SystemVolumeType"];
            }
        }
        if (array_key_exists("SystemVolumeSize",$param) and $param["SystemVolumeSize"] !== null) {
            if(is_bool($param["SystemVolumeSize"])){
                $this->RequestParams["SystemVolumeSize"] = $param["SystemVolumeSize"] ? "true" : "false";
            } else {
                $this->RequestParams["SystemVolumeSize"] = $param["SystemVolumeSize"];
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