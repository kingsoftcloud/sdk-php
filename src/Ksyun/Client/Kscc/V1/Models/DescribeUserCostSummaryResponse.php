<?php
namespace  Ksyun\Client\Kscc\V1\Models;

use Ksyun\Common\BaseModel;

class DescribeUserCostSummaryResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** **/
         public  $DescribeUserCostSummaryResult;

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
            if (array_key_exists("DescribeUserCostSummaryResult",$param) and $param["DescribeUserCostSummaryResult"] !== null) {
                $this->DescribeUserCostSummaryResult = $param["DescribeUserCostSummaryResult"];
            }

        }
}