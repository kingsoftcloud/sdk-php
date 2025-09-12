<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeScalingActivityResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /** **/
         public  $AvailabilityZone;

         /** **/
         public  $ScalingActivityCount;

         /**Object **/
         public  $ScalingActivitySet;

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
            if (array_key_exists("AvailabilityZone",$param) and $param["AvailabilityZone"] !== null) {
                $this->AvailabilityZone = $param["AvailabilityZone"];
            }
            if (array_key_exists("ScalingActivityCount",$param) and $param["ScalingActivityCount"] !== null) {
                $this->ScalingActivityCount = $param["ScalingActivityCount"];
            }
            if (array_key_exists("ScalingActivitySet",$param) and $param["ScalingActivitySet"] !== null) {
                $this->ScalingActivitySet = $param["ScalingActivitySet"];
            }

        }
}