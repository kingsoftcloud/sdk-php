<?php
namespace  Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateBackendServerGroupRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "VpcId" => null,
         /**String**/
        "BackendServerGroupName" => null,
         /**String**/
        "BackendServerGroupType" => null,
         /**String**/
        "HostName" => null,
         /**String**/
        "HealthCheckState" => null,
         /**Int**/
        "HealthyThreshold" => null,
         /**Int**/
        "Interval" => null,
         /**Int**/
        "Timeout" => null,
         /**Int**/
        "UnhealthyThreshold" => null,
         /**String**/
        "UrlPath" => null,
         /**String**/
        "Region" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            if(is_bool($param["VpcId"])){
                $this->RequestParams["VpcId"] = $param["VpcId"] ? "true" : "false";
            } else {
                $this->RequestParams["VpcId"] = $param["VpcId"];
            }
        }
        if (array_key_exists("BackendServerGroupName",$param) and $param["BackendServerGroupName"] !== null) {
            if(is_bool($param["BackendServerGroupName"])){
                $this->RequestParams["BackendServerGroupName"] = $param["BackendServerGroupName"] ? "true" : "false";
            } else {
                $this->RequestParams["BackendServerGroupName"] = $param["BackendServerGroupName"];
            }
        }
        if (array_key_exists("BackendServerGroupType",$param) and $param["BackendServerGroupType"] !== null) {
            if(is_bool($param["BackendServerGroupType"])){
                $this->RequestParams["BackendServerGroupType"] = $param["BackendServerGroupType"] ? "true" : "false";
            } else {
                $this->RequestParams["BackendServerGroupType"] = $param["BackendServerGroupType"];
            }
        }
        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            if(is_bool($param["HostName"])){
                $this->RequestParams["HostName"] = $param["HostName"] ? "true" : "false";
            } else {
                $this->RequestParams["HostName"] = $param["HostName"];
            }
        }
        if (array_key_exists("HealthCheckState",$param) and $param["HealthCheckState"] !== null) {
            if(is_bool($param["HealthCheckState"])){
                $this->RequestParams["HealthCheckState"] = $param["HealthCheckState"] ? "true" : "false";
            } else {
                $this->RequestParams["HealthCheckState"] = $param["HealthCheckState"];
            }
        }
        if (array_key_exists("HealthyThreshold",$param) and $param["HealthyThreshold"] !== null) {
            if(is_bool($param["HealthyThreshold"])){
                $this->RequestParams["HealthyThreshold"] = $param["HealthyThreshold"] ? "true" : "false";
            } else {
                $this->RequestParams["HealthyThreshold"] = $param["HealthyThreshold"];
            }
        }
        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            if(is_bool($param["Interval"])){
                $this->RequestParams["Interval"] = $param["Interval"] ? "true" : "false";
            } else {
                $this->RequestParams["Interval"] = $param["Interval"];
            }
        }
        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            if(is_bool($param["Timeout"])){
                $this->RequestParams["Timeout"] = $param["Timeout"] ? "true" : "false";
            } else {
                $this->RequestParams["Timeout"] = $param["Timeout"];
            }
        }
        if (array_key_exists("UnhealthyThreshold",$param) and $param["UnhealthyThreshold"] !== null) {
            if(is_bool($param["UnhealthyThreshold"])){
                $this->RequestParams["UnhealthyThreshold"] = $param["UnhealthyThreshold"] ? "true" : "false";
            } else {
                $this->RequestParams["UnhealthyThreshold"] = $param["UnhealthyThreshold"];
            }
        }
        if (array_key_exists("UrlPath",$param) and $param["UrlPath"] !== null) {
            if(is_bool($param["UrlPath"])){
                $this->RequestParams["UrlPath"] = $param["UrlPath"] ? "true" : "false";
            } else {
                $this->RequestParams["UrlPath"] = $param["UrlPath"];
            }
        }
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            if(is_bool($param["Region"])){
                $this->RequestParams["Region"] = $param["Region"] ? "true" : "false";
            } else {
                $this->RequestParams["Region"] = $param["Region"];
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