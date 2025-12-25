<?php
namespace  Ksyun\Client\Cdn\V3\Models;

use Ksyun\Common\BaseModel;

class GetBillingModeResponse extends BaseModel
{
         /** GetBillingModeResponse**/
         public  $GetBillingModeResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("GetBillingModeResponse",$param) and $param["GetBillingModeResponse"] !== null) {
                $this->GetBillingModeResponse = $param["GetBillingModeResponse"];
            }

        }
}