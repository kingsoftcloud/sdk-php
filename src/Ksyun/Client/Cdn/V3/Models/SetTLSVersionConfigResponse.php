<?php
namespace  Ksyun\Client\Cdn\V3\Models;

use Ksyun\Common\BaseModel;

class SetTLSVersionConfigResponse extends BaseModel
{
         /** TLSVersionConfigResponse**/
         public  $TLSVersionConfigResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("TLSVersionConfigResponse",$param) and $param["TLSVersionConfigResponse"] !== null) {
                $this->TLSVersionConfigResponse = $param["TLSVersionConfigResponse"];
            }

        }
}