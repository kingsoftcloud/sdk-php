<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateVpnGatewayRouteResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** VPN网关路由id**/
         public  $RouteId;

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
            if (array_key_exists("RouteId",$param) and $param["RouteId"] !== null) {
                $this->RouteId = $param["RouteId"];
            }

        }
}