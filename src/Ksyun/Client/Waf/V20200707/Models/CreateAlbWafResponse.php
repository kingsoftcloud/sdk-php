<?php
namespace  Ksyun\Client\Waf\V20200707\Models;

use Ksyun\Common\BaseModel;

class CreateAlbWafResponse extends BaseModel
{
         /**Object waf信息**/
         public  $WafInfo;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("WafInfo",$param) and $param["WafInfo"] !== null) {
                $this->WafInfo = $param["WafInfo"];
            }

        }
}