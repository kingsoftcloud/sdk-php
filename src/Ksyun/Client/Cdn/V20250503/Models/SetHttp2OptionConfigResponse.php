<?php
namespace  Ksyun\Client\Cdn\V20250503\Models;

use Ksyun\Common\BaseModel;

class SetHttp2OptionConfigResponse extends BaseModel
{
         /** **/
         public  $SetHttp2OptionConfigResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("SetHttp2OptionConfigResponse",$param) and $param["SetHttp2OptionConfigResponse"] !== null) {
                $this->SetHttp2OptionConfigResponse = $param["SetHttp2OptionConfigResponse"];
            }

        }
}