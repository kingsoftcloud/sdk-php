<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;

class DescribeMcpRuntimeMetricsResponse extends BaseModel
{
         /** 请求唯一标识**/
         public  $RequestId;

         /** MCP服务ID**/
         public  $McpServerId;

         /** 开始时间（Unix时间戳，秒）**/
         public  $StartTime;

         /** 结束时间（Unix时间戳，秒）**/
         public  $EndTime;

         /** 聚合周期（秒）**/
         public  $Interval;

         /** 实例数量**/
         public  $InstanceCount;

         /**Object 指标序列列表**/
         public  $Series;

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
            if (array_key_exists("McpServerId",$param) and $param["McpServerId"] !== null) {
                $this->McpServerId = $param["McpServerId"];
            }
            if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
                $this->StartTime = $param["StartTime"];
            }
            if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
                $this->EndTime = $param["EndTime"];
            }
            if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
                $this->Interval = $param["Interval"];
            }
            if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
                $this->InstanceCount = $param["InstanceCount"];
            }
            if (array_key_exists("Series",$param) and $param["Series"] !== null) {
                $this->Series = $param["Series"];
            }

        }
}