<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeScalingNotificationResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /** **/
         public  $ScalingNotificationCount;

         /**Object **/
         public  $ScalingNotificationSet;

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
            if (array_key_exists("ScalingNotificationCount",$param) and $param["ScalingNotificationCount"] !== null) {
                $this->ScalingNotificationCount = $param["ScalingNotificationCount"];
            }
            if (array_key_exists("ScalingNotificationSet",$param) and $param["ScalingNotificationSet"] !== null) {
                $this->ScalingNotificationSet = $param["ScalingNotificationSet"];
            }

        }
}