<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyVpnTunnelResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /**Object Vpn通道信息**/
         public  $VpnTunnel;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }
            if (array_key_exists("VpnTunnel",$param) and $param["VpnTunnel"] !== null) {
                $this->VpnTunnel = $param["VpnTunnel"];
            }

        }
}