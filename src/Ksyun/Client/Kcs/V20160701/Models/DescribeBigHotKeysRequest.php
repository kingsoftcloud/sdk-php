<?php
namespace  Ksyun\Client\Kcs\V20160701\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeBigHotKeysRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "CacheId" => null,
         /**String**/
        "NodeId" => null,
         /**String**/
        "QueryType" => null,
         /**Int**/
        "KeyType" => null,
         /**String**/
        "KeyName" => null,
         /**String**/
        "StartQueryTime" => null,
         /**String**/
        "EndQueryTime" => null,
         /**Int**/
        "PageSize" => null,
         /**Int**/
        "PageNum" => null,
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
        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            if(is_bool($param["NodeId"])){
                $this->RequestParams["NodeId"] = $param["NodeId"] ? "true" : "false";
            } else {
                $this->RequestParams["NodeId"] = $param["NodeId"];
            }
        }
        if (array_key_exists("QueryType",$param) and $param["QueryType"] !== null) {
            if(is_bool($param["QueryType"])){
                $this->RequestParams["QueryType"] = $param["QueryType"] ? "true" : "false";
            } else {
                $this->RequestParams["QueryType"] = $param["QueryType"];
            }
        }
        if (array_key_exists("KeyType",$param) and $param["KeyType"] !== null) {
            if(is_bool($param["KeyType"])){
                $this->RequestParams["KeyType"] = $param["KeyType"] ? "true" : "false";
            } else {
                $this->RequestParams["KeyType"] = $param["KeyType"];
            }
        }
        if (array_key_exists("KeyName",$param) and $param["KeyName"] !== null) {
            if(is_bool($param["KeyName"])){
                $this->RequestParams["KeyName"] = $param["KeyName"] ? "true" : "false";
            } else {
                $this->RequestParams["KeyName"] = $param["KeyName"];
            }
        }
        if (array_key_exists("StartQueryTime",$param) and $param["StartQueryTime"] !== null) {
            if(is_bool($param["StartQueryTime"])){
                $this->RequestParams["StartQueryTime"] = $param["StartQueryTime"] ? "true" : "false";
            } else {
                $this->RequestParams["StartQueryTime"] = $param["StartQueryTime"];
            }
        }
        if (array_key_exists("EndQueryTime",$param) and $param["EndQueryTime"] !== null) {
            if(is_bool($param["EndQueryTime"])){
                $this->RequestParams["EndQueryTime"] = $param["EndQueryTime"] ? "true" : "false";
            } else {
                $this->RequestParams["EndQueryTime"] = $param["EndQueryTime"];
            }
        }
        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            if(is_bool($param["PageSize"])){
                $this->RequestParams["PageSize"] = $param["PageSize"] ? "true" : "false";
            } else {
                $this->RequestParams["PageSize"] = $param["PageSize"];
            }
        }
        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            if(is_bool($param["PageNum"])){
                $this->RequestParams["PageNum"] = $param["PageNum"] ? "true" : "false";
            } else {
                $this->RequestParams["PageNum"] = $param["PageNum"];
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