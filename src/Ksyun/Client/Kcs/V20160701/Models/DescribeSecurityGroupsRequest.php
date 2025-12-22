<?php
namespace  Ksyun\Client\Kcs\V20160701\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeSecurityGroupsRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "AvailableZone" => null,
         /**String**/
        "Offset" => null,
         /**Int**/
        "Limit" => null,
         /**String**/
        "CacheId" => null,
         /**Boolean**/
        "FilterCache" => null,
         /**String**/
        "SearchKey" => null,
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
        if (array_key_exists("AvailableZone",$param) and $param["AvailableZone"] !== null) {
            if(is_bool($param["AvailableZone"])){
                $this->RequestParams["AvailableZone"] = $param["AvailableZone"] ? "true" : "false";
            } else {
                $this->RequestParams["AvailableZone"] = $param["AvailableZone"];
            }
        }
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            if(is_bool($param["Offset"])){
                $this->RequestParams["Offset"] = $param["Offset"] ? "true" : "false";
            } else {
                $this->RequestParams["Offset"] = $param["Offset"];
            }
        }
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            if(is_bool($param["Limit"])){
                $this->RequestParams["Limit"] = $param["Limit"] ? "true" : "false";
            } else {
                $this->RequestParams["Limit"] = $param["Limit"];
            }
        }
        if (array_key_exists("CacheId",$param) and $param["CacheId"] !== null) {
            if(is_bool($param["CacheId"])){
                $this->RequestParams["CacheId"] = $param["CacheId"] ? "true" : "false";
            } else {
                $this->RequestParams["CacheId"] = $param["CacheId"];
            }
        }
        if (array_key_exists("FilterCache",$param) and $param["FilterCache"] !== null) {
            if(is_bool($param["FilterCache"])){
                $this->RequestParams["FilterCache"] = $param["FilterCache"] ? "true" : "false";
            } else {
                $this->RequestParams["FilterCache"] = $param["FilterCache"];
            }
        }
        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            if(is_bool($param["SearchKey"])){
                $this->RequestParams["SearchKey"] = $param["SearchKey"] ? "true" : "false";
            } else {
                $this->RequestParams["SearchKey"] = $param["SearchKey"];
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