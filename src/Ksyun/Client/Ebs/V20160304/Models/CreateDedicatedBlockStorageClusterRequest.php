<?php
namespace  Ksyun\Client\Ebs\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateDedicatedBlockStorageClusterRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DbscName" => null,
         /**String**/
        "DbscType" => null,
         /**Int**/
        "Size" => null,
         /**String**/
        "AvailabilityZone" => null,
         /**Int**/
        "PurchaseTime" => null,
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
        if (array_key_exists("DbscName",$param) and $param["DbscName"] !== null) {
            if(is_bool($param["DbscName"])){
                $this->RequestParams["DbscName"] = $param["DbscName"] ? "true" : "false";
            } else {
                $this->RequestParams["DbscName"] = $param["DbscName"];
            }
        }
        if (array_key_exists("DbscType",$param) and $param["DbscType"] !== null) {
            if(is_bool($param["DbscType"])){
                $this->RequestParams["DbscType"] = $param["DbscType"] ? "true" : "false";
            } else {
                $this->RequestParams["DbscType"] = $param["DbscType"];
            }
        }
        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            if(is_bool($param["Size"])){
                $this->RequestParams["Size"] = $param["Size"] ? "true" : "false";
            } else {
                $this->RequestParams["Size"] = $param["Size"];
            }
        }
        if (array_key_exists("AvailabilityZone",$param) and $param["AvailabilityZone"] !== null) {
            if(is_bool($param["AvailabilityZone"])){
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"] ? "true" : "false";
            } else {
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"];
            }
        }
        if (array_key_exists("PurchaseTime",$param) and $param["PurchaseTime"] !== null) {
            if(is_bool($param["PurchaseTime"])){
                $this->RequestParams["PurchaseTime"] = $param["PurchaseTime"] ? "true" : "false";
            } else {
                $this->RequestParams["PurchaseTime"] = $param["PurchaseTime"];
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