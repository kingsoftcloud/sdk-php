<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;

class QueryMemoryCollectionMetricsResponse extends BaseModel
{
         /** **/
         public  $MemoryCollectionId;

         /**Object **/
         public  $MetricsByAction;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("MemoryCollectionId",$param) and $param["MemoryCollectionId"] !== null) {
                $this->MemoryCollectionId = $param["MemoryCollectionId"];
            }
            if (array_key_exists("MetricsByAction",$param) and $param["MetricsByAction"] !== null) {
                $this->MetricsByAction = $param["MetricsByAction"];
            }

        }
}