<?php
namespace  Ksyun\Client\Cdn\V3\Models;

use Ksyun\Common\BaseModel;

class SetPageCompressConfigResponse extends BaseModel
{
         /** **/
         public  $SetPageCompressConfigResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("SetPageCompressConfigResponse",$param) and $param["SetPageCompressConfigResponse"] !== null) {
                $this->SetPageCompressConfigResponse = $param["SetPageCompressConfigResponse"];
            }

        }
}