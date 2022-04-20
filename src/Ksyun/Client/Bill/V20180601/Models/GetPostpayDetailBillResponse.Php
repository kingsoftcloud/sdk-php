<?php
namespace  Ksyun\Client\Bill\V20180601\Models;

use Ksyun\Common\BaseModel;

class GetPostpayDetailBillResponse extends BaseModel
{
         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }

        }
}