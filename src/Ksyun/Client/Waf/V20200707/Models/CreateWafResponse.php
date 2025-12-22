<?php
namespace  Ksyun\Client\Waf\V20200707\Models;

use Ksyun\Common\BaseModel;

class CreateWafResponse extends BaseModel
{
         /** 请求id**/
         public  $RequestId;

         /** WAF实例信息**/
         public  $WafInfo;

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
            if (array_key_exists("WafInfo",$param) and $param["WafInfo"] !== null) {
                $this->WafInfo = $param["WafInfo"];
            }

        }
}