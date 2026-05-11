<?php
namespace  Ksyun\Client\Kscc\V1\Models;

use Ksyun\Common\BaseModel;

class DescribeDeptQuotaListResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 部门配额列表结果**/
         public  $DescribeDeptQuotaListResult;

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
            if (array_key_exists("DescribeDeptQuotaListResult",$param) and $param["DescribeDeptQuotaListResult"] !== null) {
                $this->DescribeDeptQuotaListResult = $param["DescribeDeptQuotaListResult"];
            }

        }
}