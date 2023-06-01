<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyInstanceTypeRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "InstanceId" => null,
         /**String**/
        "InstanceType" => null,
         /**String**/
        "InstanceConfigure.VCPU" => null,
         /**String**/
        "InstanceConfigure.MemoryGb" => null,
         /**Int**/
        "DataDiskGb" => null,
         /**Boolean**/
        "CrossInstanceMigrate" => null,
         /**String**/
        "SystemDisk.DiskType" => null,
         /**Boolean**/
        "StopInstance" => null,
         /**Boolean**/
        "AutoRestart" => null,
         /**Int**/
        "SystemDisk.DiskSize" => null,
         /**String**/
        "SystemDisk.ResizeType" => null,
    ];

     /**特殊参数类型:Filter**/
    public $DataDisk = [];
 
    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            if(is_bool($param["InstanceId"])){
                $this->RequestParams["InstanceId"] = $param["InstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceId"] = $param["InstanceId"];
            }
        }
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            if(is_bool($param["InstanceType"])){
                $this->RequestParams["InstanceType"] = $param["InstanceType"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceType"] = $param["InstanceType"];
            }
        }
        if (array_key_exists("InstanceConfigure.VCPU",$param) and $param["InstanceConfigure.VCPU"] !== null) {
            if(is_bool($param["InstanceConfigure.VCPU"])){
                $this->RequestParams["InstanceConfigure.VCPU"] = $param["InstanceConfigure.VCPU"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceConfigure.VCPU"] = $param["InstanceConfigure.VCPU"];
            }
        }
        if (array_key_exists("InstanceConfigure.MemoryGb",$param) and $param["InstanceConfigure.MemoryGb"] !== null) {
            if(is_bool($param["InstanceConfigure.MemoryGb"])){
                $this->RequestParams["InstanceConfigure.MemoryGb"] = $param["InstanceConfigure.MemoryGb"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceConfigure.MemoryGb"] = $param["InstanceConfigure.MemoryGb"];
            }
        }
        if (array_key_exists("DataDiskGb",$param) and $param["DataDiskGb"] !== null) {
            if(is_bool($param["DataDiskGb"])){
                $this->RequestParams["DataDiskGb"] = $param["DataDiskGb"] ? "true" : "false";
            } else {
                $this->RequestParams["DataDiskGb"] = $param["DataDiskGb"];
            }
        }
        if (array_key_exists("CrossInstanceMigrate",$param) and $param["CrossInstanceMigrate"] !== null) {
            if(is_bool($param["CrossInstanceMigrate"])){
                $this->RequestParams["CrossInstanceMigrate"] = $param["CrossInstanceMigrate"] ? "true" : "false";
            } else {
                $this->RequestParams["CrossInstanceMigrate"] = $param["CrossInstanceMigrate"];
            }
        }
        if (array_key_exists("SystemDisk.DiskType",$param) and $param["SystemDisk.DiskType"] !== null) {
            if(is_bool($param["SystemDisk.DiskType"])){
                $this->RequestParams["SystemDisk.DiskType"] = $param["SystemDisk.DiskType"] ? "true" : "false";
            } else {
                $this->RequestParams["SystemDisk.DiskType"] = $param["SystemDisk.DiskType"];
            }
        }
        if (array_key_exists("DataDisk",$param) and $param["DataDisk"] !== null) {
            $res = $this->formatFilterParams("DataDisk",$param["DataDisk"]);
            $this->_unserialize("DataDisk",$res);
        }
        if (array_key_exists("StopInstance",$param) and $param["StopInstance"] !== null) {
            if(is_bool($param["StopInstance"])){
                $this->RequestParams["StopInstance"] = $param["StopInstance"] ? "true" : "false";
            } else {
                $this->RequestParams["StopInstance"] = $param["StopInstance"];
            }
        }
        if (array_key_exists("AutoRestart",$param) and $param["AutoRestart"] !== null) {
            if(is_bool($param["AutoRestart"])){
                $this->RequestParams["AutoRestart"] = $param["AutoRestart"] ? "true" : "false";
            } else {
                $this->RequestParams["AutoRestart"] = $param["AutoRestart"];
            }
        }
        if (array_key_exists("SystemDisk.DiskSize",$param) and $param["SystemDisk.DiskSize"] !== null) {
            if(is_bool($param["SystemDisk.DiskSize"])){
                $this->RequestParams["SystemDisk.DiskSize"] = $param["SystemDisk.DiskSize"] ? "true" : "false";
            } else {
                $this->RequestParams["SystemDisk.DiskSize"] = $param["SystemDisk.DiskSize"];
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