<?php
namespace  Ksyun\Client\Cdn\V3\Models;

use Ksyun\Common\BaseModel;

class SetErrorPageConfigResponse extends BaseModel
{
         /** SetErrorPageConfig**/
         public  $SetErrorPageConfig;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("SetErrorPageConfig",$param) and $param["SetErrorPageConfig"] !== null) {
                $this->SetErrorPageConfig = $param["SetErrorPageConfig"];
            }

        }
}