<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;

class DescribeKnowledgeStorageMonitorResponse extends BaseModel
{
         /** 请求唯一标识**/
         public  $RequestId;

         /** 当前存储用量（GB）**/
         public  $CurrentStorage;

         /** 今日存储增量（GB）**/
         public  $TodayIncrement;

         /** 文档数量**/
         public  $DocumentCount;

         /**Object 存储趋势**/
         public  $StorageTrend;

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
            if (array_key_exists("CurrentStorage",$param) and $param["CurrentStorage"] !== null) {
                $this->CurrentStorage = $param["CurrentStorage"];
            }
            if (array_key_exists("TodayIncrement",$param) and $param["TodayIncrement"] !== null) {
                $this->TodayIncrement = $param["TodayIncrement"];
            }
            if (array_key_exists("DocumentCount",$param) and $param["DocumentCount"] !== null) {
                $this->DocumentCount = $param["DocumentCount"];
            }
            if (array_key_exists("StorageTrend",$param) and $param["StorageTrend"] !== null) {
                $this->StorageTrend = $param["StorageTrend"];
            }

        }
}