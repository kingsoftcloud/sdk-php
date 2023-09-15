<?php
namespace  Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyPrivateLinkServerResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /**Object PrivateLinkServer信息**/
         public  $PrivateLinkServer;

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
            if (array_key_exists("PrivateLinkServer",$param) and $param["PrivateLinkServer"] !== null) {
                $this->PrivateLinkServer = $param["PrivateLinkServer"];
            }

        }
}