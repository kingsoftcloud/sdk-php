<?php
namespace  Ksyun\Client\Kscc\V1\Models;

use Ksyun\Common\BaseModel;

class DescribeAccountQuotaResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 账号配额结果**/
         public  $DescribeAccountQuotaResult;

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
            if (array_key_exists("DescribeAccountQuotaResult",$param) and $param["DescribeAccountQuotaResult"] !== null) {
                $this->DescribeAccountQuotaResult = $param["DescribeAccountQuotaResult"];
            }

        }
}