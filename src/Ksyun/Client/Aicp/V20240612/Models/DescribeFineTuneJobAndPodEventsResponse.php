<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;

class DescribeFineTuneJobAndPodEventsResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /**Object 事件列表**/
         public  $Events;

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
            if (array_key_exists("Events",$param) and $param["Events"] !== null) {
                $this->Events = $param["Events"];
            }

        }
}