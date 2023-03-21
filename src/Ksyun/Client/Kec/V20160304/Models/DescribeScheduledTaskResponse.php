<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeScheduledTaskResponse extends BaseModel
{
         /** 请求id**/
         public  $RequestId;

         /**Object 弹性伸缩定时任务列表**/
         public  $ScalingScheduleTaskSet;

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
            if (array_key_exists("ScalingScheduleTaskSet",$param) and $param["ScalingScheduleTaskSet"] !== null) {
                $this->ScalingScheduleTaskSet = $param["ScalingScheduleTaskSet"];
            }

        }
}