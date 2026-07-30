<?php
namespace  Ksyun\Client\Aicp\V20260401\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class StartSandboxInstanceRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "TemplateId" => null,
         /**Int**/
        "Timeout" => null,
         /**Object**/
        "Ks3MountConfig" => null,
         /**Object**/
        "KpfsMountConfig" => null,
         /**String**/
        "AccessKey" => null,
         /**String**/
        "SecretAccessKey" => null,
         /**Array**/
        "Envs" => null,
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
        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            if(is_bool($param["Timeout"])){
                $this->RequestParams["Timeout"] = $param["Timeout"] ? "true" : "false";
            } else {
                $this->RequestParams["Timeout"] = $param["Timeout"];
            }
        }
        if (array_key_exists("Ks3MountConfig",$param) and $param["Ks3MountConfig"] !== null) {
            if(is_bool($param["Ks3MountConfig"])){
                $this->RequestParams["Ks3MountConfig"] = $param["Ks3MountConfig"] ? "true" : "false";
            } else {
                $this->RequestParams["Ks3MountConfig"] = $param["Ks3MountConfig"];
            }
        }
        if (array_key_exists("KpfsMountConfig",$param) and $param["KpfsMountConfig"] !== null) {
            if(is_bool($param["KpfsMountConfig"])){
                $this->RequestParams["KpfsMountConfig"] = $param["KpfsMountConfig"] ? "true" : "false";
            } else {
                $this->RequestParams["KpfsMountConfig"] = $param["KpfsMountConfig"];
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
        if (array_key_exists("Envs",$param) and $param["Envs"] !== null) {
            if(is_bool($param["Envs"])){
                $this->RequestParams["Envs"] = $param["Envs"] ? "true" : "false";
            } else {
                $this->RequestParams["Envs"] = $param["Envs"];
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