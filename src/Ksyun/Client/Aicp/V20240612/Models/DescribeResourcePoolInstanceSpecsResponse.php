<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;

class DescribeResourcePoolInstanceSpecsResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /**Object 节点规格统计列表**/
         public  $NodeSpecs;

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
            if (array_key_exists("NodeSpecs",$param) and $param["NodeSpecs"] !== null) {
                $this->NodeSpecs = $param["NodeSpecs"];
            }

        }
}