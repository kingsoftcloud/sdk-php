<?php
namespace  Ksyun\Client\Kes\V20201215\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class LaunchClusterRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ClusterName" => null,
         /**String**/
        "MainVersion" => null,
         /**String**/
        "Scenario" => null,
         /**String**/
        "AvailabilityZone" => null,
         /**String**/
        "ChargeType" => null,
         /**Int**/
        "PurchaseTime" => null,
         /**Int**/
        "ProjectId" => null,
         /**String**/
        "VpcDomainId" => null,
         /**String**/
        "VpcSubnetId" => null,
         /**String**/
        "VpcEpcSubnetId" => null,
         /**String**/
        "SecurityGroupId" => null,
         /**Array**/
        "InstanceGroups" => null,
    ];


    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/json");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            if(is_bool($param["ClusterName"])){
                $this->RequestParams["ClusterName"] = $param["ClusterName"] ? "true" : "false";
            } else {
                $this->RequestParams["ClusterName"] = $param["ClusterName"];
            }
        }
        if (array_key_exists("MainVersion",$param) and $param["MainVersion"] !== null) {
            if(is_bool($param["MainVersion"])){
                $this->RequestParams["MainVersion"] = $param["MainVersion"] ? "true" : "false";
            } else {
                $this->RequestParams["MainVersion"] = $param["MainVersion"];
            }
        }
        if (array_key_exists("Scenario",$param) and $param["Scenario"] !== null) {
            if(is_bool($param["Scenario"])){
                $this->RequestParams["Scenario"] = $param["Scenario"] ? "true" : "false";
            } else {
                $this->RequestParams["Scenario"] = $param["Scenario"];
            }
        }
        if (array_key_exists("AvailabilityZone",$param) and $param["AvailabilityZone"] !== null) {
            if(is_bool($param["AvailabilityZone"])){
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"] ? "true" : "false";
            } else {
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"];
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            if(is_bool($param["ProjectId"])){
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
            }
        }
        if (array_key_exists("VpcDomainId",$param) and $param["VpcDomainId"] !== null) {
            if(is_bool($param["VpcDomainId"])){
                $this->RequestParams["VpcDomainId"] = $param["VpcDomainId"] ? "true" : "false";
            } else {
                $this->RequestParams["VpcDomainId"] = $param["VpcDomainId"];
            }
        }
        if (array_key_exists("VpcSubnetId",$param) and $param["VpcSubnetId"] !== null) {
            if(is_bool($param["VpcSubnetId"])){
                $this->RequestParams["VpcSubnetId"] = $param["VpcSubnetId"] ? "true" : "false";
            } else {
                $this->RequestParams["VpcSubnetId"] = $param["VpcSubnetId"];
            }
        }
        if (array_key_exists("VpcEpcSubnetId",$param) and $param["VpcEpcSubnetId"] !== null) {
            if(is_bool($param["VpcEpcSubnetId"])){
                $this->RequestParams["VpcEpcSubnetId"] = $param["VpcEpcSubnetId"] ? "true" : "false";
            } else {
                $this->RequestParams["VpcEpcSubnetId"] = $param["VpcEpcSubnetId"];
            }
        }
        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            if(is_bool($param["SecurityGroupId"])){
                $this->RequestParams["SecurityGroupId"] = $param["SecurityGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupId"] = $param["SecurityGroupId"];
            }
        }
        if (array_key_exists("InstanceGroups",$param) and $param["InstanceGroups"] !== null) {
            if(is_bool($param["InstanceGroups"])){
                $this->RequestParams["InstanceGroups"] = $param["InstanceGroups"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceGroups"] = $param["InstanceGroups"];
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