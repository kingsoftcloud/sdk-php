<?php
namespace  Ksyun\Client\Cdn\V3\Models;

use Ksyun\Common\BaseModel;

class SetForceRedirectConfigResponse extends BaseModel
{
         /** SetForceRedirectConfig**/
         public  $SetForceRedirectConfig;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("SetForceRedirectConfig",$param) and $param["SetForceRedirectConfig"] !== null) {
                $this->SetForceRedirectConfig = $param["SetForceRedirectConfig"];
            }

        }
}