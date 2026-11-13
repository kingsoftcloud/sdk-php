<?php
namespace  Ksyun\Client\Aicp\V20260401\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateSandboxInstanceCommitRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "InstanceId" => null,
         /**String**/
        "Image" => null,
         /**String**/
        "RegistryUsername" => null,
         /**String**/
        "RegistryPassword" => null,
         /**Boolean**/
        "Pause" => null,
         /**Int**/
        "TimeoutSeconds" => null,
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            if(is_bool($param["InstanceId"])){
                $this->RequestParams["InstanceId"] = $param["InstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceId"] = $param["InstanceId"];
            }
        }
        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            if(is_bool($param["Image"])){
                $this->RequestParams["Image"] = $param["Image"] ? "true" : "false";
            } else {
                $this->RequestParams["Image"] = $param["Image"];
            }
        }
        if (array_key_exists("RegistryUsername",$param) and $param["RegistryUsername"] !== null) {
            if(is_bool($param["RegistryUsername"])){
                $this->RequestParams["RegistryUsername"] = $param["RegistryUsername"] ? "true" : "false";
            } else {
                $this->RequestParams["RegistryUsername"] = $param["RegistryUsername"];
            }
        }
        if (array_key_exists("RegistryPassword",$param) and $param["RegistryPassword"] !== null) {
            if(is_bool($param["RegistryPassword"])){
                $this->RequestParams["RegistryPassword"] = $param["RegistryPassword"] ? "true" : "false";
            } else {
                $this->RequestParams["RegistryPassword"] = $param["RegistryPassword"];
            }
        }
        if (array_key_exists("Pause",$param) and $param["Pause"] !== null) {
            if(is_bool($param["Pause"])){
                $this->RequestParams["Pause"] = $param["Pause"] ? "true" : "false";
            } else {
                $this->RequestParams["Pause"] = $param["Pause"];
            }
        }
        if (array_key_exists("TimeoutSeconds",$param) and $param["TimeoutSeconds"] !== null) {
            if(is_bool($param["TimeoutSeconds"])){
                $this->RequestParams["TimeoutSeconds"] = $param["TimeoutSeconds"] ? "true" : "false";
            } else {
                $this->RequestParams["TimeoutSeconds"] = $param["TimeoutSeconds"];
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