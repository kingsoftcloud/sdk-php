<?php
namespace  Ksyun\Client\Cdn\V20160901\Models;

use Ksyun\Common\BaseModel;

class RefreshCachesResponse extends BaseModel
{
         /** RefreshTaskId**/
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