<?php
namespace  Ksyun\Client\Monitor\V20181114\Models;

use Ksyun\Common\BaseModel;

class GetMetricStatisticsBatchResponse extends BaseModel
{
         /** status**/
         public  $status;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("status",$param) and $param["status"] !== null) {
                $this->status = $param["status"];
            }

        }
}