<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;

class CreateUsageDownloadTaskResponse extends BaseModel
{
         /** 导出任务ID**/
         public  $TaskId;

         /** 导出任务创建时间**/
         public  $CreateTimestamp;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
                $this->TaskId = $param["TaskId"];
            }
            if (array_key_exists("CreateTimestamp",$param) and $param["CreateTimestamp"] !== null) {
                $this->CreateTimestamp = $param["CreateTimestamp"];
            }

        }
}