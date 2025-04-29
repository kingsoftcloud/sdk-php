<?php

namespace Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class AttachNetworkInterfaceRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "InstanceId" => null,
        /**String**/
        "NetworkInterfaceId" => null,
        /**String**/
        "SubnetId" => null,
        /**String**/
        "SecurityGroupId" => null,
        /**String**/
        "PrivateIpAddress" => null,
        /**Array**/
        "SecurityGroupIds" => null,
        /**String**/
        "VpcIpv6" => null,
        /**String**/
        "MacAddress" => null,
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
        if (array_key_exists("InstanceId", $param) and $param["InstanceId"] !== null) {
            if (is_bool($param["InstanceId"])) {
                $this->RequestParams["InstanceId"] = $param["InstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceId"] = $param["InstanceId"];
            }
        }
        if (array_key_exists("NetworkInterfaceId", $param) and $param["NetworkInterfaceId"] !== null) {
            if (is_bool($param["NetworkInterfaceId"])) {
                $this->RequestParams["NetworkInterfaceId"] = $param["NetworkInterfaceId"] ? "true" : "false";
            } else {
                $this->RequestParams["NetworkInterfaceId"] = $param["NetworkInterfaceId"];
            }
        }
        if (array_key_exists("SubnetId", $param) and $param["SubnetId"] !== null) {
            if (is_bool($param["SubnetId"])) {
                $this->RequestParams["SubnetId"] = $param["SubnetId"] ? "true" : "false";
            } else {
                $this->RequestParams["SubnetId"] = $param["SubnetId"];
            }
        }
        if (array_key_exists("SecurityGroupId", $param) and $param["SecurityGroupId"] !== null) {
            if (is_bool($param["SecurityGroupId"])) {
                $this->RequestParams["SecurityGroupId"] = $param["SecurityGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupId"] = $param["SecurityGroupId"];
            }
        }
        if (array_key_exists("PrivateIpAddress", $param) and $param["PrivateIpAddress"] !== null) {
            if (is_bool($param["PrivateIpAddress"])) {
                $this->RequestParams["PrivateIpAddress"] = $param["PrivateIpAddress"] ? "true" : "false";
            } else {
                $this->RequestParams["PrivateIpAddress"] = $param["PrivateIpAddress"];
            }
        }
        if (array_key_exists("SecurityGroupIds", $param) and $param["SecurityGroupIds"] !== null) {
            if (is_bool($param["SecurityGroupIds"])) {
                $this->RequestParams["SecurityGroupIds"] = $param["SecurityGroupIds"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupIds"] = $param["SecurityGroupIds"];
            }
        }
        if (array_key_exists("VpcIpv6", $param) and $param["VpcIpv6"] !== null) {
            if (is_bool($param["VpcIpv6"])) {
                $this->RequestParams["VpcIpv6"] = $param["VpcIpv6"] ? "true" : "false";
            } else {
                $this->RequestParams["VpcIpv6"] = $param["VpcIpv6"];
            }
        }
        if (array_key_exists("MacAddress", $param) and $param["MacAddress"] !== null) {
            if (is_bool($param["MacAddress"])) {
                $this->RequestParams["MacAddress"] = $param["MacAddress"] ? "true" : "false";
            } else {
                $this->RequestParams["MacAddress"] = $param["MacAddress"];
            }
        }

    }

    private function _unserialize($name, $params)
    {
        if ($params === null) {
            return;
        }
        foreach ($params as $key => $value) {
            $this->$name[$key] = $value;
        }

    }
}