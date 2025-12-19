<?php
namespace  Ksyun\Client\Cdn\V20250503\Models;

use Ksyun\Common\BaseModel;

class SetSetOriginAdvancedConfigResponse extends BaseModel
{
         /** **/
         public  $SetOriginAdvancedConfigResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("SetOriginAdvancedConfigResponse",$param) and $param["SetOriginAdvancedConfigResponse"] !== null) {
                $this->SetOriginAdvancedConfigResponse = $param["SetOriginAdvancedConfigResponse"];
            }

        }
}