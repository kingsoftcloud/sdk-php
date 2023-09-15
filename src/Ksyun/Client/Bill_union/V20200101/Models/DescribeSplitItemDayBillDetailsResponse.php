<?php
namespace  Ksyun\Client\Bill_union\V20200101\Models;

use Ksyun\Common\BaseModel;

class DescribeSplitItemDayBillDetailsResponse extends BaseModel
{
         /** 响应状态码**/
         public  $Status;

         /** 请求id**/
         public  $RequestId;

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
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}