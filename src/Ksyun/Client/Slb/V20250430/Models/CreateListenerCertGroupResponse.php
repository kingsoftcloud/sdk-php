<?php
namespace  Ksyun\Client\Slb\V20250430\Models;

use Ksyun\Common\BaseModel;

class CreateListenerCertGroupResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /**Object 证书组的信息**/
         public  $ListenerCertGroup;

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
            if (array_key_exists("ListenerCertGroup",$param) and $param["ListenerCertGroup"] !== null) {
                $this->ListenerCertGroup = $param["ListenerCertGroup"];
            }

        }
}