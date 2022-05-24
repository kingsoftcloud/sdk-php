<?php
namespace  Ksyun\Client\Bill_union\V20211209\Models;

use Ksyun\Common\BaseModel;

class DescribeCostBillResponse extends BaseModel
{
         /**Object **/
         public  $Status;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("Status",$param) and $param["Status"] !== null) {
                $this->Status = $param["Status"];
            }

        }
}