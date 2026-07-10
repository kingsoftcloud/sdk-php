<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;

class GetApiDetailResponse extends BaseModel
{
         /** 请求唯一标识**/
         public  $RequestId;

         /**Object API详情**/
         public  $ApiDetail;

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
            if (array_key_exists("ApiDetail",$param) and $param["ApiDetail"] !== null) {
                $this->ApiDetail = $param["ApiDetail"];
            }

        }
}