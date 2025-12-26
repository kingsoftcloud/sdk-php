<?php
namespace  Ksyun\Client\Monitor\V20250101\Models;

use Ksyun\Common\BaseModel;

class ListAlarmEffectInstanceResponse extends BaseModel
{
         /** **/
         public  $RequestID;

         /** **/
         public  $TotalCount;

         /**Object **/
         public  $Alarms;

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
            if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
                $this->TotalCount = $param["TotalCount"];
            }
            if (array_key_exists("Alarms",$param) and $param["Alarms"] !== null) {
                $this->Alarms = $param["Alarms"];
            }

        }
}