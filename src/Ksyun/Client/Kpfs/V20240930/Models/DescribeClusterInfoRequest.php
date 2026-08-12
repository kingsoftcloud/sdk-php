<?php
namespace  Ksyun\Client\Kpfs\V20240930\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeClusterInfoRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Region" => null,
         /**String**/
        "AvailZone" => null,
         /**String**/
        "StoreClass" => null,
         /**String**/
        "SRoceCluster" => null,
         /**String**/
        "StorePoolType" => null,
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            if(is_bool($param["Region"])){
                $this->RequestParams["Region"] = $param["Region"] ? "true" : "false";
            } else {
                $this->RequestParams["Region"] = $param["Region"];
            }
        }
        if (array_key_exists("AvailZone",$param) and $param["AvailZone"] !== null) {
            if(is_bool($param["AvailZone"])){
                $this->RequestParams["AvailZone"] = $param["AvailZone"] ? "true" : "false";
            } else {
                $this->RequestParams["AvailZone"] = $param["AvailZone"];
            }
        }
        if (array_key_exists("StoreClass",$param) and $param["StoreClass"] !== null) {
            if(is_bool($param["StoreClass"])){
                $this->RequestParams["StoreClass"] = $param["StoreClass"] ? "true" : "false";
            } else {
                $this->RequestParams["StoreClass"] = $param["StoreClass"];
            }
        }
        if (array_key_exists("SRoceCluster",$param) and $param["SRoceCluster"] !== null) {
            if(is_bool($param["SRoceCluster"])){
                $this->RequestParams["SRoceCluster"] = $param["SRoceCluster"] ? "true" : "false";
            } else {
                $this->RequestParams["SRoceCluster"] = $param["SRoceCluster"];
            }
        }
        if (array_key_exists("StorePoolType",$param) and $param["StorePoolType"] !== null) {
            if(is_bool($param["StorePoolType"])){
                $this->RequestParams["StorePoolType"] = $param["StorePoolType"] ? "true" : "false";
            } else {
                $this->RequestParams["StorePoolType"] = $param["StorePoolType"];
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