<?php
namespace  Ksyun\Client\Kscc\V1\Models;

use Ksyun\Common\BaseModel;

class DescribeModelMetricsResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 模型监控指标结果**/
         public  $DescribeModelMetricsResult;

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
            if (array_key_exists("DescribeModelMetricsResult",$param) and $param["DescribeModelMetricsResult"] !== null) {
                $this->DescribeModelMetricsResult = $param["DescribeModelMetricsResult"];
            }

        }
}