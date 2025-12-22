<?php
namespace  Ksyun\Client\Dmp\V20240101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeInstanceListRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "InstanceId" => null,
         /**String**/
        "DatabaseType" => null,
         /**String**/
        "InstanceRegion" => null,
         /**String**/
        "InstanceName" => null,
         /**String**/
        "Ip" => null,
         /**String**/
        "Search" => null,
         /**Int**/
        "Page" => null,
         /**Int**/
        "PageSize" => null,
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
        if (array_key_exists("DatabaseType",$param) and $param["DatabaseType"] !== null) {
            if(is_bool($param["DatabaseType"])){
                $this->RequestParams["DatabaseType"] = $param["DatabaseType"] ? "true" : "false";
            } else {
                $this->RequestParams["DatabaseType"] = $param["DatabaseType"];
            }
        }
        if (array_key_exists("InstanceRegion",$param) and $param["InstanceRegion"] !== null) {
            if(is_bool($param["InstanceRegion"])){
                $this->RequestParams["InstanceRegion"] = $param["InstanceRegion"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceRegion"] = $param["InstanceRegion"];
            }
        }
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            if(is_bool($param["InstanceName"])){
                $this->RequestParams["InstanceName"] = $param["InstanceName"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceName"] = $param["InstanceName"];
            }
        }
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            if(is_bool($param["Ip"])){
                $this->RequestParams["Ip"] = $param["Ip"] ? "true" : "false";
            } else {
                $this->RequestParams["Ip"] = $param["Ip"];
            }
        }
        if (array_key_exists("Search",$param) and $param["Search"] !== null) {
            if(is_bool($param["Search"])){
                $this->RequestParams["Search"] = $param["Search"] ? "true" : "false";
            } else {
                $this->RequestParams["Search"] = $param["Search"];
            }
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