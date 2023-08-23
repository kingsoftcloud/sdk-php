<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class QueryNatTopVifMonitorRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "natId" => null,
         /**String**/
        "startTime" => null,
         /**String**/
        "endTime" => null,
         /**String**/
        "sortType" => null,
         /**String**/
        "instanceType" => null,
         /**String**/
        "ip" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("natId",$param) and $param["natId"] !== null) {
            if(is_bool($param["natId"])){
                $this->RequestParams["natId"] = $param["natId"] ? "true" : "false";
            } else {
                $this->RequestParams["natId"] = $param["natId"];
            }
        }
        if (array_key_exists("startTime",$param) and $param["startTime"] !== null) {
            if(is_bool($param["startTime"])){
                $this->RequestParams["startTime"] = $param["startTime"] ? "true" : "false";
            } else {
                $this->RequestParams["startTime"] = $param["startTime"];
            }
        }
        if (array_key_exists("endTime",$param) and $param["endTime"] !== null) {
            if(is_bool($param["endTime"])){
                $this->RequestParams["endTime"] = $param["endTime"] ? "true" : "false";
            } else {
                $this->RequestParams["endTime"] = $param["endTime"];
            }
        }
        if (array_key_exists("sortType",$param) and $param["sortType"] !== null) {
            if(is_bool($param["sortType"])){
                $this->RequestParams["sortType"] = $param["sortType"] ? "true" : "false";
            } else {
                $this->RequestParams["sortType"] = $param["sortType"];
            }
        }
        if (array_key_exists("instanceType",$param) and $param["instanceType"] !== null) {
            if(is_bool($param["instanceType"])){
                $this->RequestParams["instanceType"] = $param["instanceType"] ? "true" : "false";
            } else {
                $this->RequestParams["instanceType"] = $param["instanceType"];
            }
        }
        if (array_key_exists("ip",$param) and $param["ip"] !== null) {
            if(is_bool($param["ip"])){
                $this->RequestParams["ip"] = $param["ip"] ? "true" : "false";
            } else {
                $this->RequestParams["ip"] = $param["ip"];
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