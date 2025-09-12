<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateDnatRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "NatId" => null,
         /**String**/
        "NatIp" => null,
         /**String**/
        "DnatName" => null,
         /**String**/
        "PublicPort" => null,
         /**String**/
        "PrivateIpAddress" => null,
         /**String**/
        "IpProtocol" => null,
         /**String**/
        "PrivatePort" => null,
         /**String**/
        "Description" => null,
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
        if (array_key_exists("NatId",$param) and $param["NatId"] !== null) {
            if(is_bool($param["NatId"])){
                $this->RequestParams["NatId"] = $param["NatId"] ? "true" : "false";
            } else {
                $this->RequestParams["NatId"] = $param["NatId"];
            }
        }
        if (array_key_exists("NatIp",$param) and $param["NatIp"] !== null) {
            if(is_bool($param["NatIp"])){
                $this->RequestParams["NatIp"] = $param["NatIp"] ? "true" : "false";
            } else {
                $this->RequestParams["NatIp"] = $param["NatIp"];
            }
        }
        if (array_key_exists("DnatName",$param) and $param["DnatName"] !== null) {
            if(is_bool($param["DnatName"])){
                $this->RequestParams["DnatName"] = $param["DnatName"] ? "true" : "false";
            } else {
                $this->RequestParams["DnatName"] = $param["DnatName"];
            }
        }
        if (array_key_exists("PublicPort",$param) and $param["PublicPort"] !== null) {
            if(is_bool($param["PublicPort"])){
                $this->RequestParams["PublicPort"] = $param["PublicPort"] ? "true" : "false";
            } else {
                $this->RequestParams["PublicPort"] = $param["PublicPort"];
            }
        }
        if (array_key_exists("PrivateIpAddress",$param) and $param["PrivateIpAddress"] !== null) {
            if(is_bool($param["PrivateIpAddress"])){
                $this->RequestParams["PrivateIpAddress"] = $param["PrivateIpAddress"] ? "true" : "false";
            } else {
                $this->RequestParams["PrivateIpAddress"] = $param["PrivateIpAddress"];
            }
        }
        if (array_key_exists("IpProtocol",$param) and $param["IpProtocol"] !== null) {
            if(is_bool($param["IpProtocol"])){
                $this->RequestParams["IpProtocol"] = $param["IpProtocol"] ? "true" : "false";
            } else {
                $this->RequestParams["IpProtocol"] = $param["IpProtocol"];
            }
        }
        if (array_key_exists("PrivatePort",$param) and $param["PrivatePort"] !== null) {
            if(is_bool($param["PrivatePort"])){
                $this->RequestParams["PrivatePort"] = $param["PrivatePort"] ? "true" : "false";
            } else {
                $this->RequestParams["PrivatePort"] = $param["PrivatePort"];
            }
        }
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            if(is_bool($param["Description"])){
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
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