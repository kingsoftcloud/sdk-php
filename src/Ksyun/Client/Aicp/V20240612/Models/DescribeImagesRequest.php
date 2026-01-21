<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeImagesRequest extends BaseModel
{
    public $RequestParams = [
         /**Int**/
        "Page" => null,
         /**Int**/
        "PageSize" => null,
         /**String**/
        "ImageSource" => null,
         /**String**/
        "ImageStatus" => null,
         /**String**/
        "ImageType" => null,
         /**String**/
        "ApplicationScenario" => null,
         /**String**/
        "ImageName" => null,
    ];

     /**特殊参数类型:Filter**/
    public $ImageId = [];
      /**特殊参数类型:Filter**/
    public $Filter = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            if(is_bool($param["Page"])){
                $this->RequestParams["Page"] = $param["Page"] ? "true" : "false";
            } else {
                $this->RequestParams["Page"] = $param["Page"];
            }
        }
        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            if(is_bool($param["PageSize"])){
                $this->RequestParams["PageSize"] = $param["PageSize"] ? "true" : "false";
            } else {
                $this->RequestParams["PageSize"] = $param["PageSize"];
            }
        }
        if (array_key_exists("ImageSource",$param) and $param["ImageSource"] !== null) {
            if(is_bool($param["ImageSource"])){
                $this->RequestParams["ImageSource"] = $param["ImageSource"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageSource"] = $param["ImageSource"];
            }
        }
        if (array_key_exists("ImageStatus",$param) and $param["ImageStatus"] !== null) {
            if(is_bool($param["ImageStatus"])){
                $this->RequestParams["ImageStatus"] = $param["ImageStatus"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageStatus"] = $param["ImageStatus"];
            }
        }
        if (array_key_exists("ImageType",$param) and $param["ImageType"] !== null) {
            if(is_bool($param["ImageType"])){
                $this->RequestParams["ImageType"] = $param["ImageType"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageType"] = $param["ImageType"];
            }
        }
        if (array_key_exists("ApplicationScenario",$param) and $param["ApplicationScenario"] !== null) {
            if(is_bool($param["ApplicationScenario"])){
                $this->RequestParams["ApplicationScenario"] = $param["ApplicationScenario"] ? "true" : "false";
            } else {
                $this->RequestParams["ApplicationScenario"] = $param["ApplicationScenario"];
            }
        }
        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $res = $this->formatFilterParams("ImageId",$param["ImageId"]);
            $this->_unserialize("ImageId",$res);
        }
        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            if(is_bool($param["ImageName"])){
                $this->RequestParams["ImageName"] = $param["ImageName"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageName"] = $param["ImageName"];
            }
        }
        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $res = $this->formatFilterParams("Filter",$param["Filter"]);
            $this->_unserialize("Filter",$res);
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