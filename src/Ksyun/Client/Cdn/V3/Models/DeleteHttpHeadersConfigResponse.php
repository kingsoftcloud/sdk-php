<?php
namespace  Ksyun\Client\Cdn\V3\Models;

use Ksyun\Common\BaseModel;

class DeleteHttpHeadersConfigResponse extends BaseModel
{
         /** DeleteHttpHeadersConfig**/
         public  $DeleteHttpHeadersConfig;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("DeleteHttpHeadersConfig",$param) and $param["DeleteHttpHeadersConfig"] !== null) {
                $this->DeleteHttpHeadersConfig = $param["DeleteHttpHeadersConfig"];
            }

        }
}