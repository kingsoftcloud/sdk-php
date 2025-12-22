<?php
namespace  Ksyun\Client\Trade\V20250321\Models;

use Ksyun\Common\BaseModel;

class CancelOrderResponse extends BaseModel
{
         /** 请求唯一id**/
         public  $RequestId;

         /** 是否取消成功**/
         public  $success;

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
            if (array_key_exists("success",$param) and $param["success"] !== null) {
                $this->success = $param["success"];
            }

        }
}