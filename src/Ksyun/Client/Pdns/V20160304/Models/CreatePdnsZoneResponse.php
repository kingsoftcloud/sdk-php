<?php
namespace  Ksyun\Client\Pdns\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreatePdnsZoneResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /**Object Zone信息**/
         public  $ZoneVpc;

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
            if (array_key_exists("ZoneVpc",$param) and $param["ZoneVpc"] !== null) {
                $this->ZoneVpc = $param["ZoneVpc"];
            }

        }
}