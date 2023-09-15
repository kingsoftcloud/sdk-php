<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyScalingNotificationResponse extends BaseModel
{
         /** **/
         public  $RequestID;

         /** **/
         public  $Return;

         /** **/
         public  $ScalingNotificationId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("RequestID",$param) and $param["RequestID"] !== null) {
                $this->RequestID = $param["RequestID"];
            }
            if (array_key_exists("Return",$param) and $param["Return"] !== null) {
                $this->Return = $param["Return"];
            }
            if (array_key_exists("ScalingNotificationId",$param) and $param["ScalingNotificationId"] !== null) {
                $this->ScalingNotificationId = $param["ScalingNotificationId"];
            }

        }
}