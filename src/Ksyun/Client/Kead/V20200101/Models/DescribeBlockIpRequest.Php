<?php
namespace  Ksyun\Client\Kead\V20200101\Models;

use Ksyun\Common\BaseModel;

class DescribeBlockIpRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "SearchStr" => null,
         /**String**/
        "Status" => null,
         /**String**/
        "InstanceType" => null,
         /**String**/
        "RegionCode" => null,
         /**String**/
        "StartTime" => null,
         /**String**/
        "endTime" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("SearchStr",$param) and $param["SearchStr"] !== null) {
            if(is_bool($param["SearchStr"])){
                $this->RequestParams["SearchStr"] = $param["SearchStr"] ? "true" : "false";
            } else {
                $this->RequestParams["SearchStr"] = $param["SearchStr"];
            }
        }
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            if(is_bool($param["Status"])){
                $this->RequestParams["Status"] = $param["Status"] ? "true" : "false";
            } else {
                $this->RequestParams["Status"] = $param["Status"];
            }
        }
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            if(is_bool($param["InstanceType"])){
                $this->RequestParams["InstanceType"] = $param["InstanceType"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceType"] = $param["InstanceType"];
            }
        }
        if (array_key_exists("RegionCode",$param) and $param["RegionCode"] !== null) {
            if(is_bool($param["RegionCode"])){
                $this->RequestParams["RegionCode"] = $param["RegionCode"] ? "true" : "false";
            } else {
                $this->RequestParams["RegionCode"] = $param["RegionCode"];
            }
        }
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            if(is_bool($param["StartTime"])){
                $this->RequestParams["StartTime"] = $param["StartTime"] ? "true" : "false";
            } else {
                $this->RequestParams["StartTime"] = $param["StartTime"];
            }
        }
        if (array_key_exists("endTime",$param) and $param["endTime"] !== null) {
            if(is_bool($param["endTime"])){
                $this->RequestParams["endTime"] = $param["endTime"] ? "true" : "false";
            } else {
                $this->RequestParams["endTime"] = $param["endTime"];
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