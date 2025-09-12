<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyNatRateLimitResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 网关流控限速的信息**/
         public  $NatRateLimit;

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
            if (array_key_exists("NatRateLimit",$param) and $param["NatRateLimit"] !== null) {
                $this->NatRateLimit = $param["NatRateLimit"];
            }

        }
}