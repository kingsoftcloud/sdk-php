<?php
namespace  Ksyun\Client\Ebs\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeCreateVolumePriceRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "VolumeType" => null,
         /**Int**/
        "Size" => null,
         /**String**/
        "AvailabilityZone" => null,
         /**String**/
        "ChargeType" => null,
         /**Int**/
        "PurchaseTime" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("VolumeType",$param) and $param["VolumeType"] !== null) {
            if(is_bool($param["VolumeType"])){
                $this->RequestParams["VolumeType"] = $param["VolumeType"] ? "true" : "false";
            } else {
                $this->RequestParams["VolumeType"] = $param["VolumeType"];
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
        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            if(is_bool($param["ChargeType"])){
                $this->RequestParams["ChargeType"] = $param["ChargeType"] ? "true" : "false";
            } else {
                $this->RequestParams["ChargeType"] = $param["ChargeType"];
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