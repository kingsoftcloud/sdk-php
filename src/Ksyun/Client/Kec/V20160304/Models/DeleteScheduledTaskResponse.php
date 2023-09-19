<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DeleteScheduledTaskResponse extends BaseModel
{
         /** **/
         public  $DeleteScheduledTaskResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("DeleteScheduledTaskResponse",$param) and $param["DeleteScheduledTaskResponse"] !== null) {
                $this->DeleteScheduledTaskResponse = $param["DeleteScheduledTaskResponse"];
            }

        }
}