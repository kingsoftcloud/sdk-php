<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateAgentProductRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Name" => null,
         /**String**/
        "Description" => null,
         /**String**/
        "ClientToken" => null,
         /**String**/
        "Framework" => null,
         /**String**/
        "DeploymentType" => null,
         /**Object**/
        "CodeConfig" => null,
         /**Object**/
        "ContainerConfig" => null,
         /**Object**/
        "Resource" => null,
         /**Object**/
        "Scaling" => null,
         /**Object**/
        "Storage" => null,
         /**Object**/
        "KS3MountConfig" => null,
         /**Object**/
        "SessionAffinity" => null,
         /**Object**/
        "Network" => null,
         /**Object**/
        "Access" => null,
         /**Object**/
        "Advanced" => null,
         /**Object**/
        "ComponentConfig" => null,
         /**Object**/
        "UiConfig" => null,
         /**String**/
        "DeployMode" => null,
         /**Object**/
        "MemoryConfig" => null,
         /**Boolean**/
        "AutoPay" => null,
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            if(is_bool($param["Name"])){
                $this->RequestParams["Name"] = $param["Name"] ? "true" : "false";
            } else {
                $this->RequestParams["Name"] = $param["Name"];
            }
        }
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            if(is_bool($param["Description"])){
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
            }
        }
        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            if(is_bool($param["ClientToken"])){
                $this->RequestParams["ClientToken"] = $param["ClientToken"] ? "true" : "false";
            } else {
                $this->RequestParams["ClientToken"] = $param["ClientToken"];
            }
        }
        if (array_key_exists("Framework",$param) and $param["Framework"] !== null) {
            if(is_bool($param["Framework"])){
                $this->RequestParams["Framework"] = $param["Framework"] ? "true" : "false";
            } else {
                $this->RequestParams["Framework"] = $param["Framework"];
            }
        }
        if (array_key_exists("DeploymentType",$param) and $param["DeploymentType"] !== null) {
            if(is_bool($param["DeploymentType"])){
                $this->RequestParams["DeploymentType"] = $param["DeploymentType"] ? "true" : "false";
            } else {
                $this->RequestParams["DeploymentType"] = $param["DeploymentType"];
            }
        }
        if (array_key_exists("CodeConfig",$param) and $param["CodeConfig"] !== null) {
            if(is_bool($param["CodeConfig"])){
                $this->RequestParams["CodeConfig"] = $param["CodeConfig"] ? "true" : "false";
            } else {
                $this->RequestParams["CodeConfig"] = $param["CodeConfig"];
            }
        }
        if (array_key_exists("ContainerConfig",$param) and $param["ContainerConfig"] !== null) {
            if(is_bool($param["ContainerConfig"])){
                $this->RequestParams["ContainerConfig"] = $param["ContainerConfig"] ? "true" : "false";
            } else {
                $this->RequestParams["ContainerConfig"] = $param["ContainerConfig"];
            }
        }
        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            if(is_bool($param["Resource"])){
                $this->RequestParams["Resource"] = $param["Resource"] ? "true" : "false";
            } else {
                $this->RequestParams["Resource"] = $param["Resource"];
            }
        }
        if (array_key_exists("Scaling",$param) and $param["Scaling"] !== null) {
            if(is_bool($param["Scaling"])){
                $this->RequestParams["Scaling"] = $param["Scaling"] ? "true" : "false";
            } else {
                $this->RequestParams["Scaling"] = $param["Scaling"];
            }
        }
        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            if(is_bool($param["Storage"])){
                $this->RequestParams["Storage"] = $param["Storage"] ? "true" : "false";
            } else {
                $this->RequestParams["Storage"] = $param["Storage"];
            }
        }
        if (array_key_exists("KS3MountConfig",$param) and $param["KS3MountConfig"] !== null) {
            if(is_bool($param["KS3MountConfig"])){
                $this->RequestParams["KS3MountConfig"] = $param["KS3MountConfig"] ? "true" : "false";
            } else {
                $this->RequestParams["KS3MountConfig"] = $param["KS3MountConfig"];
            }
        }
        if (array_key_exists("SessionAffinity",$param) and $param["SessionAffinity"] !== null) {
            if(is_bool($param["SessionAffinity"])){
                $this->RequestParams["SessionAffinity"] = $param["SessionAffinity"] ? "true" : "false";
            } else {
                $this->RequestParams["SessionAffinity"] = $param["SessionAffinity"];
            }
        }
        if (array_key_exists("Network",$param) and $param["Network"] !== null) {
            if(is_bool($param["Network"])){
                $this->RequestParams["Network"] = $param["Network"] ? "true" : "false";
            } else {
                $this->RequestParams["Network"] = $param["Network"];
            }
        }
        if (array_key_exists("Access",$param) and $param["Access"] !== null) {
            if(is_bool($param["Access"])){
                $this->RequestParams["Access"] = $param["Access"] ? "true" : "false";
            } else {
                $this->RequestParams["Access"] = $param["Access"];
            }
        }
        if (array_key_exists("Advanced",$param) and $param["Advanced"] !== null) {
            if(is_bool($param["Advanced"])){
                $this->RequestParams["Advanced"] = $param["Advanced"] ? "true" : "false";
            } else {
                $this->RequestParams["Advanced"] = $param["Advanced"];
            }
        }
        if (array_key_exists("ComponentConfig",$param) and $param["ComponentConfig"] !== null) {
            if(is_bool($param["ComponentConfig"])){
                $this->RequestParams["ComponentConfig"] = $param["ComponentConfig"] ? "true" : "false";
            } else {
                $this->RequestParams["ComponentConfig"] = $param["ComponentConfig"];
            }
        }
        if (array_key_exists("UiConfig",$param) and $param["UiConfig"] !== null) {
            if(is_bool($param["UiConfig"])){
                $this->RequestParams["UiConfig"] = $param["UiConfig"] ? "true" : "false";
            } else {
                $this->RequestParams["UiConfig"] = $param["UiConfig"];
            }
        }
        if (array_key_exists("DeployMode",$param) and $param["DeployMode"] !== null) {
            if(is_bool($param["DeployMode"])){
                $this->RequestParams["DeployMode"] = $param["DeployMode"] ? "true" : "false";
            } else {
                $this->RequestParams["DeployMode"] = $param["DeployMode"];
            }
        }
        if (array_key_exists("MemoryConfig",$param) and $param["MemoryConfig"] !== null) {
            if(is_bool($param["MemoryConfig"])){
                $this->RequestParams["MemoryConfig"] = $param["MemoryConfig"] ? "true" : "false";
            } else {
                $this->RequestParams["MemoryConfig"] = $param["MemoryConfig"];
            }
        }
        if (array_key_exists("AutoPay",$param) and $param["AutoPay"] !== null) {
            if(is_bool($param["AutoPay"])){
                $this->RequestParams["AutoPay"] = $param["AutoPay"] ? "true" : "false";
            } else {
                $this->RequestParams["AutoPay"] = $param["AutoPay"];
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