<?php
namespace  Ksyun\Client\Pdns\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreatePdnsFdZoneResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 转发Zone信息**/
         public  $FdZone;

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
            if (array_key_exists("FdZone",$param) and $param["FdZone"] !== null) {
                $this->FdZone = $param["FdZone"];
            }

        }
}