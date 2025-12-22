<?php
namespace  Ksyun\Client\Trade\V20250321\Models;

use Ksyun\Common\BaseModel;

class QueryUnPayOrdersResponse extends BaseModel
{
         /**Object 待支付订单列表数据**/
         public  $data;

         /** 待支付订单总条数**/
         public  $total;

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
            if (array_key_exists("total",$param) and $param["total"] !== null) {
                $this->total = $param["total"];
            }

        }
}