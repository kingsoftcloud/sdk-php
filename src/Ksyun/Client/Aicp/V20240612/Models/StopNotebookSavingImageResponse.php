<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;

class StopNotebookSavingImageResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 开发任务ID**/
         public  $NotebookId;

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

        }
}