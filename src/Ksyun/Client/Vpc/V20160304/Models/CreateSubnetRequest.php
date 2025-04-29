<?php

namespace Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateSubnetRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "VpcId" => null,
        /**String**/
        "SubnetName" => null,
        /**String**/
        "CidrBlock" => null,
        /**Boolean**/
        "ProvidedIpv6CidrBlock" => null,
        /**String**/
        "SubnetType" => null,
        /**String**/
        "DhcpIpFrom" => null,
        /**String**/
        "DhcpIpTo" => null,
        /**String**/
        "Dns1" => null,
        /**String**/
        "Dns2" => null,
        /**String**/
        "GatewayIp" => null,
        /**String**/
        "SecondaryCidrId" => null,
        /**String**/
        "AvailabilityZone" => null,
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
        if (array_key_exists("VpcId", $param) and $param["VpcId"] !== null) {
            if (is_bool($param["VpcId"])) {
                $this->RequestParams["VpcId"] = $param["VpcId"] ? "true" : "false";
            } else {
                $this->RequestParams["VpcId"] = $param["VpcId"];
            }
        }
        if (array_key_exists("SubnetName", $param) and $param["SubnetName"] !== null) {
            if (is_bool($param["SubnetName"])) {
                $this->RequestParams["SubnetName"] = $param["SubnetName"] ? "true" : "false";
            } else {
                $this->RequestParams["SubnetName"] = $param["SubnetName"];
            }
        }
        if (array_key_exists("CidrBlock", $param) and $param["CidrBlock"] !== null) {
            if (is_bool($param["CidrBlock"])) {
                $this->RequestParams["CidrBlock"] = $param["CidrBlock"] ? "true" : "false";
            } else {
                $this->RequestParams["CidrBlock"] = $param["CidrBlock"];
            }
        }
        if (array_key_exists("ProvidedIpv6CidrBlock", $param) and $param["ProvidedIpv6CidrBlock"] !== null) {
            if (is_bool($param["ProvidedIpv6CidrBlock"])) {
                $this->RequestParams["ProvidedIpv6CidrBlock"] = $param["ProvidedIpv6CidrBlock"] ? "true" : "false";
            } else {
                $this->RequestParams["ProvidedIpv6CidrBlock"] = $param["ProvidedIpv6CidrBlock"];
            }
        }
        if (array_key_exists("SubnetType", $param) and $param["SubnetType"] !== null) {
            if (is_bool($param["SubnetType"])) {
                $this->RequestParams["SubnetType"] = $param["SubnetType"] ? "true" : "false";
            } else {
                $this->RequestParams["SubnetType"] = $param["SubnetType"];
            }
        }
        if (array_key_exists("DhcpIpFrom", $param) and $param["DhcpIpFrom"] !== null) {
            if (is_bool($param["DhcpIpFrom"])) {
                $this->RequestParams["DhcpIpFrom"] = $param["DhcpIpFrom"] ? "true" : "false";
            } else {
                $this->RequestParams["DhcpIpFrom"] = $param["DhcpIpFrom"];
            }
        }
        if (array_key_exists("DhcpIpTo", $param) and $param["DhcpIpTo"] !== null) {
            if (is_bool($param["DhcpIpTo"])) {
                $this->RequestParams["DhcpIpTo"] = $param["DhcpIpTo"] ? "true" : "false";
            } else {
                $this->RequestParams["DhcpIpTo"] = $param["DhcpIpTo"];
            }
        }
        if (array_key_exists("Dns1", $param) and $param["Dns1"] !== null) {
            if (is_bool($param["Dns1"])) {
                $this->RequestParams["Dns1"] = $param["Dns1"] ? "true" : "false";
            } else {
                $this->RequestParams["Dns1"] = $param["Dns1"];
            }
        }
        if (array_key_exists("Dns2", $param) and $param["Dns2"] !== null) {
            if (is_bool($param["Dns2"])) {
                $this->RequestParams["Dns2"] = $param["Dns2"] ? "true" : "false";
            } else {
                $this->RequestParams["Dns2"] = $param["Dns2"];
            }
        }
        if (array_key_exists("GatewayIp", $param) and $param["GatewayIp"] !== null) {
            if (is_bool($param["GatewayIp"])) {
                $this->RequestParams["GatewayIp"] = $param["GatewayIp"] ? "true" : "false";
            } else {
                $this->RequestParams["GatewayIp"] = $param["GatewayIp"];
            }
        }
        if (array_key_exists("SecondaryCidrId", $param) and $param["SecondaryCidrId"] !== null) {
            if (is_bool($param["SecondaryCidrId"])) {
                $this->RequestParams["SecondaryCidrId"] = $param["SecondaryCidrId"] ? "true" : "false";
            } else {
                $this->RequestParams["SecondaryCidrId"] = $param["SecondaryCidrId"];
            }
        }
        if (array_key_exists("AvailabilityZone", $param) and $param["AvailabilityZone"] !== null) {
            if (is_bool($param["AvailabilityZone"])) {
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"] ? "true" : "false";
            } else {
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"];
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