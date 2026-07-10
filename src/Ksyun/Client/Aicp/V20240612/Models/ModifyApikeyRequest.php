<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyApikeyRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "KeyId" => null,
         /**String**/
        "Name" => null,
         /**String**/
        "Description" => null,
         /**Array**/
        "AssociatedModelIds" => null,
         /**Boolean**/
        "AllAssociatedModel" => null,
         /**Array**/
        "AllowEndpoints" => null,
         /**Boolean**/
        "AllAssociatedProjectResources" => null,
         /**Boolean**/
        "AllAssociatedEndpoint" => null,
         /**Array**/
        "LowPriceModels" => null,
         /**Array**/
        "HighPriceModels" => null,
         /**Array**/
        "AllowedIps" => null,
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
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            if(is_bool($param["KeyId"])){
                $this->RequestParams["KeyId"] = $param["KeyId"] ? "true" : "false";
            } else {
                $this->RequestParams["KeyId"] = $param["KeyId"];
            }
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
        if (array_key_exists("AssociatedModelIds",$param) and $param["AssociatedModelIds"] !== null) {
            if(is_bool($param["AssociatedModelIds"])){
                $this->RequestParams["AssociatedModelIds"] = $param["AssociatedModelIds"] ? "true" : "false";
            } else {
                $this->RequestParams["AssociatedModelIds"] = $param["AssociatedModelIds"];
            }
        }
        if (array_key_exists("AllAssociatedModel",$param) and $param["AllAssociatedModel"] !== null) {
            if(is_bool($param["AllAssociatedModel"])){
                $this->RequestParams["AllAssociatedModel"] = $param["AllAssociatedModel"] ? "true" : "false";
            } else {
                $this->RequestParams["AllAssociatedModel"] = $param["AllAssociatedModel"];
            }
        }
        if (array_key_exists("AllowEndpoints",$param) and $param["AllowEndpoints"] !== null) {
            if(is_bool($param["AllowEndpoints"])){
                $this->RequestParams["AllowEndpoints"] = $param["AllowEndpoints"] ? "true" : "false";
            } else {
                $this->RequestParams["AllowEndpoints"] = $param["AllowEndpoints"];
            }
        }
        if (array_key_exists("AllAssociatedProjectResources",$param) and $param["AllAssociatedProjectResources"] !== null) {
            if(is_bool($param["AllAssociatedProjectResources"])){
                $this->RequestParams["AllAssociatedProjectResources"] = $param["AllAssociatedProjectResources"] ? "true" : "false";
            } else {
                $this->RequestParams["AllAssociatedProjectResources"] = $param["AllAssociatedProjectResources"];
            }
        }
        if (array_key_exists("AllAssociatedEndpoint",$param) and $param["AllAssociatedEndpoint"] !== null) {
            if(is_bool($param["AllAssociatedEndpoint"])){
                $this->RequestParams["AllAssociatedEndpoint"] = $param["AllAssociatedEndpoint"] ? "true" : "false";
            } else {
                $this->RequestParams["AllAssociatedEndpoint"] = $param["AllAssociatedEndpoint"];
            }
        }
        if (array_key_exists("LowPriceModels",$param) and $param["LowPriceModels"] !== null) {
            if(is_bool($param["LowPriceModels"])){
                $this->RequestParams["LowPriceModels"] = $param["LowPriceModels"] ? "true" : "false";
            } else {
                $this->RequestParams["LowPriceModels"] = $param["LowPriceModels"];
            }
        }
        if (array_key_exists("HighPriceModels",$param) and $param["HighPriceModels"] !== null) {
            if(is_bool($param["HighPriceModels"])){
                $this->RequestParams["HighPriceModels"] = $param["HighPriceModels"] ? "true" : "false";
            } else {
                $this->RequestParams["HighPriceModels"] = $param["HighPriceModels"];
            }
        }
        if (array_key_exists("AllowedIps",$param) and $param["AllowedIps"] !== null) {
            if(is_bool($param["AllowedIps"])){
                $this->RequestParams["AllowedIps"] = $param["AllowedIps"] ? "true" : "false";
            } else {
                $this->RequestParams["AllowedIps"] = $param["AllowedIps"];
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