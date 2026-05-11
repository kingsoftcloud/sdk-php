<?php
namespace  Ksyun\Client\Kscc\V1\Models;

use Ksyun\Common\BaseModel;

class DescribeAiLogDetailResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 日志分页结果**/
         public  $DescribeAiLogDetailResult;

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
            if (array_key_exists("DescribeAiLogDetailResult",$param) and $param["DescribeAiLogDetailResult"] !== null) {
                $this->DescribeAiLogDetailResult = $param["DescribeAiLogDetailResult"];
            }

        }
}