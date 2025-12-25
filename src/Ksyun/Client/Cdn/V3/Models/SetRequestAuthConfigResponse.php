<?php
namespace  Ksyun\Client\Cdn\V3\Models;

use Ksyun\Common\BaseModel;

class SetRequestAuthConfigResponse extends BaseModel
{
         /** SetRequestAuthConfigResponse**/
         public  $SetRequestAuthConfigResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("SetRequestAuthConfigResponse",$param) and $param["SetRequestAuthConfigResponse"] !== null) {
                $this->SetRequestAuthConfigResponse = $param["SetRequestAuthConfigResponse"];
            }

        }
}