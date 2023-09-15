<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateVpnTunnelRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "CustomerGatewayId" => null,
         /**String**/
        "VpnGatewayId" => null,
         /**String**/
        "VpnTunnelName" => null,
         /**String**/
        "IpsecAuthenAlgorithm" => null,
         /**String**/
        "IpsecEncryAlgorithm" => null,
         /**String**/
        "IkeAuthenAlgorithm" => null,
         /**String**/
        "IkeEncryAlgorithm" => null,
         /**String**/
        "Type" => null,
         /**String**/
        "PreSharedKey" => null,
         /**Int**/
        "IpsecLifetimeSecond" => null,
         /**Int**/
        "IpsecLifetimeTraffic" => null,
         /**String**/
        "IkeDHGroup" => null,
         /**Boolean**/
        "EnableNatTraversal" => null,
         /**String**/
        "VpnGreIp" => null,
         /**String**/
        "HaVpnGreIp" => null,
         /**String**/
        "CustomerGreIp" => null,
         /**String**/
        "HaCustomerGreIp" => null,
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
        if (array_key_exists("CustomerGatewayId",$param) and $param["CustomerGatewayId"] !== null) {
            if(is_bool($param["CustomerGatewayId"])){
                $this->RequestParams["CustomerGatewayId"] = $param["CustomerGatewayId"] ? "true" : "false";
            } else {
                $this->RequestParams["CustomerGatewayId"] = $param["CustomerGatewayId"];
            }
        }
        if (array_key_exists("VpnGatewayId",$param) and $param["VpnGatewayId"] !== null) {
            if(is_bool($param["VpnGatewayId"])){
                $this->RequestParams["VpnGatewayId"] = $param["VpnGatewayId"] ? "true" : "false";
            } else {
                $this->RequestParams["VpnGatewayId"] = $param["VpnGatewayId"];
            }
        }
        if (array_key_exists("VpnTunnelName",$param) and $param["VpnTunnelName"] !== null) {
            if(is_bool($param["VpnTunnelName"])){
                $this->RequestParams["VpnTunnelName"] = $param["VpnTunnelName"] ? "true" : "false";
            } else {
                $this->RequestParams["VpnTunnelName"] = $param["VpnTunnelName"];
            }
        }
        if (array_key_exists("IpsecAuthenAlgorithm",$param) and $param["IpsecAuthenAlgorithm"] !== null) {
            if(is_bool($param["IpsecAuthenAlgorithm"])){
                $this->RequestParams["IpsecAuthenAlgorithm"] = $param["IpsecAuthenAlgorithm"] ? "true" : "false";
            } else {
                $this->RequestParams["IpsecAuthenAlgorithm"] = $param["IpsecAuthenAlgorithm"];
            }
        }
        if (array_key_exists("IpsecEncryAlgorithm",$param) and $param["IpsecEncryAlgorithm"] !== null) {
            if(is_bool($param["IpsecEncryAlgorithm"])){
                $this->RequestParams["IpsecEncryAlgorithm"] = $param["IpsecEncryAlgorithm"] ? "true" : "false";
            } else {
                $this->RequestParams["IpsecEncryAlgorithm"] = $param["IpsecEncryAlgorithm"];
            }
        }
        if (array_key_exists("IkeAuthenAlgorithm",$param) and $param["IkeAuthenAlgorithm"] !== null) {
            if(is_bool($param["IkeAuthenAlgorithm"])){
                $this->RequestParams["IkeAuthenAlgorithm"] = $param["IkeAuthenAlgorithm"] ? "true" : "false";
            } else {
                $this->RequestParams["IkeAuthenAlgorithm"] = $param["IkeAuthenAlgorithm"];
            }
        }
        if (array_key_exists("IkeEncryAlgorithm",$param) and $param["IkeEncryAlgorithm"] !== null) {
            if(is_bool($param["IkeEncryAlgorithm"])){
                $this->RequestParams["IkeEncryAlgorithm"] = $param["IkeEncryAlgorithm"] ? "true" : "false";
            } else {
                $this->RequestParams["IkeEncryAlgorithm"] = $param["IkeEncryAlgorithm"];
            }
        }
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            if(is_bool($param["Type"])){
                $this->RequestParams["Type"] = $param["Type"] ? "true" : "false";
            } else {
                $this->RequestParams["Type"] = $param["Type"];
            }
        }
        if (array_key_exists("PreSharedKey",$param) and $param["PreSharedKey"] !== null) {
            if(is_bool($param["PreSharedKey"])){
                $this->RequestParams["PreSharedKey"] = $param["PreSharedKey"] ? "true" : "false";
            } else {
                $this->RequestParams["PreSharedKey"] = $param["PreSharedKey"];
            }
        }
        if (array_key_exists("IpsecLifetimeSecond",$param) and $param["IpsecLifetimeSecond"] !== null) {
            if(is_bool($param["IpsecLifetimeSecond"])){
                $this->RequestParams["IpsecLifetimeSecond"] = $param["IpsecLifetimeSecond"] ? "true" : "false";
            } else {
                $this->RequestParams["IpsecLifetimeSecond"] = $param["IpsecLifetimeSecond"];
            }
        }
        if (array_key_exists("IpsecLifetimeTraffic",$param) and $param["IpsecLifetimeTraffic"] !== null) {
            if(is_bool($param["IpsecLifetimeTraffic"])){
                $this->RequestParams["IpsecLifetimeTraffic"] = $param["IpsecLifetimeTraffic"] ? "true" : "false";
            } else {
                $this->RequestParams["IpsecLifetimeTraffic"] = $param["IpsecLifetimeTraffic"];
            }
        }
        if (array_key_exists("IkeDHGroup",$param) and $param["IkeDHGroup"] !== null) {
            if(is_bool($param["IkeDHGroup"])){
                $this->RequestParams["IkeDHGroup"] = $param["IkeDHGroup"] ? "true" : "false";
            } else {
                $this->RequestParams["IkeDHGroup"] = $param["IkeDHGroup"];
            }
        }
        if (array_key_exists("EnableNatTraversal",$param) and $param["EnableNatTraversal"] !== null) {
            if(is_bool($param["EnableNatTraversal"])){
                $this->RequestParams["EnableNatTraversal"] = $param["EnableNatTraversal"] ? "true" : "false";
            } else {
                $this->RequestParams["EnableNatTraversal"] = $param["EnableNatTraversal"];
            }
        }
        if (array_key_exists("VpnGreIp",$param) and $param["VpnGreIp"] !== null) {
            if(is_bool($param["VpnGreIp"])){
                $this->RequestParams["VpnGreIp"] = $param["VpnGreIp"] ? "true" : "false";
            } else {
                $this->RequestParams["VpnGreIp"] = $param["VpnGreIp"];
            }
        }
        if (array_key_exists("HaVpnGreIp",$param) and $param["HaVpnGreIp"] !== null) {
            if(is_bool($param["HaVpnGreIp"])){
                $this->RequestParams["HaVpnGreIp"] = $param["HaVpnGreIp"] ? "true" : "false";
            } else {
                $this->RequestParams["HaVpnGreIp"] = $param["HaVpnGreIp"];
            }
        }
        if (array_key_exists("CustomerGreIp",$param) and $param["CustomerGreIp"] !== null) {
            if(is_bool($param["CustomerGreIp"])){
                $this->RequestParams["CustomerGreIp"] = $param["CustomerGreIp"] ? "true" : "false";
            } else {
                $this->RequestParams["CustomerGreIp"] = $param["CustomerGreIp"];
            }
        }
        if (array_key_exists("HaCustomerGreIp",$param) and $param["HaCustomerGreIp"] !== null) {
            if(is_bool($param["HaCustomerGreIp"])){
                $this->RequestParams["HaCustomerGreIp"] = $param["HaCustomerGreIp"] ? "true" : "false";
            } else {
                $this->RequestParams["HaCustomerGreIp"] = $param["HaCustomerGreIp"];
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