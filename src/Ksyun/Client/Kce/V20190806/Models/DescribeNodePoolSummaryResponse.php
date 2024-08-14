<?php
namespace  Ksyun\Client\Kce\V20190806\Models;

use Ksyun\Common\BaseModel;

class DescribeNodePoolSummaryResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /**Object 节点池信息**/
         public  $NodePools;

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
            if (array_key_exists("NodePools",$param) and $param["NodePools"] !== null) {
                $this->NodePools = $param["NodePools"];
            }

        }
}