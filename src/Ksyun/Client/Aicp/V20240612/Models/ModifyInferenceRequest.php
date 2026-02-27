<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyInferenceRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "InferenceId" => null,
         /**String**/
        "InferenceName" => null,
         /**String**/
        "Description" => null,
         /**String**/
        "EntryPoint" => null,
         /**String**/
        "ImageSource" => null,
         /**String**/
        "ImageId" => null,
         /**String**/
        "ImageRegistryId" => null,
         /**String**/
        "ImageRepoId" => null,
         /**String**/
        "ImageTagId" => null,
         /**Array**/
        "Env" => null,
         /**Array**/
        "CmdOptions" => null,
         /**Boolean**/
        "HostNetworkEnabled" => null,
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
        if (array_key_exists("InferenceId",$param) and $param["InferenceId"] !== null) {
            if(is_bool($param["InferenceId"])){
                $this->RequestParams["InferenceId"] = $param["InferenceId"] ? "true" : "false";
            } else {
                $this->RequestParams["InferenceId"] = $param["InferenceId"];
            }
        }
        if (array_key_exists("InferenceName",$param) and $param["InferenceName"] !== null) {
            if(is_bool($param["InferenceName"])){
                $this->RequestParams["InferenceName"] = $param["InferenceName"] ? "true" : "false";
            } else {
                $this->RequestParams["InferenceName"] = $param["InferenceName"];
            }
        }
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            if(is_bool($param["Description"])){
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
            }
        }
        if (array_key_exists("EntryPoint",$param) and $param["EntryPoint"] !== null) {
            if(is_bool($param["EntryPoint"])){
                $this->RequestParams["EntryPoint"] = $param["EntryPoint"] ? "true" : "false";
            } else {
                $this->RequestParams["EntryPoint"] = $param["EntryPoint"];
            }
        }
        if (array_key_exists("ImageSource",$param) and $param["ImageSource"] !== null) {
            if(is_bool($param["ImageSource"])){
                $this->RequestParams["ImageSource"] = $param["ImageSource"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageSource"] = $param["ImageSource"];
            }
        }
        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            if(is_bool($param["ImageId"])){
                $this->RequestParams["ImageId"] = $param["ImageId"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageId"] = $param["ImageId"];
            }
        }
        if (array_key_exists("ImageRegistryId",$param) and $param["ImageRegistryId"] !== null) {
            if(is_bool($param["ImageRegistryId"])){
                $this->RequestParams["ImageRegistryId"] = $param["ImageRegistryId"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageRegistryId"] = $param["ImageRegistryId"];
            }
        }
        if (array_key_exists("ImageRepoId",$param) and $param["ImageRepoId"] !== null) {
            if(is_bool($param["ImageRepoId"])){
                $this->RequestParams["ImageRepoId"] = $param["ImageRepoId"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageRepoId"] = $param["ImageRepoId"];
            }
        }
        if (array_key_exists("ImageTagId",$param) and $param["ImageTagId"] !== null) {
            if(is_bool($param["ImageTagId"])){
                $this->RequestParams["ImageTagId"] = $param["ImageTagId"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageTagId"] = $param["ImageTagId"];
            }
        }
        if (array_key_exists("Env",$param) and $param["Env"] !== null) {
            if(is_bool($param["Env"])){
                $this->RequestParams["Env"] = $param["Env"] ? "true" : "false";
            } else {
                $this->RequestParams["Env"] = $param["Env"];
            }
        }
        if (array_key_exists("CmdOptions",$param) and $param["CmdOptions"] !== null) {
            if(is_bool($param["CmdOptions"])){
                $this->RequestParams["CmdOptions"] = $param["CmdOptions"] ? "true" : "false";
            } else {
                $this->RequestParams["CmdOptions"] = $param["CmdOptions"];
            }
        }
        if (array_key_exists("HostNetworkEnabled",$param) and $param["HostNetworkEnabled"] !== null) {
            if(is_bool($param["HostNetworkEnabled"])){
                $this->RequestParams["HostNetworkEnabled"] = $param["HostNetworkEnabled"] ? "true" : "false";
            } else {
                $this->RequestParams["HostNetworkEnabled"] = $param["HostNetworkEnabled"];
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