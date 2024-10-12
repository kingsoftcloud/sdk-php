<?php
namespace  Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateAlbRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "AlbName" => null,
         /**String**/
        "AlbVersion" => null,
         /**String**/
        "AlbType" => null,
         /**String**/
        "VpcId" => null,
         /**String**/
        "IpVersion" => null,
         /**String**/
        "ProjectId" => null,
         /**String**/
        "AllocationId" => null,
         /**String**/
        "ChargeType" => null,
         /**String**/
        "SubnetId" => null,
         /**String**/
        "PrivateIpAddress" => null,
         /**Boolean**/
        "EnabledQuic" => null,
         /**Boolean**/
        "EnableHpa" => null,
         /**Boolean**/
        "DeleteProtection" => null,
         /**Boolean**/
        "ModificationProtection" => null,
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
        if (array_key_exists("AlbName",$param) and $param["AlbName"] !== null) {
            if(is_bool($param["AlbName"])){
                $this->RequestParams["AlbName"] = $param["AlbName"] ? "true" : "false";
            } else {
                $this->RequestParams["AlbName"] = $param["AlbName"];
            }
        }
        if (array_key_exists("AlbVersion",$param) and $param["AlbVersion"] !== null) {
            if(is_bool($param["AlbVersion"])){
                $this->RequestParams["AlbVersion"] = $param["AlbVersion"] ? "true" : "false";
            } else {
                $this->RequestParams["AlbVersion"] = $param["AlbVersion"];
            }
        }
        if (array_key_exists("AlbType",$param) and $param["AlbType"] !== null) {
            if(is_bool($param["AlbType"])){
                $this->RequestParams["AlbType"] = $param["AlbType"] ? "true" : "false";
            } else {
                $this->RequestParams["AlbType"] = $param["AlbType"];
            }
        }
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            if(is_bool($param["VpcId"])){
                $this->RequestParams["VpcId"] = $param["VpcId"] ? "true" : "false";
            } else {
                $this->RequestParams["VpcId"] = $param["VpcId"];
            }
        }
        if (array_key_exists("IpVersion",$param) and $param["IpVersion"] !== null) {
            if(is_bool($param["IpVersion"])){
                $this->RequestParams["IpVersion"] = $param["IpVersion"] ? "true" : "false";
            } else {
                $this->RequestParams["IpVersion"] = $param["IpVersion"];
            }
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            if(is_bool($param["ProjectId"])){
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
            }
        }
        if (array_key_exists("AllocationId",$param) and $param["AllocationId"] !== null) {
            if(is_bool($param["AllocationId"])){
                $this->RequestParams["AllocationId"] = $param["AllocationId"] ? "true" : "false";
            } else {
                $this->RequestParams["AllocationId"] = $param["AllocationId"];
            }
        }
        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            if(is_bool($param["ChargeType"])){
                $this->RequestParams["ChargeType"] = $param["ChargeType"] ? "true" : "false";
            } else {
                $this->RequestParams["ChargeType"] = $param["ChargeType"];
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
        if (array_key_exists("EnabledQuic",$param) and $param["EnabledQuic"] !== null) {
            if(is_bool($param["EnabledQuic"])){
                $this->RequestParams["EnabledQuic"] = $param["EnabledQuic"] ? "true" : "false";
            } else {
                $this->RequestParams["EnabledQuic"] = $param["EnabledQuic"];
            }
        }
        if (array_key_exists("EnableHpa",$param) and $param["EnableHpa"] !== null) {
            if(is_bool($param["EnableHpa"])){
                $this->RequestParams["EnableHpa"] = $param["EnableHpa"] ? "true" : "false";
            } else {
                $this->RequestParams["EnableHpa"] = $param["EnableHpa"];
            }
        }
        if (array_key_exists("DeleteProtection",$param) and $param["DeleteProtection"] !== null) {
            if(is_bool($param["DeleteProtection"])){
                $this->RequestParams["DeleteProtection"] = $param["DeleteProtection"] ? "true" : "false";
            } else {
                $this->RequestParams["DeleteProtection"] = $param["DeleteProtection"];
            }
        }
        if (array_key_exists("ModificationProtection",$param) and $param["ModificationProtection"] !== null) {
            if(is_bool($param["ModificationProtection"])){
                $this->RequestParams["ModificationProtection"] = $param["ModificationProtection"] ? "true" : "false";
            } else {
                $this->RequestParams["ModificationProtection"] = $param["ModificationProtection"];
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