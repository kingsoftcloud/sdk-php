<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;

class DescribeTrainJobPodLogsResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 日志内容。若资源组关联了Klog，请使用Klog的GetLogs接口查询**/
         public  $PodLogs;

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
            if (array_key_exists("PodLogs",$param) and $param["PodLogs"] !== null) {
                $this->PodLogs = $param["PodLogs"];
            }

        }
}