<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class DeleteVpnTunnelRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "VpnTunnelId" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("VpnTunnelId",$param) and $param["VpnTunnelId"] !== null) {
            if(is_bool($param["VpnTunnelId"])){
                $this->RequestParams["VpnTunnelId"] = $param["VpnTunnelId"] ? "true" : "false";
            } else {
                $this->RequestParams["VpnTunnelId"] = $param["VpnTunnelId"];
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