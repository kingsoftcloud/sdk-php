<?php
namespace  Ksyun\Client\Monitor\V20250101\Models;

use Ksyun\Common\BaseModel;

class QueryRangeResponse extends BaseModel
{
         /** 请求的处理状态。**/
         public  $status;

         /** **/
         public  $isPartial;

         /** **/
         public  $data;

         /** **/
         public  $stats;

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
            if (array_key_exists("isPartial",$param) and $param["isPartial"] !== null) {
                $this->isPartial = $param["isPartial"];
            }
            if (array_key_exists("data",$param) and $param["data"] !== null) {
                $this->data = $param["data"];
            }
            if (array_key_exists("stats",$param) and $param["stats"] !== null) {
                $this->stats = $param["stats"];
            }

        }
}