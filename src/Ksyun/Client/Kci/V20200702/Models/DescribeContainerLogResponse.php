<?php
namespace  Ksyun\Client\Kci\V20200702\Models;

use Ksyun\Common\BaseModel;

class DescribeContainerLogResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 日志字符串文本**/
         public  $Content;

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
            if (array_key_exists("Content",$param) and $param["Content"] !== null) {
                $this->Content = $param["Content"];
            }

        }
}