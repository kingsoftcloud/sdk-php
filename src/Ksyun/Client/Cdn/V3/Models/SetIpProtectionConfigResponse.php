<?php
namespace  Ksyun\Client\Cdn\V3\Models;

use Ksyun\Common\BaseModel;

class SetIpProtectionConfigResponse extends BaseModel
{
         /** SetIpProtectionConfigResponse**/
         public  $SetIpProtectionConfigResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("SetIpProtectionConfigResponse",$param) and $param["SetIpProtectionConfigResponse"] !== null) {
                $this->SetIpProtectionConfigResponse = $param["SetIpProtectionConfigResponse"];
            }

        }
}