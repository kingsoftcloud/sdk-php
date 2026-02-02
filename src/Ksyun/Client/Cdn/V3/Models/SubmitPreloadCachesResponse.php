<?php
namespace  Ksyun\Client\Cdn\V3\Models;

use Ksyun\Common\BaseModel;

class SubmitPreloadCachesResponse extends BaseModel
{
         /** 预热返回的任务ID**/
         public  $PreloadTaskId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("PreloadTaskId",$param) and $param["PreloadTaskId"] !== null) {
                $this->PreloadTaskId = $param["PreloadTaskId"];
            }

        }
}