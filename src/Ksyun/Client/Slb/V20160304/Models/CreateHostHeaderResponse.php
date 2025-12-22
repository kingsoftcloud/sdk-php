<?php
namespace  Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateHostHeaderResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 域名的信息**/
         public  $HostHeader;

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
            if (array_key_exists("HostHeader",$param) and $param["HostHeader"] !== null) {
                $this->HostHeader = $param["HostHeader"];
            }

        }
}