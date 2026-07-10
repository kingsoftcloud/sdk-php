<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;

class GetProductListResponse extends BaseModel
{
         /** 请求唯一标识**/
         public  $RequestId;

         /**Object 产品列表**/
         public  $ProductInfoList;

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
            if (array_key_exists("ProductInfoList",$param) and $param["ProductInfoList"] !== null) {
                $this->ProductInfoList = $param["ProductInfoList"];
            }

        }
}