<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeVpnTunnelIpsecStatusRequest extends BaseModel
{
    public $RequestParams = [
         /**Int**/
        "IsMaster" => null,
    ];

     /**特殊参数类型:Filter**/
    public $VpnTunnelId = [];
 
    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("IsMaster",$param) and $param["IsMaster"] !== null) {
            if(is_bool($param["IsMaster"])){
                $this->RequestParams["IsMaster"] = $param["IsMaster"] ? "true" : "false";
            } else {
                $this->RequestParams["IsMaster"] = $param["IsMaster"];
            }
        }
        if (array_key_exists("VpnTunnelId",$param) and $param["VpnTunnelId"] !== null) {
            $res = $this->formatFilterParams("VpnTunnelId",$param["VpnTunnelId"]);
            $this->_unserialize("VpnTunnelId",$res);
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