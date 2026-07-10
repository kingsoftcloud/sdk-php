<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;

class QueryMcpMetricsResponse extends BaseModel
{
         /** 请求唯一标识**/
         public  $RequestId;

         /**Object 指标时序数据列表**/
         public  $Metrics;

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
            if (array_key_exists("Metrics",$param) and $param["Metrics"] !== null) {
                $this->Metrics = $param["Metrics"];
            }

        }
}