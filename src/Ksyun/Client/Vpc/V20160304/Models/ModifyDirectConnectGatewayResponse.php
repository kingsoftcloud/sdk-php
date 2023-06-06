<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyDirectConnectGatewayResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /**Object 边界网关的信息**/
         public  $DirectConnectGateway;

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
            if (array_key_exists("DirectConnectGateway",$param) and $param["DirectConnectGateway"] !== null) {
                $this->DirectConnectGateway = $param["DirectConnectGateway"];
            }

        }
}