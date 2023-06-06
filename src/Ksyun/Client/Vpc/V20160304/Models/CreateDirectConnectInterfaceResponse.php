<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateDirectConnectInterfaceResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /**Object 连接通道的信息**/
         public  $DirectConnectInterface;

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
            if (array_key_exists("DirectConnectInterface",$param) and $param["DirectConnectInterface"] !== null) {
                $this->DirectConnectInterface = $param["DirectConnectInterface"];
            }

        }
}