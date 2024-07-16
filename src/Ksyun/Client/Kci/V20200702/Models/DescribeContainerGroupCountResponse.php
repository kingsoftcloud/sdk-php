<?php
namespace  Ksyun\Client\Kci\V20200702\Models;

use Ksyun\Common\BaseModel;

class DescribeContainerGroupCountResponse extends BaseModel
{
         /** 请求Id**/
         public  $RequestId;

         /**Object **/
         public  $ClusterPodCounts;

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
            if (array_key_exists("ClusterPodCounts",$param) and $param["ClusterPodCounts"] !== null) {
                $this->ClusterPodCounts = $param["ClusterPodCounts"];
            }

        }
}