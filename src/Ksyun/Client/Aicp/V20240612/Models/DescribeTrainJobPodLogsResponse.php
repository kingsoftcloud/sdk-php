<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;

class DescribeTrainJobPodLogsResponse extends BaseModel
{
         /** 请求id**/
         public  $RequestId;

         /** 日志内容**/
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