<?php
namespace  Ksyun\Client\Kscc\V1\Models;

use Ksyun\Common\BaseModel;

class DescribeUserQuotaListResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 用户配额列表结果**/
         public  $DescribeUserQuotaListResult;

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
            if (array_key_exists("DescribeUserQuotaListResult",$param) and $param["DescribeUserQuotaListResult"] !== null) {
                $this->DescribeUserQuotaListResult = $param["DescribeUserQuotaListResult"];
            }

        }
}