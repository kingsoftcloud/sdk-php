<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateLaunchTemplateRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ChargeType" => null,
         /**Int**/
        "PurchaseTime" => null,
         /**String**/
        "AvailabilityZone" => null,
         /**String**/
        "HostType" => null,
         /**String**/
        "NetworkInterfaceMode" => null,
         /**String**/
        "BondAttribute" => null,
         /**String**/
        "ImageId" => null,
         /**String**/
        "GpuImageDriverId" => null,
         /**String**/
        "Raid" => null,
         /**String**/
        "RaidId" => null,
         /**String**/
        "DataDiskMount" => null,
         /**String**/
        "SystemFileType" => null,
         /**String**/
        "DataFileType" => null,
         /**String**/
        "DataDiskCatalogue" => null,
         /**String**/
        "DataDiskCatalogueSuffix" => null,
         /**String**/
        "NvmeDataFileType" => null,
         /**String**/
        "NvmeDataDiskCatalogue" => null,
         /**String**/
        "NvmeDataDiskCatalogueSuffix" => null,
         /**String**/
        "SubnetId" => null,
         /**String**/
        "ExtensionSubnetId" => null,
         /**String**/
        "AddressBandWidth" => null,
         /**String**/
        "LineId" => null,
         /**String**/
        "BandWidthShareId" => null,
         /**String**/
        "AddressChargeType" => null,
         /**Int**/
        "AddressPurchaseTime" => null,
         /**String**/
        "AddressProjectId" => null,
         /**String**/
        "LaunchTemplateName" => null,
         /**String**/
        "VersionDescription" => null,
         /**String**/
        "HostName" => null,
         /**String**/
        "Description" => null,
         /**String**/
        "ComputerName" => null,
         /**Int**/
        "HostNameStartNo" => null,
         /**Int**/
        "ComputerNameStartNo" => null,
         /**String**/
        "ProjectId" => null,
         /**String**/
        "KeyId" => null,
         /**String**/
        "PasswordInherit" => null,
         /**String**/
        "CloudMonitorAgent" => null,
         /**String**/
        "ContainerAgent" => null,
         /**String**/
        "ZoneId" => null,
         /**String**/
        "ZoneType" => null,
         /**String**/
        "StorageRoceNetworkCardName" => null,
         /**String**/
        "UserData" => null,
    ];

     /**特殊参数类型:Filter**/
    public $SecurityGroupId = [];
      /**特殊参数类型:Filter**/
    public $ExtensionSecurityGroupId = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            if(is_bool($param["ChargeType"])){
                $this->RequestParams["ChargeType"] = $param["ChargeType"] ? "true" : "false";
            } else {
                $this->RequestParams["ChargeType"] = $param["ChargeType"];
            }
        }
        if (array_key_exists("PurchaseTime",$param) and $param["PurchaseTime"] !== null) {
            if(is_bool($param["PurchaseTime"])){
                $this->RequestParams["PurchaseTime"] = $param["PurchaseTime"] ? "true" : "false";
            } else {
                $this->RequestParams["PurchaseTime"] = $param["PurchaseTime"];
            }
        }
        if (array_key_exists("AvailabilityZone",$param) and $param["AvailabilityZone"] !== null) {
            if(is_bool($param["AvailabilityZone"])){
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"] ? "true" : "false";
            } else {
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"];
            }
        }
        if (array_key_exists("HostType",$param) and $param["HostType"] !== null) {
            if(is_bool($param["HostType"])){
                $this->RequestParams["HostType"] = $param["HostType"] ? "true" : "false";
            } else {
                $this->RequestParams["HostType"] = $param["HostType"];
            }
        }
        if (array_key_exists("NetworkInterfaceMode",$param) and $param["NetworkInterfaceMode"] !== null) {
            if(is_bool($param["NetworkInterfaceMode"])){
                $this->RequestParams["NetworkInterfaceMode"] = $param["NetworkInterfaceMode"] ? "true" : "false";
            } else {
                $this->RequestParams["NetworkInterfaceMode"] = $param["NetworkInterfaceMode"];
            }
        }
        if (array_key_exists("BondAttribute",$param) and $param["BondAttribute"] !== null) {
            if(is_bool($param["BondAttribute"])){
                $this->RequestParams["BondAttribute"] = $param["BondAttribute"] ? "true" : "false";
            } else {
                $this->RequestParams["BondAttribute"] = $param["BondAttribute"];
            }
        }
        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            if(is_bool($param["ImageId"])){
                $this->RequestParams["ImageId"] = $param["ImageId"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageId"] = $param["ImageId"];
            }
        }
        if (array_key_exists("GpuImageDriverId",$param) and $param["GpuImageDriverId"] !== null) {
            if(is_bool($param["GpuImageDriverId"])){
                $this->RequestParams["GpuImageDriverId"] = $param["GpuImageDriverId"] ? "true" : "false";
            } else {
                $this->RequestParams["GpuImageDriverId"] = $param["GpuImageDriverId"];
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
        if (array_key_exists("DataDiskMount",$param) and $param["DataDiskMount"] !== null) {
            if(is_bool($param["DataDiskMount"])){
                $this->RequestParams["DataDiskMount"] = $param["DataDiskMount"] ? "true" : "false";
            } else {
                $this->RequestParams["DataDiskMount"] = $param["DataDiskMount"];
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
        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            if(is_bool($param["SubnetId"])){
                $this->RequestParams["SubnetId"] = $param["SubnetId"] ? "true" : "false";
            } else {
                $this->RequestParams["SubnetId"] = $param["SubnetId"];
            }
        }
        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $res = $this->formatFilterParams("SecurityGroupId",$param["SecurityGroupId"]);
            $this->_unserialize("SecurityGroupId",$res);
        }
        if (array_key_exists("ExtensionSubnetId",$param) and $param["ExtensionSubnetId"] !== null) {
            if(is_bool($param["ExtensionSubnetId"])){
                $this->RequestParams["ExtensionSubnetId"] = $param["ExtensionSubnetId"] ? "true" : "false";
            } else {
                $this->RequestParams["ExtensionSubnetId"] = $param["ExtensionSubnetId"];
            }
        }
        if (array_key_exists("ExtensionSecurityGroupId",$param) and $param["ExtensionSecurityGroupId"] !== null) {
            $res = $this->formatFilterParams("ExtensionSecurityGroupId",$param["ExtensionSecurityGroupId"]);
            $this->_unserialize("ExtensionSecurityGroupId",$res);
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
        if (array_key_exists("LaunchTemplateName",$param) and $param["LaunchTemplateName"] !== null) {
            if(is_bool($param["LaunchTemplateName"])){
                $this->RequestParams["LaunchTemplateName"] = $param["LaunchTemplateName"] ? "true" : "false";
            } else {
                $this->RequestParams["LaunchTemplateName"] = $param["LaunchTemplateName"];
            }
        }
        if (array_key_exists("VersionDescription",$param) and $param["VersionDescription"] !== null) {
            if(is_bool($param["VersionDescription"])){
                $this->RequestParams["VersionDescription"] = $param["VersionDescription"] ? "true" : "false";
            } else {
                $this->RequestParams["VersionDescription"] = $param["VersionDescription"];
            }
        }
        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            if(is_bool($param["HostName"])){
                $this->RequestParams["HostName"] = $param["HostName"] ? "true" : "false";
            } else {
                $this->RequestParams["HostName"] = $param["HostName"];
            }
        }
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            if(is_bool($param["Description"])){
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
            }
        }
        if (array_key_exists("ComputerName",$param) and $param["ComputerName"] !== null) {
            if(is_bool($param["ComputerName"])){
                $this->RequestParams["ComputerName"] = $param["ComputerName"] ? "true" : "false";
            } else {
                $this->RequestParams["ComputerName"] = $param["ComputerName"];
            }
        }
        if (array_key_exists("HostNameStartNo",$param) and $param["HostNameStartNo"] !== null) {
            if(is_bool($param["HostNameStartNo"])){
                $this->RequestParams["HostNameStartNo"] = $param["HostNameStartNo"] ? "true" : "false";
            } else {
                $this->RequestParams["HostNameStartNo"] = $param["HostNameStartNo"];
            }
        }
        if (array_key_exists("ComputerNameStartNo",$param) and $param["ComputerNameStartNo"] !== null) {
            if(is_bool($param["ComputerNameStartNo"])){
                $this->RequestParams["ComputerNameStartNo"] = $param["ComputerNameStartNo"] ? "true" : "false";
            } else {
                $this->RequestParams["ComputerNameStartNo"] = $param["ComputerNameStartNo"];
            }
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            if(is_bool($param["ProjectId"])){
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
            }
        }
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            if(is_bool($param["KeyId"])){
                $this->RequestParams["KeyId"] = $param["KeyId"] ? "true" : "false";
            } else {
                $this->RequestParams["KeyId"] = $param["KeyId"];
            }
        }
        if (array_key_exists("PasswordInherit",$param) and $param["PasswordInherit"] !== null) {
            if(is_bool($param["PasswordInherit"])){
                $this->RequestParams["PasswordInherit"] = $param["PasswordInherit"] ? "true" : "false";
            } else {
                $this->RequestParams["PasswordInherit"] = $param["PasswordInherit"];
            }
        }
        if (array_key_exists("CloudMonitorAgent",$param) and $param["CloudMonitorAgent"] !== null) {
            if(is_bool($param["CloudMonitorAgent"])){
                $this->RequestParams["CloudMonitorAgent"] = $param["CloudMonitorAgent"] ? "true" : "false";
            } else {
                $this->RequestParams["CloudMonitorAgent"] = $param["CloudMonitorAgent"];
            }
        }
        if (array_key_exists("ContainerAgent",$param) and $param["ContainerAgent"] !== null) {
            if(is_bool($param["ContainerAgent"])){
                $this->RequestParams["ContainerAgent"] = $param["ContainerAgent"] ? "true" : "false";
            } else {
                $this->RequestParams["ContainerAgent"] = $param["ContainerAgent"];
            }
        }
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            if(is_bool($param["ZoneId"])){
                $this->RequestParams["ZoneId"] = $param["ZoneId"] ? "true" : "false";
            } else {
                $this->RequestParams["ZoneId"] = $param["ZoneId"];
            }
        }
        if (array_key_exists("ZoneType",$param) and $param["ZoneType"] !== null) {
            if(is_bool($param["ZoneType"])){
                $this->RequestParams["ZoneType"] = $param["ZoneType"] ? "true" : "false";
            } else {
                $this->RequestParams["ZoneType"] = $param["ZoneType"];
            }
        }
        if (array_key_exists("StorageRoceNetworkCardName",$param) and $param["StorageRoceNetworkCardName"] !== null) {
            if(is_bool($param["StorageRoceNetworkCardName"])){
                $this->RequestParams["StorageRoceNetworkCardName"] = $param["StorageRoceNetworkCardName"] ? "true" : "false";
            } else {
                $this->RequestParams["StorageRoceNetworkCardName"] = $param["StorageRoceNetworkCardName"];
            }
        }
        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            if(is_bool($param["UserData"])){
                $this->RequestParams["UserData"] = $param["UserData"] ? "true" : "false";
            } else {
                $this->RequestParams["UserData"] = $param["UserData"];
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