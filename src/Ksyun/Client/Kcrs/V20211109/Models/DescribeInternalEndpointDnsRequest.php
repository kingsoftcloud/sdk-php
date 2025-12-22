<?php
namespace  Ksyun\Client\Kcrs\V20211109\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeInternalEndpointDnsRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "InstanceId" => null,
         /**String**/
        "VpcId" => null,
         /**String**/
        "EniLBIp" => null,
         /**String**/
        "InternalEndpointDns" => null,
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            if(is_bool($param["InstanceId"])){
                $this->RequestParams["InstanceId"] = $param["InstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceId"] = $param["InstanceId"];
            }
        }
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            if(is_bool($param["VpcId"])){
                $this->RequestParams["VpcId"] = $param["VpcId"] ? "true" : "false";
            } else {
                $this->RequestParams["VpcId"] = $param["VpcId"];
            }
        }
        if (array_key_exists("EniLBIp",$param) and $param["EniLBIp"] !== null) {
            if(is_bool($param["EniLBIp"])){
                $this->RequestParams["EniLBIp"] = $param["EniLBIp"] ? "true" : "false";
            } else {
                $this->RequestParams["EniLBIp"] = $param["EniLBIp"];
            }
        }
        if (array_key_exists("InternalEndpointDns",$param) and $param["InternalEndpointDns"] !== null) {
            if(is_bool($param["InternalEndpointDns"])){
                $this->RequestParams["InternalEndpointDns"] = $param["InternalEndpointDns"] ? "true" : "false";
            } else {
                $this->RequestParams["InternalEndpointDns"] = $param["InternalEndpointDns"];
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