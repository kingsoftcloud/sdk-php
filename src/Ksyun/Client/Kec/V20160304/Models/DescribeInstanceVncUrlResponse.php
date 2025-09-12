<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeInstanceVncUrlResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** Vnc地址**/
         public  $VncUrl;

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
            if (array_key_exists("VncUrl",$param) and $param["VncUrl"] !== null) {
                $this->VncUrl = $param["VncUrl"];
            }

        }
}