<?php
namespace  Ksyun\Client\Cdn\V20250503\Models;

use Ksyun\Common\BaseModel;

class SetVideoSeekConfigResponse extends BaseModel
{
         /** **/
         public  $SetVideoSeekConfigResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("SetVideoSeekConfigResponse",$param) and $param["SetVideoSeekConfigResponse"] !== null) {
                $this->SetVideoSeekConfigResponse = $param["SetVideoSeekConfigResponse"];
            }

        }
}