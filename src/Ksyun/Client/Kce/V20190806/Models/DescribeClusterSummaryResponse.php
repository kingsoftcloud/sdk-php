<?php
namespace  Ksyun\Client\Kce\V20190806\Models;

use Ksyun\Common\BaseModel;

class DescribeClusterSummaryResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /** **/
         public  $ClusterSet;

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
            if (array_key_exists("ClusterSet",$param) and $param["ClusterSet"] !== null) {
                $this->ClusterSet = $param["ClusterSet"];
            }

        }
}