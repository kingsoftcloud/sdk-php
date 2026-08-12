<?php
namespace  Ksyun\Client\Kpfs\V20240930\Models;

use Ksyun\Common\BaseModel;

class GetDataMigrateTaskProgressResponse extends BaseModel
{
         /** 唯一请求ID，每次请求都会返回。**/
         public  $RequestId;

         /** 数据流动任务状态。NOT_RUNNING：未运行，RUNNING：运行中**/
         public  $ExecStatus;

         /** 数据流动任务运行次数**/
         public  $ExecCount;

         /** 数据流动任务执行开始时间**/
         public  $ExecStartTime;

         /** 数据流动任务统计信息**/
         public  $ExecStatistic;

         /** 任务运行中的实时进度信息**/
         public  $ProgressInfo;

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
            if (array_key_exists("ExecStatus",$param) and $param["ExecStatus"] !== null) {
                $this->ExecStatus = $param["ExecStatus"];
            }
            if (array_key_exists("ExecCount",$param) and $param["ExecCount"] !== null) {
                $this->ExecCount = $param["ExecCount"];
            }
            if (array_key_exists("ExecStartTime",$param) and $param["ExecStartTime"] !== null) {
                $this->ExecStartTime = $param["ExecStartTime"];
            }
            if (array_key_exists("ExecStatistic",$param) and $param["ExecStatistic"] !== null) {
                $this->ExecStatistic = $param["ExecStatistic"];
            }
            if (array_key_exists("ProgressInfo",$param) and $param["ProgressInfo"] !== null) {
                $this->ProgressInfo = $param["ProgressInfo"];
            }

        }
}