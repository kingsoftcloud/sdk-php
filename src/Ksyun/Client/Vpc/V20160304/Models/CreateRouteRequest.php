<?php

namespace Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateRouteRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "VpcId" => null,
        /**String**/
        "RouteType" => null,
        /**String**/
        "DestinationCidrBlock" => null,
        /**String**/
        "InstanceId" => null,
        /**String**/
        "VpcPeeringConnectionId" => null,
        /**String**/
        "DirectConnectGatewayId" => null,
        /**String**/
        "VpnTunnelId" => null,
        /**String**/
        "NetworkInterfaceId" => null,
        /**String**/
        "HaVipId" => null,
        /**String**/
        "HaVipMasterNetworkInterfaceId" => null,
        /**String**/
        "CenId" => null,
        /**String**/
        "Description" => null,
        /**String**/
        "RouteTableId" => null,
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
        if (array_key_exists("RouteType", $param) and $param["RouteType"] !== null) {
            if (is_bool($param["RouteType"])) {
                $this->RequestParams["RouteType"] = $param["RouteType"] ? "true" : "false";
            } else {
                $this->RequestParams["RouteType"] = $param["RouteType"];
            }
        }
        if (array_key_exists("DestinationCidrBlock", $param) and $param["DestinationCidrBlock"] !== null) {
            if (is_bool($param["DestinationCidrBlock"])) {
                $this->RequestParams["DestinationCidrBlock"] = $param["DestinationCidrBlock"] ? "true" : "false";
            } else {
                $this->RequestParams["DestinationCidrBlock"] = $param["DestinationCidrBlock"];
            }
        }
        if (array_key_exists("InstanceId", $param) and $param["InstanceId"] !== null) {
            if (is_bool($param["InstanceId"])) {
                $this->RequestParams["InstanceId"] = $param["InstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceId"] = $param["InstanceId"];
            }
        }
        if (array_key_exists("VpcPeeringConnectionId", $param) and $param["VpcPeeringConnectionId"] !== null) {
            if (is_bool($param["VpcPeeringConnectionId"])) {
                $this->RequestParams["VpcPeeringConnectionId"] = $param["VpcPeeringConnectionId"] ? "true" : "false";
            } else {
                $this->RequestParams["VpcPeeringConnectionId"] = $param["VpcPeeringConnectionId"];
            }
        }
        if (array_key_exists("DirectConnectGatewayId", $param) and $param["DirectConnectGatewayId"] !== null) {
            if (is_bool($param["DirectConnectGatewayId"])) {
                $this->RequestParams["DirectConnectGatewayId"] = $param["DirectConnectGatewayId"] ? "true" : "false";
            } else {
                $this->RequestParams["DirectConnectGatewayId"] = $param["DirectConnectGatewayId"];
            }
        }
        if (array_key_exists("VpnTunnelId", $param) and $param["VpnTunnelId"] !== null) {
            if (is_bool($param["VpnTunnelId"])) {
                $this->RequestParams["VpnTunnelId"] = $param["VpnTunnelId"] ? "true" : "false";
            } else {
                $this->RequestParams["VpnTunnelId"] = $param["VpnTunnelId"];
            }
        }
        if (array_key_exists("NetworkInterfaceId", $param) and $param["NetworkInterfaceId"] !== null) {
            if (is_bool($param["NetworkInterfaceId"])) {
                $this->RequestParams["NetworkInterfaceId"] = $param["NetworkInterfaceId"] ? "true" : "false";
            } else {
                $this->RequestParams["NetworkInterfaceId"] = $param["NetworkInterfaceId"];
            }
        }
        if (array_key_exists("HaVipId", $param) and $param["HaVipId"] !== null) {
            if (is_bool($param["HaVipId"])) {
                $this->RequestParams["HaVipId"] = $param["HaVipId"] ? "true" : "false";
            } else {
                $this->RequestParams["HaVipId"] = $param["HaVipId"];
            }
        }
        if (array_key_exists("HaVipMasterNetworkInterfaceId", $param) and $param["HaVipMasterNetworkInterfaceId"] !== null) {
            if (is_bool($param["HaVipMasterNetworkInterfaceId"])) {
                $this->RequestParams["HaVipMasterNetworkInterfaceId"] = $param["HaVipMasterNetworkInterfaceId"] ? "true" : "false";
            } else {
                $this->RequestParams["HaVipMasterNetworkInterfaceId"] = $param["HaVipMasterNetworkInterfaceId"];
            }
        }
        if (array_key_exists("CenId", $param) and $param["CenId"] !== null) {
            if (is_bool($param["CenId"])) {
                $this->RequestParams["CenId"] = $param["CenId"] ? "true" : "false";
            } else {
                $this->RequestParams["CenId"] = $param["CenId"];
            }
        }
        if (array_key_exists("Description", $param) and $param["Description"] !== null) {
            if (is_bool($param["Description"])) {
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
            }
        }
        if (array_key_exists("RouteTableId", $param) and $param["RouteTableId"] !== null) {
            if (is_bool($param["RouteTableId"])) {
                $this->RequestParams["RouteTableId"] = $param["RouteTableId"] ? "true" : "false";
            } else {
                $this->RequestParams["RouteTableId"] = $param["RouteTableId"];
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