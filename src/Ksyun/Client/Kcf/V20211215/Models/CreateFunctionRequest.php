<?php
namespace  Ksyun\Client\Kcf\V20211215\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateFunctionRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Id" => null,
         /**String**/
        "Name" => null,
         /**String**/
        "Namespace" => null,
         /**String**/
        "Runtime" => null,
         /**Int**/
        "CaPort" => null,
         /**Array**/
        "StartupCommand" => null,
         /**String**/
        "Description" => null,
         /**Int**/
        "Timeout" => null,
         /**Int**/
        "MemorySize" => null,
         /**Int**/
        "SingleInstanceConcurrency" => null,
         /**Boolean**/
        "InternetAccess" => null,
         /**Object**/
        "Code" => null,
         /**Object**/
        "Environment" => null,
         /**Object**/
        "VpcConfig" => null,
         /**Object**/
        "LogConfig" => null,
         /**Object**/
        "LivenessProbeConfig" => null,
         /**Object**/
        "ReadinessProbeConfig" => null,
         /**Array**/
        "Layers" => null,
         /**String**/
        "CodeType" => null,
         /**Object**/
        "CustomContainerConfig" => null,
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            if(is_bool($param["Id"])){
                $this->RequestParams["Id"] = $param["Id"] ? "true" : "false";
            } else {
                $this->RequestParams["Id"] = $param["Id"];
            }
        }
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            if(is_bool($param["Name"])){
                $this->RequestParams["Name"] = $param["Name"] ? "true" : "false";
            } else {
                $this->RequestParams["Name"] = $param["Name"];
            }
        }
        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            if(is_bool($param["Namespace"])){
                $this->RequestParams["Namespace"] = $param["Namespace"] ? "true" : "false";
            } else {
                $this->RequestParams["Namespace"] = $param["Namespace"];
            }
        }
        if (array_key_exists("Runtime",$param) and $param["Runtime"] !== null) {
            if(is_bool($param["Runtime"])){
                $this->RequestParams["Runtime"] = $param["Runtime"] ? "true" : "false";
            } else {
                $this->RequestParams["Runtime"] = $param["Runtime"];
            }
        }
        if (array_key_exists("CaPort",$param) and $param["CaPort"] !== null) {
            if(is_bool($param["CaPort"])){
                $this->RequestParams["CaPort"] = $param["CaPort"] ? "true" : "false";
            } else {
                $this->RequestParams["CaPort"] = $param["CaPort"];
            }
        }
        if (array_key_exists("StartupCommand",$param) and $param["StartupCommand"] !== null) {
            if(is_bool($param["StartupCommand"])){
                $this->RequestParams["StartupCommand"] = $param["StartupCommand"] ? "true" : "false";
            } else {
                $this->RequestParams["StartupCommand"] = $param["StartupCommand"];
            }
        }
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            if(is_bool($param["Description"])){
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
            }
        }
        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            if(is_bool($param["Timeout"])){
                $this->RequestParams["Timeout"] = $param["Timeout"] ? "true" : "false";
            } else {
                $this->RequestParams["Timeout"] = $param["Timeout"];
            }
        }
        if (array_key_exists("MemorySize",$param) and $param["MemorySize"] !== null) {
            if(is_bool($param["MemorySize"])){
                $this->RequestParams["MemorySize"] = $param["MemorySize"] ? "true" : "false";
            } else {
                $this->RequestParams["MemorySize"] = $param["MemorySize"];
            }
        }
        if (array_key_exists("SingleInstanceConcurrency",$param) and $param["SingleInstanceConcurrency"] !== null) {
            if(is_bool($param["SingleInstanceConcurrency"])){
                $this->RequestParams["SingleInstanceConcurrency"] = $param["SingleInstanceConcurrency"] ? "true" : "false";
            } else {
                $this->RequestParams["SingleInstanceConcurrency"] = $param["SingleInstanceConcurrency"];
            }
        }
        if (array_key_exists("InternetAccess",$param) and $param["InternetAccess"] !== null) {
            if(is_bool($param["InternetAccess"])){
                $this->RequestParams["InternetAccess"] = $param["InternetAccess"] ? "true" : "false";
            } else {
                $this->RequestParams["InternetAccess"] = $param["InternetAccess"];
            }
        }
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            if(is_bool($param["Code"])){
                $this->RequestParams["Code"] = $param["Code"] ? "true" : "false";
            } else {
                $this->RequestParams["Code"] = $param["Code"];
            }
        }
        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            if(is_bool($param["Environment"])){
                $this->RequestParams["Environment"] = $param["Environment"] ? "true" : "false";
            } else {
                $this->RequestParams["Environment"] = $param["Environment"];
            }
        }
        if (array_key_exists("VpcConfig",$param) and $param["VpcConfig"] !== null) {
            if(is_bool($param["VpcConfig"])){
                $this->RequestParams["VpcConfig"] = $param["VpcConfig"] ? "true" : "false";
            } else {
                $this->RequestParams["VpcConfig"] = $param["VpcConfig"];
            }
        }
        if (array_key_exists("LogConfig",$param) and $param["LogConfig"] !== null) {
            if(is_bool($param["LogConfig"])){
                $this->RequestParams["LogConfig"] = $param["LogConfig"] ? "true" : "false";
            } else {
                $this->RequestParams["LogConfig"] = $param["LogConfig"];
            }
        }
        if (array_key_exists("LivenessProbeConfig",$param) and $param["LivenessProbeConfig"] !== null) {
            if(is_bool($param["LivenessProbeConfig"])){
                $this->RequestParams["LivenessProbeConfig"] = $param["LivenessProbeConfig"] ? "true" : "false";
            } else {
                $this->RequestParams["LivenessProbeConfig"] = $param["LivenessProbeConfig"];
            }
        }
        if (array_key_exists("ReadinessProbeConfig",$param) and $param["ReadinessProbeConfig"] !== null) {
            if(is_bool($param["ReadinessProbeConfig"])){
                $this->RequestParams["ReadinessProbeConfig"] = $param["ReadinessProbeConfig"] ? "true" : "false";
            } else {
                $this->RequestParams["ReadinessProbeConfig"] = $param["ReadinessProbeConfig"];
            }
        }
        if (array_key_exists("Layers",$param) and $param["Layers"] !== null) {
            if(is_bool($param["Layers"])){
                $this->RequestParams["Layers"] = $param["Layers"] ? "true" : "false";
            } else {
                $this->RequestParams["Layers"] = $param["Layers"];
            }
        }
        if (array_key_exists("CodeType",$param) and $param["CodeType"] !== null) {
            if(is_bool($param["CodeType"])){
                $this->RequestParams["CodeType"] = $param["CodeType"] ? "true" : "false";
            } else {
                $this->RequestParams["CodeType"] = $param["CodeType"];
            }
        }
        if (array_key_exists("CustomContainerConfig",$param) and $param["CustomContainerConfig"] !== null) {
            if(is_bool($param["CustomContainerConfig"])){
                $this->RequestParams["CustomContainerConfig"] = $param["CustomContainerConfig"] ? "true" : "false";
            } else {
                $this->RequestParams["CustomContainerConfig"] = $param["CustomContainerConfig"];
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