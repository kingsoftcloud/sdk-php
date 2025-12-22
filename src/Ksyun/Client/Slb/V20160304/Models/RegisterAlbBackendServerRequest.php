<?php
namespace  Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class RegisterAlbBackendServerRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "BackendServerGroupId" => null,
         /**String**/
        "BackendServerIp" => null,
         /**Int**/
        "Port" => null,
         /**Int**/
        "Weight" => null,
         /**String**/
        "NetworkInterfaceId" => null,
         /**String**/
        "DirectConnectGatewayId" => null,
         /**String**/
        "MasterSlaveType" => null,
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
        if (array_key_exists("BackendServerGroupId",$param) and $param["BackendServerGroupId"] !== null) {
            if(is_bool($param["BackendServerGroupId"])){
                $this->RequestParams["BackendServerGroupId"] = $param["BackendServerGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["BackendServerGroupId"] = $param["BackendServerGroupId"];
            }
        }
        if (array_key_exists("BackendServerIp",$param) and $param["BackendServerIp"] !== null) {
            if(is_bool($param["BackendServerIp"])){
                $this->RequestParams["BackendServerIp"] = $param["BackendServerIp"] ? "true" : "false";
            } else {
                $this->RequestParams["BackendServerIp"] = $param["BackendServerIp"];
            }
        }
        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            if(is_bool($param["Port"])){
                $this->RequestParams["Port"] = $param["Port"] ? "true" : "false";
            } else {
                $this->RequestParams["Port"] = $param["Port"];
            }
        }
        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            if(is_bool($param["Weight"])){
                $this->RequestParams["Weight"] = $param["Weight"] ? "true" : "false";
            } else {
                $this->RequestParams["Weight"] = $param["Weight"];
            }
        }
        if (array_key_exists("NetworkInterfaceId",$param) and $param["NetworkInterfaceId"] !== null) {
            if(is_bool($param["NetworkInterfaceId"])){
                $this->RequestParams["NetworkInterfaceId"] = $param["NetworkInterfaceId"] ? "true" : "false";
            } else {
                $this->RequestParams["NetworkInterfaceId"] = $param["NetworkInterfaceId"];
            }
        }
        if (array_key_exists("DirectConnectGatewayId",$param) and $param["DirectConnectGatewayId"] !== null) {
            if(is_bool($param["DirectConnectGatewayId"])){
                $this->RequestParams["DirectConnectGatewayId"] = $param["DirectConnectGatewayId"] ? "true" : "false";
            } else {
                $this->RequestParams["DirectConnectGatewayId"] = $param["DirectConnectGatewayId"];
            }
        }
        if (array_key_exists("MasterSlaveType",$param) and $param["MasterSlaveType"] !== null) {
            if(is_bool($param["MasterSlaveType"])){
                $this->RequestParams["MasterSlaveType"] = $param["MasterSlaveType"] ? "true" : "false";
            } else {
                $this->RequestParams["MasterSlaveType"] = $param["MasterSlaveType"];
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