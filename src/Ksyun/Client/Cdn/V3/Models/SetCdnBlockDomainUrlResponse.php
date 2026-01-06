<?php
namespace  Ksyun\Client\Cdn\V3\Models;

use Ksyun\Common\BaseModel;

class SetCdnBlockDomainUrlResponse extends BaseModel
{
         /** 任务Id**/
         public  $TaskId;

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

        }
}