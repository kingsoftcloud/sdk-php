<?php
namespace  Ksyun\Client\Pdns\V20160304\Models;

use Ksyun\Common\BaseModel;

class BatchCreateZoneRecordResponse extends BaseModel
{
         /** 请求id**/
         public  $RequestId;

         /**Object **/
         public  $RecordSet;

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
            if (array_key_exists("RecordSet",$param) and $param["RecordSet"] !== null) {
                $this->RecordSet = $param["RecordSet"];
            }

        }
}