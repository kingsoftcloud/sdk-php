<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeScalingInstanceResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /** **/
         public  $ScalingInstanceCount;

         /**Object **/
         public  $ScalingInstanceSet;

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
            if (array_key_exists("ScalingInstanceSet",$param) and $param["ScalingInstanceSet"] !== null) {
                $this->ScalingInstanceSet = $param["ScalingInstanceSet"];
            }

        }
}