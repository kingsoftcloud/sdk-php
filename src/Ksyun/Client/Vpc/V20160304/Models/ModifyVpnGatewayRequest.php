<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyVpnGatewayRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "VpnGatewayId" => null,
         /**Int**/
        "BandWidth" => null,
         /**String**/
        "VpnGatewayName" => null,
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
        if (array_key_exists("BandWidth",$param) and $param["BandWidth"] !== null) {
            if(is_bool($param["BandWidth"])){
                $this->RequestParams["BandWidth"] = $param["BandWidth"] ? "true" : "false";
            } else {
                $this->RequestParams["BandWidth"] = $param["BandWidth"];
            }
        }
        if (array_key_exists("VpnGatewayName",$param) and $param["VpnGatewayName"] !== null) {
            if(is_bool($param["VpnGatewayName"])){
                $this->RequestParams["VpnGatewayName"] = $param["VpnGatewayName"] ? "true" : "false";
            } else {
                $this->RequestParams["VpnGatewayName"] = $param["VpnGatewayName"];
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