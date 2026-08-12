<?php
namespace  Ksyun\Client\Kpfs\V20240930\Models;

use Ksyun\Common\BaseModel;

class CreateDataMigrateTaskResponse extends BaseModel
{
         /** 数据流动任务ID**/
         public  $TaskId;

         /** 唯一请求ID，每次请求都会返回。**/
         public  $RequestId;

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
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}