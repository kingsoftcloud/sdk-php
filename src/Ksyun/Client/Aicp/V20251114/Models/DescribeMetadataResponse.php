<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;

class DescribeMetadataResponse extends BaseModel
{
         /** 请求唯一标识**/
         public  $RequestId;

         /**Object 元数据列表**/
         public  $DocMetadata;

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
            if (array_key_exists("DocMetadata",$param) and $param["DocMetadata"] !== null) {
                $this->DocMetadata = $param["DocMetadata"];
            }

        }
}