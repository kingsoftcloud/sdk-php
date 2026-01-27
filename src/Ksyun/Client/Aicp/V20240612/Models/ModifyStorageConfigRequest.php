<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyStorageConfigRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "StorageConfigId" => null,
         /**String**/
        "StorageConfigName" => null,
         /**String**/
        "Description" => null,
         /**String**/
        "MountPath" => null,
         /**Object**/
        "Ks3Info" => null,
         /**Array**/
        "Users" => null,
         /**String**/
        "Ak" => null,
         /**String**/
        "Sk" => null,
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
        if (array_key_exists("StorageConfigId",$param) and $param["StorageConfigId"] !== null) {
            if(is_bool($param["StorageConfigId"])){
                $this->RequestParams["StorageConfigId"] = $param["StorageConfigId"] ? "true" : "false";
            } else {
                $this->RequestParams["StorageConfigId"] = $param["StorageConfigId"];
            }
        }
        if (array_key_exists("StorageConfigName",$param) and $param["StorageConfigName"] !== null) {
            if(is_bool($param["StorageConfigName"])){
                $this->RequestParams["StorageConfigName"] = $param["StorageConfigName"] ? "true" : "false";
            } else {
                $this->RequestParams["StorageConfigName"] = $param["StorageConfigName"];
            }
        }
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            if(is_bool($param["Description"])){
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
            }
        }
        if (array_key_exists("MountPath",$param) and $param["MountPath"] !== null) {
            if(is_bool($param["MountPath"])){
                $this->RequestParams["MountPath"] = $param["MountPath"] ? "true" : "false";
            } else {
                $this->RequestParams["MountPath"] = $param["MountPath"];
            }
        }
        if (array_key_exists("Ks3Info",$param) and $param["Ks3Info"] !== null) {
            if(is_bool($param["Ks3Info"])){
                $this->RequestParams["Ks3Info"] = $param["Ks3Info"] ? "true" : "false";
            } else {
                $this->RequestParams["Ks3Info"] = $param["Ks3Info"];
            }
        }
        if (array_key_exists("Users",$param) and $param["Users"] !== null) {
            if(is_bool($param["Users"])){
                $this->RequestParams["Users"] = $param["Users"] ? "true" : "false";
            } else {
                $this->RequestParams["Users"] = $param["Users"];
            }
        }
        if (array_key_exists("Ak",$param) and $param["Ak"] !== null) {
            if(is_bool($param["Ak"])){
                $this->RequestParams["Ak"] = $param["Ak"] ? "true" : "false";
            } else {
                $this->RequestParams["Ak"] = $param["Ak"];
            }
        }
        if (array_key_exists("Sk",$param) and $param["Sk"] !== null) {
            if(is_bool($param["Sk"])){
                $this->RequestParams["Sk"] = $param["Sk"] ? "true" : "false";
            } else {
                $this->RequestParams["Sk"] = $param["Sk"];
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