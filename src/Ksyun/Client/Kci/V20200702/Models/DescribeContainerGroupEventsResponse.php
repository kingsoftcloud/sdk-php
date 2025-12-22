<?php
namespace  Ksyun\Client\Kci\V20200702\Models;

use Ksyun\Common\BaseModel;

class DescribeContainerGroupEventsResponse extends BaseModel
{
         /** **/
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