<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateDirectConnectInterfaceRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DirectConnectId" => null,
         /**Int**/
        "VlanId" => null,
         /**String**/
        "RouteType" => null,
         /**String**/
        "DirectConnectInterfaceName" => null,
         /**String**/
        "DirectConnectInterfaceAccountId" => null,
         /**String**/
        "CustomerPeerIp" => null,
         /**String**/
        "LocalPeerIp" => null,
         /**String**/
        "HaDirectConnectId" => null,
         /**String**/
        "HaCustomerPeerIp" => null,
         /**String**/
        "HaLocalPeerIp" => null,
         /**String**/
        "BgpPeer" => null,
         /**String**/
        "ReliabilityMethod" => null,
         /**String**/
        "BfdConfigId" => null,
         /**String**/
        "BgpClientToken" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DirectConnectId",$param) and $param["DirectConnectId"] !== null) {
            if(is_bool($param["DirectConnectId"])){
                $this->RequestParams["DirectConnectId"] = $param["DirectConnectId"] ? "true" : "false";
            } else {
                $this->RequestParams["DirectConnectId"] = $param["DirectConnectId"];
            }
        }
        if (array_key_exists("VlanId",$param) and $param["VlanId"] !== null) {
            if(is_bool($param["VlanId"])){
                $this->RequestParams["VlanId"] = $param["VlanId"] ? "true" : "false";
            } else {
                $this->RequestParams["VlanId"] = $param["VlanId"];
            }
        }
        if (array_key_exists("RouteType",$param) and $param["RouteType"] !== null) {
            if(is_bool($param["RouteType"])){
                $this->RequestParams["RouteType"] = $param["RouteType"] ? "true" : "false";
            } else {
                $this->RequestParams["RouteType"] = $param["RouteType"];
            }
        }
        if (array_key_exists("DirectConnectInterfaceName",$param) and $param["DirectConnectInterfaceName"] !== null) {
            if(is_bool($param["DirectConnectInterfaceName"])){
                $this->RequestParams["DirectConnectInterfaceName"] = $param["DirectConnectInterfaceName"] ? "true" : "false";
            } else {
                $this->RequestParams["DirectConnectInterfaceName"] = $param["DirectConnectInterfaceName"];
            }
        }
        if (array_key_exists("DirectConnectInterfaceAccountId",$param) and $param["DirectConnectInterfaceAccountId"] !== null) {
            if(is_bool($param["DirectConnectInterfaceAccountId"])){
                $this->RequestParams["DirectConnectInterfaceAccountId"] = $param["DirectConnectInterfaceAccountId"] ? "true" : "false";
            } else {
                $this->RequestParams["DirectConnectInterfaceAccountId"] = $param["DirectConnectInterfaceAccountId"];
            }
        }
        if (array_key_exists("CustomerPeerIp",$param) and $param["CustomerPeerIp"] !== null) {
            if(is_bool($param["CustomerPeerIp"])){
                $this->RequestParams["CustomerPeerIp"] = $param["CustomerPeerIp"] ? "true" : "false";
            } else {
                $this->RequestParams["CustomerPeerIp"] = $param["CustomerPeerIp"];
            }
        }
        if (array_key_exists("LocalPeerIp",$param) and $param["LocalPeerIp"] !== null) {
            if(is_bool($param["LocalPeerIp"])){
                $this->RequestParams["LocalPeerIp"] = $param["LocalPeerIp"] ? "true" : "false";
            } else {
                $this->RequestParams["LocalPeerIp"] = $param["LocalPeerIp"];
            }
        }
        if (array_key_exists("HaDirectConnectId",$param) and $param["HaDirectConnectId"] !== null) {
            if(is_bool($param["HaDirectConnectId"])){
                $this->RequestParams["HaDirectConnectId"] = $param["HaDirectConnectId"] ? "true" : "false";
            } else {
                $this->RequestParams["HaDirectConnectId"] = $param["HaDirectConnectId"];
            }
        }
        if (array_key_exists("HaCustomerPeerIp",$param) and $param["HaCustomerPeerIp"] !== null) {
            if(is_bool($param["HaCustomerPeerIp"])){
                $this->RequestParams["HaCustomerPeerIp"] = $param["HaCustomerPeerIp"] ? "true" : "false";
            } else {
                $this->RequestParams["HaCustomerPeerIp"] = $param["HaCustomerPeerIp"];
            }
        }
        if (array_key_exists("HaLocalPeerIp",$param) and $param["HaLocalPeerIp"] !== null) {
            if(is_bool($param["HaLocalPeerIp"])){
                $this->RequestParams["HaLocalPeerIp"] = $param["HaLocalPeerIp"] ? "true" : "false";
            } else {
                $this->RequestParams["HaLocalPeerIp"] = $param["HaLocalPeerIp"];
            }
        }
        if (array_key_exists("BgpPeer",$param) and $param["BgpPeer"] !== null) {
            if(is_bool($param["BgpPeer"])){
                $this->RequestParams["BgpPeer"] = $param["BgpPeer"] ? "true" : "false";
            } else {
                $this->RequestParams["BgpPeer"] = $param["BgpPeer"];
            }
        }
        if (array_key_exists("ReliabilityMethod",$param) and $param["ReliabilityMethod"] !== null) {
            if(is_bool($param["ReliabilityMethod"])){
                $this->RequestParams["ReliabilityMethod"] = $param["ReliabilityMethod"] ? "true" : "false";
            } else {
                $this->RequestParams["ReliabilityMethod"] = $param["ReliabilityMethod"];
            }
        }
        if (array_key_exists("BfdConfigId",$param) and $param["BfdConfigId"] !== null) {
            if(is_bool($param["BfdConfigId"])){
                $this->RequestParams["BfdConfigId"] = $param["BfdConfigId"] ? "true" : "false";
            } else {
                $this->RequestParams["BfdConfigId"] = $param["BfdConfigId"];
            }
        }
        if (array_key_exists("BgpClientToken",$param) and $param["BgpClientToken"] !== null) {
            if(is_bool($param["BgpClientToken"])){
                $this->RequestParams["BgpClientToken"] = $param["BgpClientToken"] ? "true" : "false";
            } else {
                $this->RequestParams["BgpClientToken"] = $param["BgpClientToken"];
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