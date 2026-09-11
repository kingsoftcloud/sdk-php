<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;

class DescribeNotebookTimeLineResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 开发任务ID**/
         public  $NotebookId;

         /**Object 时间线事件列表**/
         public  $EventList;

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
            if (array_key_exists("NotebookId",$param) and $param["NotebookId"] !== null) {
                $this->NotebookId = $param["NotebookId"];
            }
            if (array_key_exists("EventList",$param) and $param["EventList"] !== null) {
                $this->EventList = $param["EventList"];
            }

        }
}