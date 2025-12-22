<?php
namespace  Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;

class AssociatePrivateLinkServerResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** PrivateLink的信息**/
         public  $PrivateLink;

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
            if (array_key_exists("PrivateLink",$param) and $param["PrivateLink"] !== null) {
                $this->PrivateLink = $param["PrivateLink"];
            }

        }
}