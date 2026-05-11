<?php
namespace  Ksyun\Client\Kscc\V1\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeUserQuotaListRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Keyword" => null,
         /**Int**/
        "PageNum" => null,
         /**Int**/
        "PageSize" => null,
         /**String**/
        "Month" => null,
         /**String**/
        "SortKey" => null,
         /**String**/
        "SortType" => null,
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
        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            if(is_bool($param["Keyword"])){
                $this->RequestParams["Keyword"] = $param["Keyword"] ? "true" : "false";
            } else {
                $this->RequestParams["Keyword"] = $param["Keyword"];
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
        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            if(is_bool($param["Month"])){
                $this->RequestParams["Month"] = $param["Month"] ? "true" : "false";
            } else {
                $this->RequestParams["Month"] = $param["Month"];
            }
        }
        if (array_key_exists("SortKey",$param) and $param["SortKey"] !== null) {
            if(is_bool($param["SortKey"])){
                $this->RequestParams["SortKey"] = $param["SortKey"] ? "true" : "false";
            } else {
                $this->RequestParams["SortKey"] = $param["SortKey"];
            }
        }
        if (array_key_exists("SortType",$param) and $param["SortType"] !== null) {
            if(is_bool($param["SortType"])){
                $this->RequestParams["SortType"] = $param["SortType"] ? "true" : "false";
            } else {
                $this->RequestParams["SortType"] = $param["SortType"];
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