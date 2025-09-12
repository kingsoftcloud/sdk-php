<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyIpv6PublicIpResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** IPV6公网的信息**/
         public  $Ipv6PublicIpAddress;

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
            if (array_key_exists("Ipv6PublicIpAddress",$param) and $param["Ipv6PublicIpAddress"] !== null) {
                $this->Ipv6PublicIpAddress = $param["Ipv6PublicIpAddress"];
            }

        }
}