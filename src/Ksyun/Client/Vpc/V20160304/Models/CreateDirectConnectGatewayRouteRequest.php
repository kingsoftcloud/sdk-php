<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateDirectConnectGatewayRouteRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DirectConnectGatewayId" => null,
         /**String**/
        "DestinationCidrBlock" => null,
         /**String**/
        "NextHopType" => null,
         /**Int**/
        "Priority" => null,
         /**String**/
        "NextHopInstance" => null,
         /**Boolean**/
        "EnableIpv6" => null,
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
        if (array_key_exists("DirectConnectGatewayId",$param) and $param["DirectConnectGatewayId"] !== null) {
            if(is_bool($param["DirectConnectGatewayId"])){
                $this->RequestParams["DirectConnectGatewayId"] = $param["DirectConnectGatewayId"] ? "true" : "false";
            } else {
                $this->RequestParams["DirectConnectGatewayId"] = $param["DirectConnectGatewayId"];
            }
        }
        if (array_key_exists("DestinationCidrBlock",$param) and $param["DestinationCidrBlock"] !== null) {
            if(is_bool($param["DestinationCidrBlock"])){
                $this->RequestParams["DestinationCidrBlock"] = $param["DestinationCidrBlock"] ? "true" : "false";
            } else {
                $this->RequestParams["DestinationCidrBlock"] = $param["DestinationCidrBlock"];
            }
        }
        if (array_key_exists("NextHopType",$param) and $param["NextHopType"] !== null) {
            if(is_bool($param["NextHopType"])){
                $this->RequestParams["NextHopType"] = $param["NextHopType"] ? "true" : "false";
            } else {
                $this->RequestParams["NextHopType"] = $param["NextHopType"];
            }
        }
        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            if(is_bool($param["Priority"])){
                $this->RequestParams["Priority"] = $param["Priority"] ? "true" : "false";
            } else {
                $this->RequestParams["Priority"] = $param["Priority"];
            }
        }
        if (array_key_exists("NextHopInstance",$param) and $param["NextHopInstance"] !== null) {
            if(is_bool($param["NextHopInstance"])){
                $this->RequestParams["NextHopInstance"] = $param["NextHopInstance"] ? "true" : "false";
            } else {
                $this->RequestParams["NextHopInstance"] = $param["NextHopInstance"];
            }
        }
        if (array_key_exists("EnableIpv6",$param) and $param["EnableIpv6"] !== null) {
            if(is_bool($param["EnableIpv6"])){
                $this->RequestParams["EnableIpv6"] = $param["EnableIpv6"] ? "true" : "false";
            } else {
                $this->RequestParams["EnableIpv6"] = $param["EnableIpv6"];
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