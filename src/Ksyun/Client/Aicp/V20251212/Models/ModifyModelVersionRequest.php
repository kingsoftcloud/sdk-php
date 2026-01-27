<?php
namespace  Ksyun\Client\Aicp\V20251212\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyModelVersionRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ModelVersionId" => null,
         /**String**/
        "ModelVersionName" => null,
         /**String**/
        "ModelVersionDescription" => null,
         /**String**/
        "Format" => null,
         /**String**/
        "Framework" => null,
         /**String**/
        "SourceType" => null,
         /**String**/
        "StorageConfigId" => null,
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
        if (array_key_exists("ModelVersionId",$param) and $param["ModelVersionId"] !== null) {
            if(is_bool($param["ModelVersionId"])){
                $this->RequestParams["ModelVersionId"] = $param["ModelVersionId"] ? "true" : "false";
            } else {
                $this->RequestParams["ModelVersionId"] = $param["ModelVersionId"];
            }
        }
        if (array_key_exists("ModelVersionName",$param) and $param["ModelVersionName"] !== null) {
            if(is_bool($param["ModelVersionName"])){
                $this->RequestParams["ModelVersionName"] = $param["ModelVersionName"] ? "true" : "false";
            } else {
                $this->RequestParams["ModelVersionName"] = $param["ModelVersionName"];
            }
        }
        if (array_key_exists("ModelVersionDescription",$param) and $param["ModelVersionDescription"] !== null) {
            if(is_bool($param["ModelVersionDescription"])){
                $this->RequestParams["ModelVersionDescription"] = $param["ModelVersionDescription"] ? "true" : "false";
            } else {
                $this->RequestParams["ModelVersionDescription"] = $param["ModelVersionDescription"];
            }
        }
        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            if(is_bool($param["Format"])){
                $this->RequestParams["Format"] = $param["Format"] ? "true" : "false";
            } else {
                $this->RequestParams["Format"] = $param["Format"];
            }
        }
        if (array_key_exists("Framework",$param) and $param["Framework"] !== null) {
            if(is_bool($param["Framework"])){
                $this->RequestParams["Framework"] = $param["Framework"] ? "true" : "false";
            } else {
                $this->RequestParams["Framework"] = $param["Framework"];
            }
        }
        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            if(is_bool($param["SourceType"])){
                $this->RequestParams["SourceType"] = $param["SourceType"] ? "true" : "false";
            } else {
                $this->RequestParams["SourceType"] = $param["SourceType"];
            }
        }
        if (array_key_exists("StorageConfigId",$param) and $param["StorageConfigId"] !== null) {
            if(is_bool($param["StorageConfigId"])){
                $this->RequestParams["StorageConfigId"] = $param["StorageConfigId"] ? "true" : "false";
            } else {
                $this->RequestParams["StorageConfigId"] = $param["StorageConfigId"];
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