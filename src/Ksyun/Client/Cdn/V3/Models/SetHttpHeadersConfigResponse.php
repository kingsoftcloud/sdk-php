<?php
namespace  Ksyun\Client\Cdn\V3\Models;

use Ksyun\Common\BaseModel;

class SetHttpHeadersConfigResponse extends BaseModel
{
         /** **/
         public  $SetHttpHeadersConfig;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("SetHttpHeadersConfig",$param) and $param["SetHttpHeadersConfig"] !== null) {
                $this->SetHttpHeadersConfig = $param["SetHttpHeadersConfig"];
            }

        }
}