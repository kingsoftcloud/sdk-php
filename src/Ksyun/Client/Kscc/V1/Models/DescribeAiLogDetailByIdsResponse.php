<?php
namespace  Ksyun\Client\Kscc\V1\Models;

use Ksyun\Common\BaseModel;

class DescribeAiLogDetailByIdsResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 日志详情列表**/
         public  $DescribeAiLogDetailByIdsResult;

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
            if (array_key_exists("DescribeAiLogDetailByIdsResult",$param) and $param["DescribeAiLogDetailByIdsResult"] !== null) {
                $this->DescribeAiLogDetailByIdsResult = $param["DescribeAiLogDetailByIdsResult"];
            }

        }
}