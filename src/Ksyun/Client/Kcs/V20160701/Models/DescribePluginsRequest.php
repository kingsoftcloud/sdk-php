<?php
namespace  Ksyun\Client\Kcs\V20160701\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribePluginsRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "CacheId" => null,
         /**Boolean**/
        "Installed" => null,
         /**String**/
        "FuzzySearch" => null,
         /**Int**/
        "Offset" => null,
         /**Int**/
        "Limit" => null,
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
        if (array_key_exists("CacheId",$param) and $param["CacheId"] !== null) {
            if(is_bool($param["CacheId"])){
                $this->RequestParams["CacheId"] = $param["CacheId"] ? "true" : "false";
            } else {
                $this->RequestParams["CacheId"] = $param["CacheId"];
            }
        }
        if (array_key_exists("Installed",$param) and $param["Installed"] !== null) {
            if(is_bool($param["Installed"])){
                $this->RequestParams["Installed"] = $param["Installed"] ? "true" : "false";
            } else {
                $this->RequestParams["Installed"] = $param["Installed"];
            }
        }
        if (array_key_exists("FuzzySearch",$param) and $param["FuzzySearch"] !== null) {
            if(is_bool($param["FuzzySearch"])){
                $this->RequestParams["FuzzySearch"] = $param["FuzzySearch"] ? "true" : "false";
            } else {
                $this->RequestParams["FuzzySearch"] = $param["FuzzySearch"];
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