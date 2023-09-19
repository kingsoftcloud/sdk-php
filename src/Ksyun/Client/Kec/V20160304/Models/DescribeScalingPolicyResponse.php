<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeScalingPolicyResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /** **/
         public  $ScalingPolicySize;

         /**Object **/
         public  $ScalingPolicySet;

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
            if (array_key_exists("ScalingPolicySize",$param) and $param["ScalingPolicySize"] !== null) {
                $this->ScalingPolicySize = $param["ScalingPolicySize"];
            }
            if (array_key_exists("ScalingPolicySet",$param) and $param["ScalingPolicySet"] !== null) {
                $this->ScalingPolicySet = $param["ScalingPolicySet"];
            }

        }
}