<?php
namespace  Ksyun\Client\Cdn\V3\Models;

use Ksyun\Common\BaseModel;

class SetBackOriginHostConfigResponse extends BaseModel
{
         /** **/
         public  $SetBackOriginHostConfigResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("SetBackOriginHostConfigResponse",$param) and $param["SetBackOriginHostConfigResponse"] !== null) {
                $this->SetBackOriginHostConfigResponse = $param["SetBackOriginHostConfigResponse"];
            }

        }
}