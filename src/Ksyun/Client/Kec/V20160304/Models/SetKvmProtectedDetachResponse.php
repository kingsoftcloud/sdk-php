<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class SetKvmProtectedDetachResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 伸缩组实例数量**/
         public  $ScalingInstanceCountCount;

         /** 伸缩实例集合**/
         public  $ScalingInstanceSet;

         /** **/
         public  $;

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
            if (array_key_exists("ScalingInstanceCountCount",$param) and $param["ScalingInstanceCountCount"] !== null) {
                $this->ScalingInstanceCountCount = $param["ScalingInstanceCountCount"];
            }
            if (array_key_exists("ScalingInstanceSet",$param) and $param["ScalingInstanceSet"] !== null) {
                $this->ScalingInstanceSet = $param["ScalingInstanceSet"];
            }
            if (array_key_exists("",$param) and $param[""] !== null) {
                $this-> = $param[""];
            }

        }
}