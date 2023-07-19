<?php
namespace  Ksyun\Client\Monitor\V20210101\Models;

use Ksyun\Common\BaseModel;

class ListMetricsResponse extends BaseModel
{
         /**Object 监控指标的集合**/
         public  $Metrics;

         /** 请求ID**/
         public  $RequestId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("Metrics",$param) and $param["Metrics"] !== null) {
                $this->Metrics = $param["Metrics"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}