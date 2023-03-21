<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeScalingInstanceResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 伸缩组实例数量**/
         public  $ScalingInstanceCount;

         /** 伸缩组实例集合**/
         public  $ScalingActivitySet;

         /** 伸缩组期望实例数量**/
         public  $DesiredCapacity;

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
            if (array_key_exists("ScalingInstanceCount",$param) and $param["ScalingInstanceCount"] !== null) {
                $this->ScalingInstanceCount = $param["ScalingInstanceCount"];
            }
            if (array_key_exists("ScalingActivitySet",$param) and $param["ScalingActivitySet"] !== null) {
                $this->ScalingActivitySet = $param["ScalingActivitySet"];
            }
            if (array_key_exists("DesiredCapacity",$param) and $param["DesiredCapacity"] !== null) {
                $this->DesiredCapacity = $param["DesiredCapacity"];
            }

        }
}