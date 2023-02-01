<?php
namespace  Ksyun\Client\Bill_union\V20200101\Models;

use Ksyun\Common\BaseModel;

class DescribeSplitItemBillDetailsResponse extends BaseModel
{
         /** **/
         public  $Status;

         /** **/
         public  $RequestId;

         /** **/
         public  $Data;

         /** **/
         public  $Error;

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
            if (array_key_exists("Data",$param) and $param["Data"] !== null) {
                $this->Data = $param["Data"];
            }
            if (array_key_exists("Error",$param) and $param["Error"] !== null) {
                $this->Error = $param["Error"];
            }

        }
}