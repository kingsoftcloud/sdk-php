<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeSoInstancesRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "InstanceChargeType" => null,
         /**String**/
        "KeyPairName" => null,
         /**Int**/
        "MaxResults" => null,
         /**String**/
        "NextToken" => null,
         /**String**/
        "PrimaryIpAddress" => null,
         /**String**/
        "Status" => null,
         /**String**/
        "VpcId" => null,
         /**String**/
        "ZoneId" => null,
    ];

     /**特殊参数类型:Filter**/
    public $InstanceTypeId = [];
      /**特殊参数类型:Filter**/
    public $InstanceIds = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            if(is_bool($param["InstanceChargeType"])){
                $this->RequestParams["InstanceChargeType"] = $param["InstanceChargeType"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceChargeType"] = $param["InstanceChargeType"];
            }
        }
        if (array_key_exists("InstanceTypeId",$param) and $param["InstanceTypeId"] !== null) {
            $res = $this->formatFilterParams("InstanceTypeId",$param["InstanceTypeId"]);
            $this->_unserialize("InstanceTypeId",$res);
        }
        if (array_key_exists("KeyPairName",$param) and $param["KeyPairName"] !== null) {
            if(is_bool($param["KeyPairName"])){
                $this->RequestParams["KeyPairName"] = $param["KeyPairName"] ? "true" : "false";
            } else {
                $this->RequestParams["KeyPairName"] = $param["KeyPairName"];
            }
        }
        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            if(is_bool($param["MaxResults"])){
                $this->RequestParams["MaxResults"] = $param["MaxResults"] ? "true" : "false";
            } else {
                $this->RequestParams["MaxResults"] = $param["MaxResults"];
            }
        }
        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            if(is_bool($param["NextToken"])){
                $this->RequestParams["NextToken"] = $param["NextToken"] ? "true" : "false";
            } else {
                $this->RequestParams["NextToken"] = $param["NextToken"];
            }
        }
        if (array_key_exists("PrimaryIpAddress",$param) and $param["PrimaryIpAddress"] !== null) {
            if(is_bool($param["PrimaryIpAddress"])){
                $this->RequestParams["PrimaryIpAddress"] = $param["PrimaryIpAddress"] ? "true" : "false";
            } else {
                $this->RequestParams["PrimaryIpAddress"] = $param["PrimaryIpAddress"];
            }
        }
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            if(is_bool($param["Status"])){
                $this->RequestParams["Status"] = $param["Status"] ? "true" : "false";
            } else {
                $this->RequestParams["Status"] = $param["Status"];
            }
        }
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            if(is_bool($param["VpcId"])){
                $this->RequestParams["VpcId"] = $param["VpcId"] ? "true" : "false";
            } else {
                $this->RequestParams["VpcId"] = $param["VpcId"];
            }
        }
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            if(is_bool($param["ZoneId"])){
                $this->RequestParams["ZoneId"] = $param["ZoneId"] ? "true" : "false";
            } else {
                $this->RequestParams["ZoneId"] = $param["ZoneId"];
            }
        }
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $res = $this->formatFilterParams("InstanceIds",$param["InstanceIds"]);
            $this->_unserialize("InstanceIds",$res);
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