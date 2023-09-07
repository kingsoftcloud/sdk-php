<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateScalingConfigurationRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ScalingConfigurationName" => null,
         /**String**/
        "ImageId" => null,
         /**String**/
        "Password" => null,
         /**String**/
        "InstanceType" => null,
         /**String**/
        "ChargeType" => null,
         /**Int**/
        "DataDiskGb" => null,
         /**Int**/
        "ProjectId" => null,
         /**Boolean**/
        "KeepImageLogin" => null,
         /**String**/
        "SystemDisk.DiskSize" => null,
         /**Int**/
        "AddressBandWidth" => null,
         /**String**/
        "BandWidthShareId" => null,
         /**String**/
        "LineId" => null,
         /**Int**/
        "AddressProjectId" => null,
         /**String**/
        "InstanceName" => null,
         /**String**/
        "InstanceNameSuffix" => null,
         /**String**/
        "UserData" => null,
         /**Boolean**/
        "InstanceNameTimeSuffix" => null,
         /**String**/
        "SystemDisk.DiskType" => null,
         /**String**/
        "SystemDisk.ResizeType" => null,
    ];

     /**特殊参数类型:Filter**/
    public $KeyId = [];
      /**特殊参数类型:Filter**/
    public $DataDisk = [];
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
        if (array_key_exists("ScalingConfigurationName",$param) and $param["ScalingConfigurationName"] !== null) {
            if(is_bool($param["ScalingConfigurationName"])){
                $this->RequestParams["ScalingConfigurationName"] = $param["ScalingConfigurationName"] ? "true" : "false";
            } else {
                $this->RequestParams["ScalingConfigurationName"] = $param["ScalingConfigurationName"];
            }
        }
        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            if(is_bool($param["ImageId"])){
                $this->RequestParams["ImageId"] = $param["ImageId"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageId"] = $param["ImageId"];
            }
        }
        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            if(is_bool($param["Password"])){
                $this->RequestParams["Password"] = $param["Password"] ? "true" : "false";
            } else {
                $this->RequestParams["Password"] = $param["Password"];
            }
        }
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            if(is_bool($param["InstanceType"])){
                $this->RequestParams["InstanceType"] = $param["InstanceType"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceType"] = $param["InstanceType"];
            }
        }
        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            if(is_bool($param["ChargeType"])){
                $this->RequestParams["ChargeType"] = $param["ChargeType"] ? "true" : "false";
            } else {
                $this->RequestParams["ChargeType"] = $param["ChargeType"];
            }
        }
        if (array_key_exists("DataDiskGb",$param) and $param["DataDiskGb"] !== null) {
            if(is_bool($param["DataDiskGb"])){
                $this->RequestParams["DataDiskGb"] = $param["DataDiskGb"] ? "true" : "false";
            } else {
                $this->RequestParams["DataDiskGb"] = $param["DataDiskGb"];
            }
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            if(is_bool($param["ProjectId"])){
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
            }
        }
        if (array_key_exists("KeepImageLogin",$param) and $param["KeepImageLogin"] !== null) {
            if(is_bool($param["KeepImageLogin"])){
                $this->RequestParams["KeepImageLogin"] = $param["KeepImageLogin"] ? "true" : "false";
            } else {
                $this->RequestParams["KeepImageLogin"] = $param["KeepImageLogin"];
            }
        }
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $res = $this->formatFilterParams("KeyId",$param["KeyId"]);
            $this->_unserialize("KeyId",$res);
        }
        if (array_key_exists("DataDisk",$param) and $param["DataDisk"] !== null) {
            $res = $this->formatFilterParams("DataDisk",$param["DataDisk"]);
            $this->_unserialize("DataDisk",$res);
        }
        if (array_key_exists("SystemDisk.DiskSize",$param) and $param["SystemDisk.DiskSize"] !== null) {
            if(is_bool($param["SystemDisk.DiskSize"])){
                $this->RequestParams["SystemDisk.DiskSize"] = $param["SystemDisk.DiskSize"] ? "true" : "false";
            } else {
                $this->RequestParams["SystemDisk.DiskSize"] = $param["SystemDisk.DiskSize"];
            }
        }
        if (array_key_exists("AddressBandWidth",$param) and $param["AddressBandWidth"] !== null) {
            if(is_bool($param["AddressBandWidth"])){
                $this->RequestParams["AddressBandWidth"] = $param["AddressBandWidth"] ? "true" : "false";
            } else {
                $this->RequestParams["AddressBandWidth"] = $param["AddressBandWidth"];
            }
        }
        if (array_key_exists("BandWidthShareId",$param) and $param["BandWidthShareId"] !== null) {
            if(is_bool($param["BandWidthShareId"])){
                $this->RequestParams["BandWidthShareId"] = $param["BandWidthShareId"] ? "true" : "false";
            } else {
                $this->RequestParams["BandWidthShareId"] = $param["BandWidthShareId"];
            }
        }
        if (array_key_exists("LineId",$param) and $param["LineId"] !== null) {
            if(is_bool($param["LineId"])){
                $this->RequestParams["LineId"] = $param["LineId"] ? "true" : "false";
            } else {
                $this->RequestParams["LineId"] = $param["LineId"];
            }
        }
        if (array_key_exists("AddressProjectId",$param) and $param["AddressProjectId"] !== null) {
            if(is_bool($param["AddressProjectId"])){
                $this->RequestParams["AddressProjectId"] = $param["AddressProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["AddressProjectId"] = $param["AddressProjectId"];
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
        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            if(is_bool($param["UserData"])){
                $this->RequestParams["UserData"] = $param["UserData"] ? "true" : "false";
            } else {
                $this->RequestParams["UserData"] = $param["UserData"];
            }
        }
        if (array_key_exists("InstanceNameTimeSuffix",$param) and $param["InstanceNameTimeSuffix"] !== null) {
            if(is_bool($param["InstanceNameTimeSuffix"])){
                $this->RequestParams["InstanceNameTimeSuffix"] = $param["InstanceNameTimeSuffix"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceNameTimeSuffix"] = $param["InstanceNameTimeSuffix"];
            }
        }
        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $res = $this->formatFilterParams("Tag",$param["Tag"]);
            $this->_unserialize("Tag",$res);
        }
        if (array_key_exists("SystemDisk.DiskType",$param) and $param["SystemDisk.DiskType"] !== null) {
            if(is_bool($param["SystemDisk.DiskType"])){
                $this->RequestParams["SystemDisk.DiskType"] = $param["SystemDisk.DiskType"] ? "true" : "false";
            } else {
                $this->RequestParams["SystemDisk.DiskType"] = $param["SystemDisk.DiskType"];
            }
        }
        if (array_key_exists("SystemDisk.ResizeType",$param) and $param["SystemDisk.ResizeType"] !== null) {
            if(is_bool($param["SystemDisk.ResizeType"])){
                $this->RequestParams["SystemDisk.ResizeType"] = $param["SystemDisk.ResizeType"] ? "true" : "false";
            } else {
                $this->RequestParams["SystemDisk.ResizeType"] = $param["SystemDisk.ResizeType"];
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