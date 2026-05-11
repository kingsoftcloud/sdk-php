<?php
namespace  Ksyun\Client\Kscc\V1\Models;

use Ksyun\Common\BaseModel;

class DescribeQuotaGlobalConfigResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 配额全局配置**/
         public  $DescribeQuotaGlobalConfigResult;

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
            if (array_key_exists("DescribeQuotaGlobalConfigResult",$param) and $param["DescribeQuotaGlobalConfigResult"] !== null) {
                $this->DescribeQuotaGlobalConfigResult = $param["DescribeQuotaGlobalConfigResult"];
            }

        }
}