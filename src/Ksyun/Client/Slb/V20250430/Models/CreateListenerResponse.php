<?php
namespace  Ksyun\Client\Slb\V20250430\Models;

use Ksyun\Common\BaseModel;

class CreateListenerResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /**Object 监听器的信息**/
         public  $Listener;

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
            if (array_key_exists("Listener",$param) and $param["Listener"] !== null) {
                $this->Listener = $param["Listener"];
            }

        }
}