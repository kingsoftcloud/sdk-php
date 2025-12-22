<?php
namespace  Ksyun\Client\Cdn\V3\Models;

use Ksyun\Common\BaseModel;

class SetReferProtectionConfigResponse extends BaseModel
{
         /** SetReferProtectionConfigResponse**/
         public  $SetReferProtectionConfigResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("SetReferProtectionConfigResponse",$param) and $param["SetReferProtectionConfigResponse"] !== null) {
                $this->SetReferProtectionConfigResponse = $param["SetReferProtectionConfigResponse"];
            }

        }
}