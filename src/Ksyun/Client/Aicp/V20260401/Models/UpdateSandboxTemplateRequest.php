<?php
namespace  Ksyun\Client\Aicp\V20260401\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class UpdateSandboxTemplateRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "TemplateId" => null,
         /**String**/
        "TemplateName" => null,
         /**String**/
        "Description" => null,
         /**Array**/
        "Envs" => null,
         /**String**/
        "TemplateType" => null,
         /**String**/
        "TemplateCategory" => null,
         /**String**/
        "Command" => null,
         /**Array**/
        "Ports" => null,
         /**Object**/
        "ImageConfig" => null,
         /**Object**/
        "SkillConfig" => null,
         /**Object**/
        "NetworkConfig" => null,
         /**Object**/
        "KlogConfig" => null,
         /**Object**/
        "KpfsMountConfig" => null,
         /**Object**/
        "Ks3MountConfig" => null,
         /**String**/
        "AccessKey" => null,
         /**String**/
        "SecretAccessKey" => null,
         /**Object**/
        "KecConfig" => null,
         /**Object**/
        "PreheatConfig" => null,
         /**Int**/
        "InstanceQuota" => null,
         /**Int**/
        "Cpu" => null,
         /**Int**/
        "Memory" => null,
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            if(is_bool($param["TemplateId"])){
                $this->RequestParams["TemplateId"] = $param["TemplateId"] ? "true" : "false";
            } else {
                $this->RequestParams["TemplateId"] = $param["TemplateId"];
            }
        }
        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            if(is_bool($param["TemplateName"])){
                $this->RequestParams["TemplateName"] = $param["TemplateName"] ? "true" : "false";
            } else {
                $this->RequestParams["TemplateName"] = $param["TemplateName"];
            }
        }
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            if(is_bool($param["Description"])){
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
            }
        }
        if (array_key_exists("Envs",$param) and $param["Envs"] !== null) {
            if(is_bool($param["Envs"])){
                $this->RequestParams["Envs"] = $param["Envs"] ? "true" : "false";
            } else {
                $this->RequestParams["Envs"] = $param["Envs"];
            }
        }
        if (array_key_exists("TemplateType",$param) and $param["TemplateType"] !== null) {
            if(is_bool($param["TemplateType"])){
                $this->RequestParams["TemplateType"] = $param["TemplateType"] ? "true" : "false";
            } else {
                $this->RequestParams["TemplateType"] = $param["TemplateType"];
            }
        }
        if (array_key_exists("TemplateCategory",$param) and $param["TemplateCategory"] !== null) {
            if(is_bool($param["TemplateCategory"])){
                $this->RequestParams["TemplateCategory"] = $param["TemplateCategory"] ? "true" : "false";
            } else {
                $this->RequestParams["TemplateCategory"] = $param["TemplateCategory"];
            }
        }
        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            if(is_bool($param["Command"])){
                $this->RequestParams["Command"] = $param["Command"] ? "true" : "false";
            } else {
                $this->RequestParams["Command"] = $param["Command"];
            }
        }
        if (array_key_exists("Ports",$param) and $param["Ports"] !== null) {
            if(is_bool($param["Ports"])){
                $this->RequestParams["Ports"] = $param["Ports"] ? "true" : "false";
            } else {
                $this->RequestParams["Ports"] = $param["Ports"];
            }
        }
        if (array_key_exists("ImageConfig",$param) and $param["ImageConfig"] !== null) {
            if(is_bool($param["ImageConfig"])){
                $this->RequestParams["ImageConfig"] = $param["ImageConfig"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageConfig"] = $param["ImageConfig"];
            }
        }
        if (array_key_exists("SkillConfig",$param) and $param["SkillConfig"] !== null) {
            if(is_bool($param["SkillConfig"])){
                $this->RequestParams["SkillConfig"] = $param["SkillConfig"] ? "true" : "false";
            } else {
                $this->RequestParams["SkillConfig"] = $param["SkillConfig"];
            }
        }
        if (array_key_exists("NetworkConfig",$param) and $param["NetworkConfig"] !== null) {
            if(is_bool($param["NetworkConfig"])){
                $this->RequestParams["NetworkConfig"] = $param["NetworkConfig"] ? "true" : "false";
            } else {
                $this->RequestParams["NetworkConfig"] = $param["NetworkConfig"];
            }
        }
        if (array_key_exists("KlogConfig",$param) and $param["KlogConfig"] !== null) {
            if(is_bool($param["KlogConfig"])){
                $this->RequestParams["KlogConfig"] = $param["KlogConfig"] ? "true" : "false";
            } else {
                $this->RequestParams["KlogConfig"] = $param["KlogConfig"];
            }
        }
        if (array_key_exists("KpfsMountConfig",$param) and $param["KpfsMountConfig"] !== null) {
            if(is_bool($param["KpfsMountConfig"])){
                $this->RequestParams["KpfsMountConfig"] = $param["KpfsMountConfig"] ? "true" : "false";
            } else {
                $this->RequestParams["KpfsMountConfig"] = $param["KpfsMountConfig"];
            }
        }
        if (array_key_exists("Ks3MountConfig",$param) and $param["Ks3MountConfig"] !== null) {
            if(is_bool($param["Ks3MountConfig"])){
                $this->RequestParams["Ks3MountConfig"] = $param["Ks3MountConfig"] ? "true" : "false";
            } else {
                $this->RequestParams["Ks3MountConfig"] = $param["Ks3MountConfig"];
            }
        }
        if (array_key_exists("AccessKey",$param) and $param["AccessKey"] !== null) {
            if(is_bool($param["AccessKey"])){
                $this->RequestParams["AccessKey"] = $param["AccessKey"] ? "true" : "false";
            } else {
                $this->RequestParams["AccessKey"] = $param["AccessKey"];
            }
        }
        if (array_key_exists("SecretAccessKey",$param) and $param["SecretAccessKey"] !== null) {
            if(is_bool($param["SecretAccessKey"])){
                $this->RequestParams["SecretAccessKey"] = $param["SecretAccessKey"] ? "true" : "false";
            } else {
                $this->RequestParams["SecretAccessKey"] = $param["SecretAccessKey"];
            }
        }
        if (array_key_exists("KecConfig",$param) and $param["KecConfig"] !== null) {
            if(is_bool($param["KecConfig"])){
                $this->RequestParams["KecConfig"] = $param["KecConfig"] ? "true" : "false";
            } else {
                $this->RequestParams["KecConfig"] = $param["KecConfig"];
            }
        }
        if (array_key_exists("PreheatConfig",$param) and $param["PreheatConfig"] !== null) {
            if(is_bool($param["PreheatConfig"])){
                $this->RequestParams["PreheatConfig"] = $param["PreheatConfig"] ? "true" : "false";
            } else {
                $this->RequestParams["PreheatConfig"] = $param["PreheatConfig"];
            }
        }
        if (array_key_exists("InstanceQuota",$param) and $param["InstanceQuota"] !== null) {
            if(is_bool($param["InstanceQuota"])){
                $this->RequestParams["InstanceQuota"] = $param["InstanceQuota"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceQuota"] = $param["InstanceQuota"];
            }
        }
        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            if(is_bool($param["Cpu"])){
                $this->RequestParams["Cpu"] = $param["Cpu"] ? "true" : "false";
            } else {
                $this->RequestParams["Cpu"] = $param["Cpu"];
            }
        }
        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            if(is_bool($param["Memory"])){
                $this->RequestParams["Memory"] = $param["Memory"] ? "true" : "false";
            } else {
                $this->RequestParams["Memory"] = $param["Memory"];
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