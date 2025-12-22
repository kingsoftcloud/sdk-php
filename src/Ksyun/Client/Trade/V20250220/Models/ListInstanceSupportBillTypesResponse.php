<?php
namespace  Ksyun\Client\Trade\V20250220\Models;

use Ksyun\Common\BaseModel;

class ListInstanceSupportBillTypesResponse extends BaseModel
{
         /** **/
         public  $Error;

         /** 本次请求唯一标识**/
         public  $RequestId;

         /**Object **/
         public  $data;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("Error",$param) and $param["Error"] !== null) {
                $this->Error = $param["Error"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }
            if (array_key_exists("data",$param) and $param["data"] !== null) {
                $this->data = $param["data"];
            }

        }
}