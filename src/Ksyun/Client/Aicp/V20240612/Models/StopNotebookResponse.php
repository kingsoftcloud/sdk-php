<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;

class StopNotebookResponse extends BaseModel
{
         /** 开发任务ID**/
         public  $NotebookId;

         /** 请求ID**/
         public  $RequestId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("NotebookId",$param) and $param["NotebookId"] !== null) {
                $this->NotebookId = $param["NotebookId"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}