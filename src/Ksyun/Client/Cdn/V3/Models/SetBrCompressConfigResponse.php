<?php
namespace  Ksyun\Client\Cdn\V3\Models;

use Ksyun\Common\BaseModel;

class SetBrCompressConfigResponse extends BaseModel
{
         /** **/
         public  $SetBrCompressConfigResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("SetBrCompressConfigResponse",$param) and $param["SetBrCompressConfigResponse"] !== null) {
                $this->SetBrCompressConfigResponse = $param["SetBrCompressConfigResponse"];
            }

        }
}