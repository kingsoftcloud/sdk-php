<?php
namespace  Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;

class ListPrivateLinkServerResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** PrivateLink的信息**/
         public  $PrivateLinkSet;

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
            if (array_key_exists("PrivateLinkSet",$param) and $param["PrivateLinkSet"] !== null) {
                $this->PrivateLinkSet = $param["PrivateLinkSet"];
            }

        }
}