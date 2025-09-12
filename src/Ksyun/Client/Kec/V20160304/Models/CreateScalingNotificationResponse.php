<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateScalingNotificationResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /** 弹性伸缩id**/
         public  $ScalingNotificationId;

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
            if (array_key_exists("ScalingNotificationId",$param) and $param["ScalingNotificationId"] !== null) {
                $this->ScalingNotificationId = $param["ScalingNotificationId"];
            }

        }
}