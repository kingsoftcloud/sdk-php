<?php
namespace  Ksyun\Client\Bill_union\V20250801\Models;

use Ksyun\Common\BaseModel;

class QueryItemBillsResponse extends BaseModel
{
         /** requestId**/
         public  $RequestId;

         /** 响应数据结构体**/
         public  $Data;

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
            if (array_key_exists("Data",$param) and $param["Data"] !== null) {
                $this->Data = $param["Data"];
            }

        }
}