<?php
namespace  Ksyun\Client\Mongodb\V20170101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeParamGroupListRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DbVersion" => null,
         /**String**/
        "NameSearch" => null,
         /**String**/
        "Offset" => null,
         /**String**/
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
        if (array_key_exists("DbVersion",$param) and $param["DbVersion"] !== null) {
            if(is_bool($param["DbVersion"])){
                $this->RequestParams["DbVersion"] = $param["DbVersion"] ? "true" : "false";
            } else {
                $this->RequestParams["DbVersion"] = $param["DbVersion"];
            }
        }
        if (array_key_exists("NameSearch",$param) and $param["NameSearch"] !== null) {
            if(is_bool($param["NameSearch"])){
                $this->RequestParams["NameSearch"] = $param["NameSearch"] ? "true" : "false";
            } else {
                $this->RequestParams["NameSearch"] = $param["NameSearch"];
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