<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class ImportImageRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ImageName" => null,
         /**String**/
        "Architecture" => null,
         /**String**/
        "Platform" => null,
         /**String**/
        "ImageUrl" => null,
         /**String**/
        "ImageFormat" => null,
    ];

     /**特殊参数类型:Filter**/
    public $DataImageUrl = [];
      /**特殊参数类型:Filter**/
    public $DataImageSize = [];
      /**特殊参数类型:Filter**/
    public $DataImageFormat = [];
 
    public function __construct()
    {

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
        if (array_key_exists("Architecture",$param) and $param["Architecture"] !== null) {
            if(is_bool($param["Architecture"])){
                $this->RequestParams["Architecture"] = $param["Architecture"] ? "true" : "false";
            } else {
                $this->RequestParams["Architecture"] = $param["Architecture"];
            }
        }
        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            if(is_bool($param["Platform"])){
                $this->RequestParams["Platform"] = $param["Platform"] ? "true" : "false";
            } else {
                $this->RequestParams["Platform"] = $param["Platform"];
            }
        }
        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            if(is_bool($param["ImageUrl"])){
                $this->RequestParams["ImageUrl"] = $param["ImageUrl"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageUrl"] = $param["ImageUrl"];
            }
        }
        if (array_key_exists("ImageFormat",$param) and $param["ImageFormat"] !== null) {
            if(is_bool($param["ImageFormat"])){
                $this->RequestParams["ImageFormat"] = $param["ImageFormat"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageFormat"] = $param["ImageFormat"];
            }
        }
        if (array_key_exists("DataImageUrl",$param) and $param["DataImageUrl"] !== null) {
            $res = $this->formatFilterParams("DataImageUrl",$param["DataImageUrl"]);
            $this->_unserialize("DataImageUrl",$res);
        }
        if (array_key_exists("DataImageSize",$param) and $param["DataImageSize"] !== null) {
            $res = $this->formatFilterParams("DataImageSize",$param["DataImageSize"]);
            $this->_unserialize("DataImageSize",$res);
        }
        if (array_key_exists("DataImageFormat",$param) and $param["DataImageFormat"] !== null) {
            $res = $this->formatFilterParams("DataImageFormat",$param["DataImageFormat"]);
            $this->_unserialize("DataImageFormat",$res);
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