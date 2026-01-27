<?php
namespace  Ksyun\Client\Aicp\V20251212\Models;

use Ksyun\Common\BaseModel;

class DescribeFormatAndFrameworksResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /**Object 模型格式与框架列表**/
         public  $FormatAndFrameworks;

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
            if (array_key_exists("FormatAndFrameworks",$param) and $param["FormatAndFrameworks"] !== null) {
                $this->FormatAndFrameworks = $param["FormatAndFrameworks"];
            }

        }
}