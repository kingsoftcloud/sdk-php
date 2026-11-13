<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;

class BatchModifyStructuredDataResponse extends BaseModel
{
         /** 请求唯一标识**/
         public  $RequestId;

         /**Object 当前页行数据**/
         public  $Rows;

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
            if (array_key_exists("Rows",$param) and $param["Rows"] !== null) {
                $this->Rows = $param["Rows"];
            }

        }
}