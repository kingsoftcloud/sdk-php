<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class QueryPeerTopVifMonitorRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "vpcId" => null,
         /**String**/
        "StartTime" => null,
         /**String**/
        "EndTime" => null,
         /**String**/
        "SortType" => null,
         /**String**/
        "ip" => null,
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
        if (array_key_exists("vpcId",$param) and $param["vpcId"] !== null) {
            if(is_bool($param["vpcId"])){
                $this->RequestParams["vpcId"] = $param["vpcId"] ? "true" : "false";
            } else {
                $this->RequestParams["vpcId"] = $param["vpcId"];
            }
        }
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            if(is_bool($param["StartTime"])){
                $this->RequestParams["StartTime"] = $param["StartTime"] ? "true" : "false";
            } else {
                $this->RequestParams["StartTime"] = $param["StartTime"];
            }
        }
        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            if(is_bool($param["EndTime"])){
                $this->RequestParams["EndTime"] = $param["EndTime"] ? "true" : "false";
            } else {
                $this->RequestParams["EndTime"] = $param["EndTime"];
            }
        }
        if (array_key_exists("SortType",$param) and $param["SortType"] !== null) {
            if(is_bool($param["SortType"])){
                $this->RequestParams["SortType"] = $param["SortType"] ? "true" : "false";
            } else {
                $this->RequestParams["SortType"] = $param["SortType"];
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