<?php
namespace  Ksyun\Client\Kcrs\V20211109\Models;

use Ksyun\Common\BaseModel;

class CreateWebhookTriggerResponse extends BaseModel
{
         /** **/
         public  $triggerId;

         /** **/
         public  $requestId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("triggerId",$param) and $param["triggerId"] !== null) {
                $this->triggerId = $param["triggerId"];
            }
            if (array_key_exists("requestId",$param) and $param["requestId"] !== null) {
                $this->requestId = $param["requestId"];
            }

        }
}