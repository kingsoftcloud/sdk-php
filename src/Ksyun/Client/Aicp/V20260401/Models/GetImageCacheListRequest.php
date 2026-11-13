<?php
namespace  Ksyun\Client\Aicp\V20260401\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class GetImageCacheListRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Scope" => null,
         /**String**/
        "ImageCacheId" => null,
         /**String**/
        "Image" => null,
         /**String**/
        "Description" => null,
         /**String**/
        "Status" => null,
         /**Int**/
        "PageNum" => null,
         /**Int**/
        "PageSize" => null,
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
        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            if(is_bool($param["Scope"])){
                $this->RequestParams["Scope"] = $param["Scope"] ? "true" : "false";
            } else {
                $this->RequestParams["Scope"] = $param["Scope"];
            }
        }
        if (array_key_exists("ImageCacheId",$param) and $param["ImageCacheId"] !== null) {
            if(is_bool($param["ImageCacheId"])){
                $this->RequestParams["ImageCacheId"] = $param["ImageCacheId"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageCacheId"] = $param["ImageCacheId"];
            }
        }
        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            if(is_bool($param["Image"])){
                $this->RequestParams["Image"] = $param["Image"] ? "true" : "false";
            } else {
                $this->RequestParams["Image"] = $param["Image"];
            }
        }
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            if(is_bool($param["Description"])){
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
            }
        }
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            if(is_bool($param["Status"])){
                $this->RequestParams["Status"] = $param["Status"] ? "true" : "false";
            } else {
                $this->RequestParams["Status"] = $param["Status"];
            }
        }
        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            if(is_bool($param["PageNum"])){
                $this->RequestParams["PageNum"] = $param["PageNum"] ? "true" : "false";
            } else {
                $this->RequestParams["PageNum"] = $param["PageNum"];
            }
        }
        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            if(is_bool($param["PageSize"])){
                $this->RequestParams["PageSize"] = $param["PageSize"] ? "true" : "false";
            } else {
                $this->RequestParams["PageSize"] = $param["PageSize"];
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