<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class AssignPrivateIpAddressResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 网卡的信息**/
         public  $NetworkInterface;

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
            if (array_key_exists("NetworkInterface",$param) and $param["NetworkInterface"] !== null) {
                $this->NetworkInterface = $param["NetworkInterface"];
            }

        }
}