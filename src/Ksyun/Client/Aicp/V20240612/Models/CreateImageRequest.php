<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateImageRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ImageName" => null,
         /**String**/
        "Description" => null,
         /**String**/
        "ImageType" => null,
         /**String**/
        "Namespace" => null,
         /**String**/
        "NamespacePermission" => null,
         /**String**/
        "ImageRepo" => null,
         /**String**/
        "ImageVersion" => null,
         /**String**/
        "OfficialInstance" => null,
         /**String**/
        "UserName" => null,
         /**String**/
        "Password" => null,
         /**String**/
        "ImagePermission" => null,
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
        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            if(is_bool($param["ImageName"])){
                $this->RequestParams["ImageName"] = $param["ImageName"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageName"] = $param["ImageName"];
            }
        }
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            if(is_bool($param["Description"])){
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
            }
        }
        if (array_key_exists("ImageType",$param) and $param["ImageType"] !== null) {
            if(is_bool($param["ImageType"])){
                $this->RequestParams["ImageType"] = $param["ImageType"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageType"] = $param["ImageType"];
            }
        }
        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            if(is_bool($param["Namespace"])){
                $this->RequestParams["Namespace"] = $param["Namespace"] ? "true" : "false";
            } else {
                $this->RequestParams["Namespace"] = $param["Namespace"];
            }
        }
        if (array_key_exists("NamespacePermission",$param) and $param["NamespacePermission"] !== null) {
            if(is_bool($param["NamespacePermission"])){
                $this->RequestParams["NamespacePermission"] = $param["NamespacePermission"] ? "true" : "false";
            } else {
                $this->RequestParams["NamespacePermission"] = $param["NamespacePermission"];
            }
        }
        if (array_key_exists("ImageRepo",$param) and $param["ImageRepo"] !== null) {
            if(is_bool($param["ImageRepo"])){
                $this->RequestParams["ImageRepo"] = $param["ImageRepo"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageRepo"] = $param["ImageRepo"];
            }
        }
        if (array_key_exists("ImageVersion",$param) and $param["ImageVersion"] !== null) {
            if(is_bool($param["ImageVersion"])){
                $this->RequestParams["ImageVersion"] = $param["ImageVersion"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageVersion"] = $param["ImageVersion"];
            }
        }
        if (array_key_exists("OfficialInstance",$param) and $param["OfficialInstance"] !== null) {
            if(is_bool($param["OfficialInstance"])){
                $this->RequestParams["OfficialInstance"] = $param["OfficialInstance"] ? "true" : "false";
            } else {
                $this->RequestParams["OfficialInstance"] = $param["OfficialInstance"];
            }
        }
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            if(is_bool($param["UserName"])){
                $this->RequestParams["UserName"] = $param["UserName"] ? "true" : "false";
            } else {
                $this->RequestParams["UserName"] = $param["UserName"];
            }
        }
        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            if(is_bool($param["Password"])){
                $this->RequestParams["Password"] = $param["Password"] ? "true" : "false";
            } else {
                $this->RequestParams["Password"] = $param["Password"];
            }
        }
        if (array_key_exists("ImagePermission",$param) and $param["ImagePermission"] !== null) {
            if(is_bool($param["ImagePermission"])){
                $this->RequestParams["ImagePermission"] = $param["ImagePermission"] ? "true" : "false";
            } else {
                $this->RequestParams["ImagePermission"] = $param["ImagePermission"];
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