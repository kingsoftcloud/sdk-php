<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeScalingGroupResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 伸缩组实例数量**/
         public  $ScalingGroupCount;

         /** 伸缩组集合**/
         public  $ScalingGroupSet;

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
            if (array_key_exists("ScalingGroupCount",$param) and $param["ScalingGroupCount"] !== null) {
                $this->ScalingGroupCount = $param["ScalingGroupCount"];
            }
            if (array_key_exists("ScalingGroupSet",$param) and $param["ScalingGroupSet"] !== null) {
                $this->ScalingGroupSet = $param["ScalingGroupSet"];
            }

        }
}