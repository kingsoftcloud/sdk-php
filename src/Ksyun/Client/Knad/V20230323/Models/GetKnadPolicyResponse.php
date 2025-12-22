<?php
namespace  Ksyun\Client\Knad\V20230323\Models;

use Ksyun\Common\BaseModel;

class GetKnadPolicyResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /** **/
         public  $TemplateId;

         /** Udp封禁。
1：封禁 0：不封禁**/
         public  $UdpBlock;

         /** **/
         public  $TcpBlock;

         /** **/
         public  $IcmpBlock;

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
            if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
                $this->TemplateId = $param["TemplateId"];
            }
            if (array_key_exists("UdpBlock",$param) and $param["UdpBlock"] !== null) {
                $this->UdpBlock = $param["UdpBlock"];
            }
            if (array_key_exists("TcpBlock",$param) and $param["TcpBlock"] !== null) {
                $this->TcpBlock = $param["TcpBlock"];
            }
            if (array_key_exists("IcmpBlock",$param) and $param["IcmpBlock"] !== null) {
                $this->IcmpBlock = $param["IcmpBlock"];
            }

        }
}