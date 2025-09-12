<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateModelRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ImageId" => null,
         /**String**/
        "InstanceType" => null,
         /**Int**/
        "DataDiskGb" => null,
         /**String**/
        "SubnetId" => null,
         /**Boolean**/
        "KeepImageLogin" => null,
         /**String**/
        "KeyId" => null,
         /**String**/
        "ChargeType" => null,
         /**Int**/
        "PurchaseTime" => null,
         /**String**/
        "PrivateIpAddress" => null,
         /**String**/
        "InstanceName" => null,
         /**String**/
        "InstanceNameSuffix" => null,
         /**String**/
        "SriovNetSupport" => null,
         /**Int**/
        "ProjectId" => null,
         /**String**/
        "DataGuardId" => null,
         /**Int**/
        "AddressBandWidth" => null,
         /**String**/
        "LineId" => null,
         /**String**/
        "AddressChargeType" => null,
         /**Int**/
        "AddressPurchaseTime" => null,
         /**String**/
        "AddressProjectId" => null,
         /**String**/
        "ModelName" => null,
         /**Boolean**/
        "FailureAutoDelete" => null,
         /**Object**/
        "SystemDisk" => null,
         /**String**/
        "HostName" => null,
         /**String**/
        "HostNameSuffix" => null,
         /**String**/
        "UserData" => null,
         /**Boolean**/
        "AllocateAddress" => null,
         /**Boolean**/
        "IsDistributeIpv6" => null,
         /**String**/
        "Mem" => null,
         /**String**/
        "Cpu" => null,
         /**String**/
        "IamRoleName" => null,
         /**String**/
        "AssembledImageDataDiskType" => null,
         /**String**/
        "LocalVolumeSnapshotId" => null,
         /**Boolean**/
        "SyncTag" => null,
    ];

     /**特殊参数类型:Filter**/
    public $DataDisk = [];
      /**特殊参数类型:Filter**/
    public $SecurityGroupId = [];
      /**特殊参数类型:Filter**/
    public $NetworkInterface = [];
      /**特殊参数类型:Filter**/
    public $Tag = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            if(is_bool($param["ImageId"])){
                $this->RequestParams["ImageId"] = $param["ImageId"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageId"] = $param["ImageId"];
            }
        }
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            if(is_bool($param["InstanceType"])){
                $this->RequestParams["InstanceType"] = $param["InstanceType"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceType"] = $param["InstanceType"];
            }
        }
        if (array_key_exists("DataDiskGb",$param) and $param["DataDiskGb"] !== null) {
            if(is_bool($param["DataDiskGb"])){
                $this->RequestParams["DataDiskGb"] = $param["DataDiskGb"] ? "true" : "false";
            } else {
                $this->RequestParams["DataDiskGb"] = $param["DataDiskGb"];
            }
        }
        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            if(is_bool($param["SubnetId"])){
                $this->RequestParams["SubnetId"] = $param["SubnetId"] ? "true" : "false";
            } else {
                $this->RequestParams["SubnetId"] = $param["SubnetId"];
            }
        }
        if (array_key_exists("DataDisk",$param) and $param["DataDisk"] !== null) {
            $res = $this->formatFilterParams("DataDisk",$param["DataDisk"]);
            $this->_unserialize("DataDisk",$res);
        }
        if (array_key_exists("KeepImageLogin",$param) and $param["KeepImageLogin"] !== null) {
            if(is_bool($param["KeepImageLogin"])){
                $this->RequestParams["KeepImageLogin"] = $param["KeepImageLogin"] ? "true" : "false";
            } else {
                $this->RequestParams["KeepImageLogin"] = $param["KeepImageLogin"];
            }
        }
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            if(is_bool($param["KeyId"])){
                $this->RequestParams["KeyId"] = $param["KeyId"] ? "true" : "false";
            } else {
                $this->RequestParams["KeyId"] = $param["KeyId"];
            }
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
        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $res = $this->formatFilterParams("SecurityGroupId",$param["SecurityGroupId"]);
            $this->_unserialize("SecurityGroupId",$res);
        }
        if (array_key_exists("PrivateIpAddress",$param) and $param["PrivateIpAddress"] !== null) {
            if(is_bool($param["PrivateIpAddress"])){
                $this->RequestParams["PrivateIpAddress"] = $param["PrivateIpAddress"] ? "true" : "false";
            } else {
                $this->RequestParams["PrivateIpAddress"] = $param["PrivateIpAddress"];
            }
        }
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            if(is_bool($param["InstanceName"])){
                $this->RequestParams["InstanceName"] = $param["InstanceName"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceName"] = $param["InstanceName"];
            }
        }
        if (array_key_exists("InstanceNameSuffix",$param) and $param["InstanceNameSuffix"] !== null) {
            if(is_bool($param["InstanceNameSuffix"])){
                $this->RequestParams["InstanceNameSuffix"] = $param["InstanceNameSuffix"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceNameSuffix"] = $param["InstanceNameSuffix"];
            }
        }
        if (array_key_exists("SriovNetSupport",$param) and $param["SriovNetSupport"] !== null) {
            if(is_bool($param["SriovNetSupport"])){
                $this->RequestParams["SriovNetSupport"] = $param["SriovNetSupport"] ? "true" : "false";
            } else {
                $this->RequestParams["SriovNetSupport"] = $param["SriovNetSupport"];
            }
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            if(is_bool($param["ProjectId"])){
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
            }
        }
        if (array_key_exists("DataGuardId",$param) and $param["DataGuardId"] !== null) {
            if(is_bool($param["DataGuardId"])){
                $this->RequestParams["DataGuardId"] = $param["DataGuardId"] ? "true" : "false";
            } else {
                $this->RequestParams["DataGuardId"] = $param["DataGuardId"];
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
        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            if(is_bool($param["ModelName"])){
                $this->RequestParams["ModelName"] = $param["ModelName"] ? "true" : "false";
            } else {
                $this->RequestParams["ModelName"] = $param["ModelName"];
            }
        }
        if (array_key_exists("FailureAutoDelete",$param) and $param["FailureAutoDelete"] !== null) {
            if(is_bool($param["FailureAutoDelete"])){
                $this->RequestParams["FailureAutoDelete"] = $param["FailureAutoDelete"] ? "true" : "false";
            } else {
                $this->RequestParams["FailureAutoDelete"] = $param["FailureAutoDelete"];
            }
        }
        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            if(is_bool($param["SystemDisk"])){
                $this->RequestParams["SystemDisk"] = $param["SystemDisk"] ? "true" : "false";
            } else {
                $this->RequestParams["SystemDisk"] = $param["SystemDisk"];
            }
        }
        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            if(is_bool($param["HostName"])){
                $this->RequestParams["HostName"] = $param["HostName"] ? "true" : "false";
            } else {
                $this->RequestParams["HostName"] = $param["HostName"];
            }
        }
        if (array_key_exists("HostNameSuffix",$param) and $param["HostNameSuffix"] !== null) {
            if(is_bool($param["HostNameSuffix"])){
                $this->RequestParams["HostNameSuffix"] = $param["HostNameSuffix"] ? "true" : "false";
            } else {
                $this->RequestParams["HostNameSuffix"] = $param["HostNameSuffix"];
            }
        }
        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            if(is_bool($param["UserData"])){
                $this->RequestParams["UserData"] = $param["UserData"] ? "true" : "false";
            } else {
                $this->RequestParams["UserData"] = $param["UserData"];
            }
        }
        if (array_key_exists("NetworkInterface",$param) and $param["NetworkInterface"] !== null) {
            $res = $this->formatFilterParams("NetworkInterface",$param["NetworkInterface"]);
            $this->_unserialize("NetworkInterface",$res);
        }
        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $res = $this->formatFilterParams("Tag",$param["Tag"]);
            $this->_unserialize("Tag",$res);
        }
        if (array_key_exists("AllocateAddress",$param) and $param["AllocateAddress"] !== null) {
            if(is_bool($param["AllocateAddress"])){
                $this->RequestParams["AllocateAddress"] = $param["AllocateAddress"] ? "true" : "false";
            } else {
                $this->RequestParams["AllocateAddress"] = $param["AllocateAddress"];
            }
        }
        if (array_key_exists("IsDistributeIpv6",$param) and $param["IsDistributeIpv6"] !== null) {
            if(is_bool($param["IsDistributeIpv6"])){
                $this->RequestParams["IsDistributeIpv6"] = $param["IsDistributeIpv6"] ? "true" : "false";
            } else {
                $this->RequestParams["IsDistributeIpv6"] = $param["IsDistributeIpv6"];
            }
        }
        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            if(is_bool($param["Mem"])){
                $this->RequestParams["Mem"] = $param["Mem"] ? "true" : "false";
            } else {
                $this->RequestParams["Mem"] = $param["Mem"];
            }
        }
        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            if(is_bool($param["Cpu"])){
                $this->RequestParams["Cpu"] = $param["Cpu"] ? "true" : "false";
            } else {
                $this->RequestParams["Cpu"] = $param["Cpu"];
            }
        }
        if (array_key_exists("IamRoleName",$param) and $param["IamRoleName"] !== null) {
            if(is_bool($param["IamRoleName"])){
                $this->RequestParams["IamRoleName"] = $param["IamRoleName"] ? "true" : "false";
            } else {
                $this->RequestParams["IamRoleName"] = $param["IamRoleName"];
            }
        }
        if (array_key_exists("AssembledImageDataDiskType",$param) and $param["AssembledImageDataDiskType"] !== null) {
            if(is_bool($param["AssembledImageDataDiskType"])){
                $this->RequestParams["AssembledImageDataDiskType"] = $param["AssembledImageDataDiskType"] ? "true" : "false";
            } else {
                $this->RequestParams["AssembledImageDataDiskType"] = $param["AssembledImageDataDiskType"];
            }
        }
        if (array_key_exists("LocalVolumeSnapshotId",$param) and $param["LocalVolumeSnapshotId"] !== null) {
            if(is_bool($param["LocalVolumeSnapshotId"])){
                $this->RequestParams["LocalVolumeSnapshotId"] = $param["LocalVolumeSnapshotId"] ? "true" : "false";
            } else {
                $this->RequestParams["LocalVolumeSnapshotId"] = $param["LocalVolumeSnapshotId"];
            }
        }
        if (array_key_exists("SyncTag",$param) and $param["SyncTag"] !== null) {
            if(is_bool($param["SyncTag"])){
                $this->RequestParams["SyncTag"] = $param["SyncTag"] ? "true" : "false";
            } else {
                $this->RequestParams["SyncTag"] = $param["SyncTag"];
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