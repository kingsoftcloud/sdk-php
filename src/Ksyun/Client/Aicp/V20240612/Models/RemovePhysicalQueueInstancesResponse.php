<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;

class RemovePhysicalQueueInstancesResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 队列ID**/
         public  $QueueId;

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
            if (array_key_exists("QueueId",$param) and $param["QueueId"] !== null) {
                $this->QueueId = $param["QueueId"];
            }

        }
}