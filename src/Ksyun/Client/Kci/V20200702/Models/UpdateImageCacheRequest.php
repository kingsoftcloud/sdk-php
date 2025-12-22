<?php
namespace  Ksyun\Client\Kci\V20200702\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class UpdateImageCacheRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ImageCacheId" => null,
         /**String**/
        "ImageCacheName" => null,
         /**String**/
        "SubnetId" => null,
         /**String**/
        "SecurityGroupId" => null,
         /**Int**/
        "ImageCacheSize" => null,
         /**Int**/
        "RetentionDays" => null,
         /**String**/
        "ImageCacheType" => null,
         /**Boolean**/
        "EnableWarm" => null,
    ];

     /**特殊参数类型:Filter**/
    public $Image = [];
      /**特殊参数类型:Filter**/
    public $ImageRegistryCredential = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ImageCacheId",$param) and $param["ImageCacheId"] !== null) {
            if(is_bool($param["ImageCacheId"])){
                $this->RequestParams["ImageCacheId"] = $param["ImageCacheId"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageCacheId"] = $param["ImageCacheId"];
            }
        }
        if (array_key_exists("ImageCacheName",$param) and $param["ImageCacheName"] !== null) {
            if(is_bool($param["ImageCacheName"])){
                $this->RequestParams["ImageCacheName"] = $param["ImageCacheName"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageCacheName"] = $param["ImageCacheName"];
            }
        }
        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            if(is_bool($param["SubnetId"])){
                $this->RequestParams["SubnetId"] = $param["SubnetId"] ? "true" : "false";
            } else {
                $this->RequestParams["SubnetId"] = $param["SubnetId"];
            }
        }
        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            if(is_bool($param["SecurityGroupId"])){
                $this->RequestParams["SecurityGroupId"] = $param["SecurityGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupId"] = $param["SecurityGroupId"];
            }
        }
        if (array_key_exists("ImageCacheSize",$param) and $param["ImageCacheSize"] !== null) {
            if(is_bool($param["ImageCacheSize"])){
                $this->RequestParams["ImageCacheSize"] = $param["ImageCacheSize"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageCacheSize"] = $param["ImageCacheSize"];
            }
        }
        if (array_key_exists("RetentionDays",$param) and $param["RetentionDays"] !== null) {
            if(is_bool($param["RetentionDays"])){
                $this->RequestParams["RetentionDays"] = $param["RetentionDays"] ? "true" : "false";
            } else {
                $this->RequestParams["RetentionDays"] = $param["RetentionDays"];
            }
        }
        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $res = $this->formatFilterParams("Image",$param["Image"]);
            $this->_unserialize("Image",$res);
        }
        if (array_key_exists("ImageCacheType",$param) and $param["ImageCacheType"] !== null) {
            if(is_bool($param["ImageCacheType"])){
                $this->RequestParams["ImageCacheType"] = $param["ImageCacheType"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageCacheType"] = $param["ImageCacheType"];
            }
        }
        if (array_key_exists("EnableWarm",$param) and $param["EnableWarm"] !== null) {
            if(is_bool($param["EnableWarm"])){
                $this->RequestParams["EnableWarm"] = $param["EnableWarm"] ? "true" : "false";
            } else {
                $this->RequestParams["EnableWarm"] = $param["EnableWarm"];
            }
        }
        if (array_key_exists("ImageRegistryCredential",$param) and $param["ImageRegistryCredential"] !== null) {
            $res = $this->formatFilterParams("ImageRegistryCredential",$param["ImageRegistryCredential"]);
            $this->_unserialize("ImageRegistryCredential",$res);
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