<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateNatRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "VpcId" => null,
         /**String**/
        "NatLineId" => null,
         /**Int**/
        "BandWidth" => null,
         /**String**/
        "NatName" => null,
         /**String**/
        "NatType" => null,
         /**Int**/
        "NatIpNumber" => null,
         /**String**/
        "NatMode" => null,
         /**String**/
        "ProjectId" => null,
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            if(is_bool($param["VpcId"])){
                $this->RequestParams["VpcId"] = $param["VpcId"] ? "true" : "false";
            } else {
                $this->RequestParams["VpcId"] = $param["VpcId"];
            }
        }
        if (array_key_exists("NatLineId",$param) and $param["NatLineId"] !== null) {
            if(is_bool($param["NatLineId"])){
                $this->RequestParams["NatLineId"] = $param["NatLineId"] ? "true" : "false";
            } else {
                $this->RequestParams["NatLineId"] = $param["NatLineId"];
            }
        }
        if (array_key_exists("BandWidth",$param) and $param["BandWidth"] !== null) {
            if(is_bool($param["BandWidth"])){
                $this->RequestParams["BandWidth"] = $param["BandWidth"] ? "true" : "false";
            } else {
                $this->RequestParams["BandWidth"] = $param["BandWidth"];
            }
        }
        if (array_key_exists("NatName",$param) and $param["NatName"] !== null) {
            if(is_bool($param["NatName"])){
                $this->RequestParams["NatName"] = $param["NatName"] ? "true" : "false";
            } else {
                $this->RequestParams["NatName"] = $param["NatName"];
            }
        }
        if (array_key_exists("NatType",$param) and $param["NatType"] !== null) {
            if(is_bool($param["NatType"])){
                $this->RequestParams["NatType"] = $param["NatType"] ? "true" : "false";
            } else {
                $this->RequestParams["NatType"] = $param["NatType"];
            }
        }
        if (array_key_exists("NatIpNumber",$param) and $param["NatIpNumber"] !== null) {
            if(is_bool($param["NatIpNumber"])){
                $this->RequestParams["NatIpNumber"] = $param["NatIpNumber"] ? "true" : "false";
            } else {
                $this->RequestParams["NatIpNumber"] = $param["NatIpNumber"];
            }
        }
        if (array_key_exists("NatMode",$param) and $param["NatMode"] !== null) {
            if(is_bool($param["NatMode"])){
                $this->RequestParams["NatMode"] = $param["NatMode"] ? "true" : "false";
            } else {
                $this->RequestParams["NatMode"] = $param["NatMode"];
            }
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            if(is_bool($param["ProjectId"])){
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
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