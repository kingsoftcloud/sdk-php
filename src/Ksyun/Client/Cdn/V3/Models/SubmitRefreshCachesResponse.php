<?php
namespace  Ksyun\Client\Cdn\V3\Models;

use Ksyun\Common\BaseModel;

class SubmitRefreshCachesResponse extends BaseModel
{
         /** 刷新返回的任务ID**/
         public  $RefreshTaskId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("RefreshTaskId",$param) and $param["RefreshTaskId"] !== null) {
                $this->RefreshTaskId = $param["RefreshTaskId"];
            }

        }
}