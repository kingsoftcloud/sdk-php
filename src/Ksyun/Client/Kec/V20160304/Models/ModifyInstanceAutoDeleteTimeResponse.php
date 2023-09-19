<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyInstanceAutoDeleteTimeResponse extends BaseModel
{
         /** **/
         public  $AutoDeleteResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("AutoDeleteResponse",$param) and $param["AutoDeleteResponse"] !== null) {
                $this->AutoDeleteResponse = $param["AutoDeleteResponse"];
            }

        }
}