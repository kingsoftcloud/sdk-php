<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateVpnGatewayRouteRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "VpnGatewayId" => null,
         /**String**/
        "DestinationCidrBlock" => null,
         /**String**/
        "NextHopType" => null,
         /**String**/
        "NextHopInstanceId" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("VpnGatewayId",$param) and $param["VpnGatewayId"] !== null) {
            if(is_bool($param["VpnGatewayId"])){
                $this->RequestParams["VpnGatewayId"] = $param["VpnGatewayId"] ? "true" : "false";
            } else {
                $this->RequestParams["VpnGatewayId"] = $param["VpnGatewayId"];
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
        if (array_key_exists("NextHopInstanceId",$param) and $param["NextHopInstanceId"] !== null) {
            if(is_bool($param["NextHopInstanceId"])){
                $this->RequestParams["NextHopInstanceId"] = $param["NextHopInstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["NextHopInstanceId"] = $param["NextHopInstanceId"];
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