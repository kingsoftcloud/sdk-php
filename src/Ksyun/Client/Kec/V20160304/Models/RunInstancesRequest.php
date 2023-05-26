<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class RunInstancesRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ImageId" => null,
         /**String**/
        "DedicatedHostId" => null,
         /**String**/
        "InstanceConfigure.VCPU" => null,
         /**String**/
        "InstanceConfigure.MemoryGb" => null,
         /**String**/
        "InstanceType" => null,
         /**Int**/
        "DataDiskGb" => null,
         /**Int**/
        "MaxCount" => null,
         /**Int**/
        "MinCount" => null,
         /**String**/
        "SubnetId" => null,
         /**String**/
        "InstancePassword" => null,
         /**String**/
        "ChargeType" => null,
         /**Int**/
        "PurchaseTime" => null,
         /**String**/
        "SecurityGroupId" => null,
         /**String**/
        "PrivateIpAddress" => null,
         /**String**/
        "InstanceName" => null,
         /**String**/
        "InstanceNameSuffix" => null,
         /**Int**/
        "ProjectId" => null,
    ];

     /**特殊参数类型:Filter**/
    public $DataDisk = [];
      /**特殊参数类型:Filter**/
    public $NetworkInterface = [];
 
    public function __construct()
    {

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
        if (array_key_exists("DedicatedHostId",$param) and $param["DedicatedHostId"] !== null) {
            if(is_bool($param["DedicatedHostId"])){
                $this->RequestParams["DedicatedHostId"] = $param["DedicatedHostId"] ? "true" : "false";
            } else {
                $this->RequestParams["DedicatedHostId"] = $param["DedicatedHostId"];
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
        if (array_key_exists("MaxCount",$param) and $param["MaxCount"] !== null) {
            if(is_bool($param["MaxCount"])){
                $this->RequestParams["MaxCount"] = $param["MaxCount"] ? "true" : "false";
            } else {
                $this->RequestParams["MaxCount"] = $param["MaxCount"];
            }
        }
        if (array_key_exists("MinCount",$param) and $param["MinCount"] !== null) {
            if(is_bool($param["MinCount"])){
                $this->RequestParams["MinCount"] = $param["MinCount"] ? "true" : "false";
            } else {
                $this->RequestParams["MinCount"] = $param["MinCount"];
            }
        }
        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            if(is_bool($param["SubnetId"])){
                $this->RequestParams["SubnetId"] = $param["SubnetId"] ? "true" : "false";
            } else {
                $this->RequestParams["SubnetId"] = $param["SubnetId"];
            }
        }
        if (array_key_exists("InstancePassword",$param) and $param["InstancePassword"] !== null) {
            if(is_bool($param["InstancePassword"])){
                $this->RequestParams["InstancePassword"] = $param["InstancePassword"] ? "true" : "false";
            } else {
                $this->RequestParams["InstancePassword"] = $param["InstancePassword"];
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
            if(is_bool($param["SecurityGroupId"])){
                $this->RequestParams["SecurityGroupId"] = $param["SecurityGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupId"] = $param["SecurityGroupId"];
            }
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            if(is_bool($param["ProjectId"])){
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
            }
        }
        if (array_key_exists("DataDisk",$param) and $param["DataDisk"] !== null) {
            $res = $this->formatFilterParams("DataDisk",$param["DataDisk"]);
            $this->_unserialize("DataDisk",$res);
        }
        if (array_key_exists("NetworkInterface",$param) and $param["NetworkInterface"] !== null) {
            $res = $this->formatFilterParams("NetworkInterface",$param["NetworkInterface"]);
            $this->_unserialize("NetworkInterface",$res);
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