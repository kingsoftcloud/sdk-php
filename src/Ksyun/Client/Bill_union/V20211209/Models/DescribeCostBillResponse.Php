<?php
namespace  Ksyun\Client\Bill_union\V20211209\Models;

use Ksyun\Common\BaseModel;

class DescribeCostBillResponse extends BaseModel
{
         /** **/
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