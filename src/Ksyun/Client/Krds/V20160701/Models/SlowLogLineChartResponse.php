<?php
namespace  Ksyun\Client\Krds\V20160701\Models;

use Ksyun\Common\BaseModel;

class SlowLogLineChartResponse extends BaseModel
{
         /**Object **/
         public  $data;

         /** **/
         public  $TotalCount;

         /** **/
         public  $QuerySum;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("data",$param) and $param["data"] !== null) {
                $this->data = $param["data"];
            }
            if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
                $this->TotalCount = $param["TotalCount"];
            }
            if (array_key_exists("QuerySum",$param) and $param["QuerySum"] !== null) {
                $this->QuerySum = $param["QuerySum"];
            }

        }
}