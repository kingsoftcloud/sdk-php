<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class RunSoInstancesRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ImageId" => null,
         /**String**/
        "InstanceName" => null,
         /**String**/
        "InstanceTypeId" => null,
         /**String**/
        "SubnetId" => null,
         /**Object**/
        "Volumes" => null,
         /**String**/
        "ZoneId" => null,
         /**String**/
        "Description" => null,
         /**String**/
        "HostName" => null,
         /**String**/
        "InstanceChargeType" => null,
         /**Boolean**/
        "KeepImageCredential" => null,
         /**String**/
        "KeyPairName" => null,
         /**String**/
        "Password" => null,
         /**Int**/
        "Period" => null,
         /**Int**/
        "SuffixIndex" => null,
         /**Boolean**/
        "UniqueSuffix" => null,
    ];

     /**特殊参数类型:Filter**/
    public $SecurityGroupId = [];
 
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
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            if(is_bool($param["InstanceName"])){
                $this->RequestParams["InstanceName"] = $param["InstanceName"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceName"] = $param["InstanceName"];
            }
        }
        if (array_key_exists("InstanceTypeId",$param) and $param["InstanceTypeId"] !== null) {
            if(is_bool($param["InstanceTypeId"])){
                $this->RequestParams["InstanceTypeId"] = $param["InstanceTypeId"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceTypeId"] = $param["InstanceTypeId"];
            }
        }
        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $res = $this->formatFilterParams("SecurityGroupId",$param["SecurityGroupId"]);
            $this->_unserialize("SecurityGroupId",$res);
        }
        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            if(is_bool($param["SubnetId"])){
                $this->RequestParams["SubnetId"] = $param["SubnetId"] ? "true" : "false";
            } else {
                $this->RequestParams["SubnetId"] = $param["SubnetId"];
            }
        }
        if (array_key_exists("Volumes",$param) and $param["Volumes"] !== null) {
            if(is_bool($param["Volumes"])){
                $this->RequestParams["Volumes"] = $param["Volumes"] ? "true" : "false";
            } else {
                $this->RequestParams["Volumes"] = $param["Volumes"];
            }
        }
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            if(is_bool($param["ZoneId"])){
                $this->RequestParams["ZoneId"] = $param["ZoneId"] ? "true" : "false";
            } else {
                $this->RequestParams["ZoneId"] = $param["ZoneId"];
            }
        }
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            if(is_bool($param["Description"])){
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
            }
        }
        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            if(is_bool($param["HostName"])){
                $this->RequestParams["HostName"] = $param["HostName"] ? "true" : "false";
            } else {
                $this->RequestParams["HostName"] = $param["HostName"];
            }
        }
        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            if(is_bool($param["InstanceChargeType"])){
                $this->RequestParams["InstanceChargeType"] = $param["InstanceChargeType"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceChargeType"] = $param["InstanceChargeType"];
            }
        }
        if (array_key_exists("KeepImageCredential",$param) and $param["KeepImageCredential"] !== null) {
            if(is_bool($param["KeepImageCredential"])){
                $this->RequestParams["KeepImageCredential"] = $param["KeepImageCredential"] ? "true" : "false";
            } else {
                $this->RequestParams["KeepImageCredential"] = $param["KeepImageCredential"];
            }
        }
        if (array_key_exists("KeyPairName",$param) and $param["KeyPairName"] !== null) {
            if(is_bool($param["KeyPairName"])){
                $this->RequestParams["KeyPairName"] = $param["KeyPairName"] ? "true" : "false";
            } else {
                $this->RequestParams["KeyPairName"] = $param["KeyPairName"];
            }
        }
        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            if(is_bool($param["Password"])){
                $this->RequestParams["Password"] = $param["Password"] ? "true" : "false";
            } else {
                $this->RequestParams["Password"] = $param["Password"];
            }
        }
        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            if(is_bool($param["Period"])){
                $this->RequestParams["Period"] = $param["Period"] ? "true" : "false";
            } else {
                $this->RequestParams["Period"] = $param["Period"];
            }
        }
        if (array_key_exists("SuffixIndex",$param) and $param["SuffixIndex"] !== null) {
            if(is_bool($param["SuffixIndex"])){
                $this->RequestParams["SuffixIndex"] = $param["SuffixIndex"] ? "true" : "false";
            } else {
                $this->RequestParams["SuffixIndex"] = $param["SuffixIndex"];
            }
        }
        if (array_key_exists("UniqueSuffix",$param) and $param["UniqueSuffix"] !== null) {
            if(is_bool($param["UniqueSuffix"])){
                $this->RequestParams["UniqueSuffix"] = $param["UniqueSuffix"] ? "true" : "false";
            } else {
                $this->RequestParams["UniqueSuffix"] = $param["UniqueSuffix"];
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