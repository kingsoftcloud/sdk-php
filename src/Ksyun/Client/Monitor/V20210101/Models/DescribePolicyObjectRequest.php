<?php
namespace  Ksyun\Client\Monitor\V20210101\Models;

use Ksyun\Common\BaseModel;

class DescribePolicyObjectRequest extends BaseModel
{
    public $RequestParams = [
         /**Int**/
        "PolicyId" => null,
         /**Int**/
        "PageIndex" => null,
         /**Int**/
        "PageSize" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            if(is_bool($param["PolicyId"])){
                $this->RequestParams["PolicyId"] = $param["PolicyId"] ? "true" : "false";
            } else {
                $this->RequestParams["PolicyId"] = $param["PolicyId"];
            }
        }
        if (array_key_exists("PageIndex",$param) and $param["PageIndex"] !== null) {
            if(is_bool($param["PageIndex"])){
                $this->RequestParams["PageIndex"] = $param["PageIndex"] ? "true" : "false";
            } else {
                $this->RequestParams["PageIndex"] = $param["PageIndex"];
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