<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;

class DescribeMcpRuntimeLogsResponse extends BaseModel
{
         /** 请求唯一标识**/
         public  $RequestId;

         /** MCP服务ID**/
         public  $McpServerId;

         /** 开始时间（Unix时间戳，秒）**/
         public  $StartTime;

         /** 结束时间（Unix时间戳，秒）**/
         public  $EndTime;

         /** 日志类型**/
         public  $LogType;

         /**String 日志内容列表**/
         public  $Logs;

         /** 总条数**/
         public  $Total;

         /** 页码**/
         public  $Page;

         /** 每页条数**/
         public  $Limit;

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
            if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
                $this->LogType = $param["LogType"];
            }
            if (array_key_exists("Logs",$param) and $param["Logs"] !== null) {
                $this->Logs = $param["Logs"];
            }
            if (array_key_exists("Total",$param) and $param["Total"] !== null) {
                $this->Total = $param["Total"];
            }
            if (array_key_exists("Page",$param) and $param["Page"] !== null) {
                $this->Page = $param["Page"];
            }
            if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
                $this->Limit = $param["Limit"];
            }

        }
}