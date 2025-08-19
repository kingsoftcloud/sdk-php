<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeSoImagesRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ImageName" => null,
         /**Boolean**/
        "IsSupportCloudInit" => null,
         /**Int**/
        "MaxResults" => null,
         /**String**/
        "NextToken" => null,
         /**String**/
        "OsType" => null,
         /**String**/
        "Platform" => null,
         /**String**/
        "Visibility" => null,
    ];

     /**特殊参数类型:Filter**/
    public $ImageId = [];
      /**特殊参数类型:Filter**/
    public $Status = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
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
        if (array_key_exists("IsSupportCloudInit",$param) and $param["IsSupportCloudInit"] !== null) {
            if(is_bool($param["IsSupportCloudInit"])){
                $this->RequestParams["IsSupportCloudInit"] = $param["IsSupportCloudInit"] ? "true" : "false";
            } else {
                $this->RequestParams["IsSupportCloudInit"] = $param["IsSupportCloudInit"];
            }
        }
        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            if(is_bool($param["MaxResults"])){
                $this->RequestParams["MaxResults"] = $param["MaxResults"] ? "true" : "false";
            } else {
                $this->RequestParams["MaxResults"] = $param["MaxResults"];
            }
        }
        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            if(is_bool($param["NextToken"])){
                $this->RequestParams["NextToken"] = $param["NextToken"] ? "true" : "false";
            } else {
                $this->RequestParams["NextToken"] = $param["NextToken"];
            }
        }
        if (array_key_exists("OsType",$param) and $param["OsType"] !== null) {
            if(is_bool($param["OsType"])){
                $this->RequestParams["OsType"] = $param["OsType"] ? "true" : "false";
            } else {
                $this->RequestParams["OsType"] = $param["OsType"];
            }
        }
        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            if(is_bool($param["Platform"])){
                $this->RequestParams["Platform"] = $param["Platform"] ? "true" : "false";
            } else {
                $this->RequestParams["Platform"] = $param["Platform"];
            }
        }
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $res = $this->formatFilterParams("Status",$param["Status"]);
            $this->_unserialize("Status",$res);
        }
        if (array_key_exists("Visibility",$param) and $param["Visibility"] !== null) {
            if(is_bool($param["Visibility"])){
                $this->RequestParams["Visibility"] = $param["Visibility"] ? "true" : "false";
            } else {
                $this->RequestParams["Visibility"] = $param["Visibility"];
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